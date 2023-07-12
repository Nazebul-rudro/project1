<x-backend.layouts.master>
    <x-slot:title>
Product Update
</x-slot>
<x-slot:deshboard>
Product Update
</x-slot>
<div class="card-body">

    <form action="{{ route('product.update', ['product'=>$product->id]) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <h3 class="text-center">Product</h3>
        <div class="mt-2">
            <label for="productName" class="form-label">Prodct Name : </label>
            <input type="text" class="form-control" value="{{ old('productName',$product->productName) }}" name="productName" id="productName">
        </div>
       <div class="mt-2">
        @error('productName')
        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
       </div>
        <div class="mt-2">
            <label for="productDescription" class="form-label">Product Description: </label>
            <textarea name="productDescription" id="productDescription" cols="30"  rows="10" class="form-control">{{ old('productDescription', $product->productDescription) }}</textarea>
        </div>
        <div class="mt-2">
            @error('productDescription')
            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
           </div>
        <div class="mt-2">
            <label for="productImages" class="form-label">Product Image : </label>
            <input type="file" class="form-control" name="productImages" id="productImages">
        </div>
        <div class="mt-4 d-flex justify-content-end">
            <input type="submit" value="Update" class="btn btn-success">
        </div>
    </form>
    </div>




</x-backend.layouts.master>
