<x-backend.layouts.master>
    <x-slot:title>
    Product
</x-slot>
<div class="mb-3">
    <a href="" class="btn btn-success">Create Product</a>
</div>
<div class="card">
<div class="card-body">
    <div class="card mb-4">
        <div class="card-header">
            @if (session('massage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully || </strong> {{ session('massage') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <i class="fas fa-table me-1"></i>
            Product List
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
                    {{-- @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->productName }}</td>
                            <td>{{ $product->productImages }}</td>

                            <td>
                                <a href="{{ route('prodct.show',['product'=>$product->id]) }}"
                                    class="btn btn-sm btn-success">Show</a>
                                <a href="{{ route('product.edit',['product'=>$product->id]) }}"
                                    class="btn btn-sm btn-info">Update</a>
                                <form action="{{ route('product.destroy',['product'=>$product->id]) }}"
                                    method="post" style="display:inline">
                                    @csrf
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</x-backend.layouts.master>
