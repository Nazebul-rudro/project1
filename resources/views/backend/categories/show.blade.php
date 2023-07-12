<x-backend.layouts.master>
<x-slot:title>
    Category Details
</x-slot>
<x-slot:deshboard>
Category Show || List
</x-slot>
<div >
    <h3> {{ $categories->category_name }} </h3>
    <p> {{ $categories->category_description }} </p>
</div>
</x-backend.layouts.master>
