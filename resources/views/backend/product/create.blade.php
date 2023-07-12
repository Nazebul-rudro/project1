<x-backend.layouts.master>
    <x-slot:title>
Product Create
</x-slot>
<x-slot:deshboard>
Product Create
</x-slot>
<div class="card-body">
{{-- {{dd($category)}} --}}
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="text-center">Category</h3>
        <div class="mt-2">
            <label for="productName" class="form-label">Prodct Name : </label>
            <input type="text" class="form-control" value="{{ old('productName') }}" name="productName" id="productName">
        </div>
       <div class="mt-2">
        @error('productName')
        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
       </div>
        <div class="mt-2">
            <label for="productDescription" class="form-label">Product Description: </label>
            <textarea name="productDescription" id="productDescription" cols="30" value="{{ old('productDescription') }}" rows="10" class="form-control"></textarea>
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
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach

              </select>
           </div>
           <div class="mt-2">
            <label for="price" class="form-label">Price :</label>
            <input type="number" name="price" id="price" class="form-control">
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
            <button type="submit">Submit</button>
        </div>
    </form>
    </div>




</x-backend.layouts.master>
