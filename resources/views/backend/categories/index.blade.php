<x-backend.layouts.master>
    <x-slot:title>
        Categories List
        </x-slot>
        <div class="mb-4">
            <a href="{{ route('categories.create') }}" class="btn btn-success">Create Category</a>
            <a href="{{ route('categories.pdf') }}" class="btn btn-warning">Pdf</a>
            <a href="{{ route('categories.excel') }}" class="btn btn-info">Excel</a>
            <form action="{{ route('categories.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" style="width: 250px;">
                <button class="btn btn-success">Import User Data</button>
            </form>
            

        </div>
        <div class="card mb-4">
            <div class="card-header">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Successfully || </strong> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <i class="fas fa-table me-1"></i>
               Category List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Categories Name</th>
                            <th>Categories image</th>
                            <th>Acton</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Categories Name</th>
                            <th>Categories image</th>
                            <th>Acton</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_images }}</td>

                                <td>
                                    <a href="{{ route('categories.show', ['category' => $category->id]) }}"
                                        class="btn btn-sm btn-success">Show</a>
                                    <a href="{{ route('caterories.edit', ['category' => $category->id]) }}"
                                        class="btn btn-sm btn-info">Update</a>
                                    <form action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                        method="post" style="display:inline">
                                        @csrf
                                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</x-backend.layouts.master>
