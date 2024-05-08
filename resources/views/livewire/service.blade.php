<div class="container">
    <div class="Button_box">
        <div class="box_1">
            <img src="/assets/200.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Website</div>
            <p class="box_headline">get instant quote</p>
            {{-- id="openOuterPopupBtn" onclick="openOuterPopup()" --}}
            <button class="btn btn-primary rounded-pill"  wire:click="sub_service(1)" data-bs-toggle="modal"
                data-bs-target="#modal_sub_services_website" style="background: #1786f4">Click here</button>
        </div>
        <div class="box_1">
            <img src="/assets/giphy (2).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Lead Generation</div>
            <p class="box_headline">get instant quote</p>
            <button id="openOuterPopupBtn" wire:click="sub_service(2)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services_lead" class="btn btn-danger rounded-pill"
                onclick="openOuterPopup()"style="background: #e31b09">Click here</button>

        </div>
        <div class="box_1">
            <img src="/assets/giphy (1).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Digital Marketing</div>
            <p class="box_headline">get instant quote</p>
            <button id="openOuterPopupBtn" wire:click="sub_service(3)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services_digital" class="btn btn-warning rounded-pill"
                onclick="openOuterPopup()"style="background: #f49317">Click here</button>

        </div>
        <div class="box_1">
            <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Software & Apps</div>
            <p class="box_headline">get instant quote</p>
            <button id="openOuterPopupBtn" wire:click="sub_service(4)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services_soft" class="btn btn-success rounded-pill"
                onclick="openOuterPopup()"style="background: #288d0c">Click here</button>
        </div>

        {{-- <x-modal  :sub_services="$sub_services" :modalTitle="$modalTitle" :subModalTitle="$subModalTitle"  :products="$products">
        </x-modal> --}}
    </div>

{{-- modal website --}}

    <div class="modal fade" wire:ignore.self id="modal_sub_services_website" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">


                </div>
            </div>
            {{-- <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
        </div> --}}
        </div>
    </div>
</div>
<div class="modal fade"   wire:ignore.self id="exampleModalToggle2_website" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header text-capitalize">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">{{ $subModalTitle }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">

                </div>
            </div>
            {{-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                    first</button>
            </div> --}}
        </div>
    </div>
</div>
    {{-- end modal website --}}
    {{-- Lead Generation --}}

    <div class="modal fade" wire:ignore.self id="modal_sub_services_lead" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-asdasd</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">


                </div>
            </div>
            {{-- <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
        </div> --}}
        </div>
    </div>
</div>
<div class="modal fade"   wire:ignore.self id="exampleModalToggle2_lead" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header text-capitalize">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">{{ $subModalTitle }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">

                </div>
            </div>
            {{-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                    first</button>
            </div> --}}
        </div>
    </div>
</div>

{{-- end Lead generation --}}

 {{-- Digital marketing --}}

 <div class="modal fade" wire:ignore.self id="modal_sub_services_digital" aria-hidden="true"
 aria-labelledby="exampleModalToggleLabel" tabindex="-1">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <div class="container">

             </div>
         </div>
         {{-- <div class="modal-footer">
       <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
     </div> --}}
     </div>
 </div>
</div>
<div class="modal fade"   wire:ignore.self id="exampleModalToggle2_digital" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
 tabindex="-1">
 <div class="modal-dialog modal-dialog-centered modal-lg">
     <div class="modal-content">
         <div class="modal-header text-capitalize">
             <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">{{ $subModalTitle }}</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">

         </div>
         {{-- <div class="modal-footer">
             <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                 first</button>
         </div> --}}
     </div>
 </div>
</div>

{{-- end digital marketing --}}

 {{-- software  --}}

 <div class="modal fade" wire:ignore.self id="modal_sub_services_soft" aria-hidden="true"
 aria-labelledby="exampleModalToggleLabel" tabindex="-1">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <div class="container">


             </div>
         </div>
         {{-- <div class="modal-footer">
       <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
     </div> --}}
     </div>
 </div>
</div>
<div class="modal fade"   wire:ignore.self id="exampleModalToggle2_soft" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
 tabindex="-1">
 <div class="modal-dialog modal-dialog-centered modal-lg">
     <div class="modal-content">
         <div class="modal-header text-capitalize">
             <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">{{ $subModalTitle }}</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <div class="container">



             </div>
         </div>
         {{-- <div class="modal-footer">
             <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                 first</button>
         </div> --}}
     </div>
 </div>
</div>

{{-- end Lead generation --}}
</div>

