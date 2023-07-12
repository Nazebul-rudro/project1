<x-backend.layouts.master>
{{-- {{ dd($products->productName) }} --}}

<x-slot:title>
    Product Details
</x-slot>
<x-slot:deshboard>
Product Show || List
</x-slot>
<div >
    <h3> {{ $products->productName }} </h3>
    <p> {{ $products->productDescription }} </p>
</div>
</x-backend.layouts.master>
