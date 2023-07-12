<x-backend.layouts.master>
    <x-slot:title>
    Admin
    </x-slot>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <x-backend.layouts.cards.primary/>
        </div>
        <div class="col-xl-3 col-md-6">
            <x-backend.layouts.cards.warning/>
        </div>
        <div class="col-xl-3 col-md-6">
            <x-backend.layouts.cards.success/>
        </div>
        <div class="col-xl-3 col-md-6">
            <x-backend.layouts.cards.success/>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <x-backend.layouts.charts.areachart/>
        </div>
        <div class="col-xl-6">
            <x-backend.layouts.charts.barchart/>
        </div>
    </div>

</x-backend.layouts.master>
