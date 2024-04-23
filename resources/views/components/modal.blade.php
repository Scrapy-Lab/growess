{{--  service modals --}}
<!-- Modal -->
@props(['sub_services', 'subModalTitle', 'modalTitle', 'products'])
{{-- <div class="modal fade" wire:ignore.self id="modal_sub_services" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$modalTitle}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">

                    <div class="row">
                        @forelse ($sub_services as $sub_service)
                            <div class="col-md-6"><button class="button">{{ $sub_service->name }}</button></div>
                        @empty
                        @endforelse


                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" wire:ignore.self id="modal_sub_services" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">{{ $modalTitle }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">

                    <div class="row">
                        @forelse ($sub_services as $sub_service)
                            <div  class="col-md-6"><button class="button" wire:click="service_products({{ $sub_service->id }})"
                                    data-bs-target="#exampleModalToggle2"
                                    data-bs-toggle="modal">{{ $sub_service->name }}</button></div>
                        @empty
                        @endforelse
                    </div>

                </div>
            </div>
            {{-- <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
        </div> --}}
        </div>
    </div>
</div>
<div class="modal fade"   wire:ignore.self id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">{{ $subModalTitle }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="col-md-6 border-end">
                        <div class="row">
                            @forelse ($products as $product)
                            <label for="{{ $product->product_name }}">{{ $product->product_name }}</label>
                                <input type="checkbox" product_name="{{ $product->product_name }}" id="{{ $product->product_name }}">
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <div class="col-md-6"></div>


                </div>
            </div>
            {{-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                    first</button>
            </div> --}}
        </div>
    </div>
</div>
{{-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button> --}}
{{--  service modals end --}}
