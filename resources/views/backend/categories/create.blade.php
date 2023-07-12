<x-backend.layouts.master>
    <x-slot:title>
Category Create
</x-slot>
<x-slot:deshboard>
Category Create
</x-slot>
<div class="card-body">
    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="text-center">Category</h3>
        <div class="mt-2">
            <label for="cName" class="form-label">Category Name : </label>
            <input type="text" class="form-control" value="{{ old('category_name') }}" name="category_name" id="cName">
        </div>
       <div class="mt-2">
        @error('category_name')
        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
       </div>
        <div class="mt-2">
            <label for="cdescription" class="form-label">Category Description: </label>
            <textarea name="category_description" id="cdescription" cols="30" value="{{ old('category_description') }}" rows="10" class="form-control"></textarea>
        </div>
        <div class="mt-2">
            @error('category_description')
            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
           </div>
        <div class="mt-2">
            <label for="cimages" class="form-label">Category Image : </label>
            <input type="file" class="form-control" name="category_images" id="cimages">
        </div>
        <div class="mt-4 d-flex justify-content-end">
            <input type="submit" value="Submit" class="btn btn-success">
        </div>
    </form>
    </div>




</x-backend.layouts.master>
