<x-backend.layouts.master>
    {{-- {{ dd($products->productName) }} --}}

    <x-slot:title>
        Trust Data show Details
        </x-slot>
        <x-slot:deshboard>
            Trust Data || List
            </x-slot>
            <div class="card">
                <div class="card-body">
                    <div>
                        <a href="{{ route('product') }}" class="btn btn-primary">List</a>
                    </div>
                    <div>
                        @if (session('massage'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Successfully || </strong> {{ session('massage') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>



                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Product Name</th>
                                <th>Category Id</th>
                                <th> image</th>
                                <th>Acton</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Product Name</th>
                                <th>Category Id</th>
                                <th> image</th>
                                <th>Acton</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($trashData as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->productName }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td><img src="{{ asset('storage/products/' . $product->productImages) }}"
                                            alt="not found" srcset="" height="50" width="150"></td>
                                    <td>
                                        <a href="{{ route('product.restore', ['product' => $product->id]) }}"
                                            class="btn btn-success">Restore</a>
                                        <form action="{{ route('product.delete', ['product' => $product->id]) }}"
                                            method="post" style="display: inline">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>





                </div>
            </div>
</x-backend.layouts.master>
