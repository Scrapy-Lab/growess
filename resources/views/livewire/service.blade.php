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
            <button  wire:click="sub_service(2)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services_lead" class="btn btn-danger rounded-pill"
            style="background: #e31b09">Click here</button>

        </div>
        <div class="box_1">
            <img src="/assets/giphy (1).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Digital Marketing</div>
            <p class="box_headline">get instant quote</p>
            <button  wire:click="sub_service(3)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services_digital" class="btn btn-warning rounded-pill"
                style="background: #f49317">Click here</button>

        </div>
        <div class="box_1">
            <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Software & Apps</div>
            <p class="box_headline">get instant quote</p>
            <button  wire:click="sub_service(4)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services_soft" class="btn btn-success rounded-pill"
                style="background: #288d0c">Click here</button>
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
                <div class="container pop_up_box">
                    <div class="col-md-6 model_pop_up"  data-bs-target="#exampleModalToggle2_website"
                    data-bs-toggle="modal">
                        <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                        <button class="button" wire:click="service_products(1)"
                            data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">static</button>
                    </div>
                    <div class="col-md-6 model_pop_up"  data-bs-target="#exampleModalToggle2_website"
                    data-bs-toggle="modal">
                        <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                        <button class="button" wire:click="service_products(1)"
                            data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">Brochere</button>
                    </div>
                    <div class="col-md-6 model_pop_up"  data-bs-target="#exampleModalToggle2_website"
                    data-bs-toggle="modal">
                        <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                        <button class="button" wire:click="service_products(1)"
                            data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">Dynamic</button>
                    </div>
                    <div class="col-md-6 model_pop_up"  data-bs-target="#exampleModalToggle2_website"
                    data-bs-toggle="modal">
                        <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                        <button class="button" wire:click="service_products(1)"
                            data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">E-Commerce</button>
                    </div>
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
            <div class="modal-header text-capitalize"  data-bs-target="#exampleModalToggle2_website"
            data-bs-toggle="modal">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"> WebSite 2{{ $subModalTitle }}</h1>
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
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container pop_up_box">

                   <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_lead"
                   data-bs-toggle="modal">
                        <img src="/assets/google.jpeg" alt="My Logo" w="10" h="10" />
                    </div>
                    <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_lead"
                    data-bs-toggle="modal">
                        <img src="/assets/meta.jpeg" alt="My Logo" w="10" h="10" />
                    </div>

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
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Lead 2 {{ $subModalTitle }}</h1>
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

