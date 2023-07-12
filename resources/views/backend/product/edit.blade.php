<x-backend.layouts.master>
    <x-slot:title>
Product Update
</x-slot>
<x-slot:deshboard>
Product Update
</x-slot>
<div class="card-body">

    {{-- <form action="{{ route('product.update', ['product'=>$product->id]) }}" method="post" enctype="multipart/form-data">
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
    </form> --}}




    <form action="{{ route('product.update', ['product'=>$product->id]) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <h3 class="text-center">Category</h3>
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
            <textarea name="productDescription" id="productDescription" cols="30" value="" rows="10" class="form-control">{{ old('productDescription',$product->productDescription) }}</textarea>
        </div>
        <div class="mt-2">
            @error('productDescription')
            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
           </div>
           <div class="mt-2">
            <select class="form-select" name="category" aria-label="Default select example">


                <option disabled selected>Open this select menu</option>
                @foreach ($categories as $category)
             <option @selected($category->id == $product->category_id) value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach

              </select>
           </div>
           <div class="mt-2">
            <label for="price" class="form-label">Price :</label>
            <input type="number" name="price" value="{{ old('price', $product->price) }}" id="price" class="form-control">
           </div>
        <div class="mt-2">
            <label for="productImages" class="form-label">Product Image : </label>
            <input type="file" class="form-control" name="productImages" id="productImages">
        </div>
        <div class="mt-2">
            @error('productImages')
            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
           </div>
        <div class="mt-4 d-flex justify-content-end">
            {{-- <input type="submit" value="Submit" class="btn btn-success"> --}}
            {{-- <button type="submit">Submit</button> --}}
            <input type="submit" value="Update" class="btn btn-success">
        </div>
    </form>
    </div>




</x-backend.layouts.master>
