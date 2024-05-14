<div class="container">
    <div class="Button_box">
        <div class="box_1" style="background:#f7d7ae8a;">
            <img src="/assets/200.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Website</div>
            <p class="box_headline">get instant quote</p>
            {{-- id="openOuterPopupBtn" onclick="openOuterPopup()" --}}
            <button class="btn btn-primary rounded-pill" wire:click="sub_service(1)" data-bs-toggle="modal"
                data-bs-target="#modal_sub_services_website" style="background: #1786f4">Click here</button>
        </div>
        <div class="box_1" style="background:#c8f5cdab;">
            <img src="/assets/giphy (2).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Lead Generation</div>
            <p class="box_headline">get instant quote</p>
            <button wire:click="sub_service(2)" data-bs-toggle="modal" data-bs-target="#modal_sub_services_lead"
                class="btn btn-danger rounded-pill" style="background: #e31b09">Click here</button>

        </div>
        <div class="box_1" style="background:#f3c0d3ab;">
            <img src="/assets/giphy (1).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Digital Marketing</div>
            <p class="box_headline">get instant quote</p>
            <button wire:click="sub_service(3)" data-bs-toggle="modal" data-bs-target="#modal_sub_services_digital"
                class="btn btn-warning rounded-pill" style="background: #f49317">Click here</button>

        </div>
        <div class="box_1" style="background:#bdebf8ab;">
            <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Software & Apps</div>
            <p class="box_headline">get instant quote</p>
            <button wire:click="sub_service(4)" data-bs-toggle="modal" data-bs-target="#modal_sub_services_soft"
                class="btn btn-success rounded-pill" style="background: #288d0c">Click here</button>
        </div>

        {{-- <x-modal :sub_services="$sub_services" :modalTitle="$modalTitle" :subModalTitle="$subModalTitle"
            :products="$products">
        </x-modal> --}}
    </div>

    {{-- modal website --}}

    <div class="modal fade modal-lg" wire:ignore.self id="modal_sub_services_website" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container pop_up_box">
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">
                            <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">static</h5>
                        </div>
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">
                            <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Brochere</h5>
                        </div>
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">
                            <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Dynamic</h5>
                        </div>
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal">
                            <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">E-Commerce</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open
                        second modal</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="exampleModalToggle2_website" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Select your {{ $modalTitle }} :-</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container pop_up_box">
                            hello website
                        </div>
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

                        <div class="col-md-6 pop_up" data-bs-target="#exampleModalToggle2_lead_1"
                            data-bs-toggle="modal">
                            <img src="/assets/google_ad.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Google</h5>
                        </div>
                        <div class="col-md-6 pop_up" data-bs-target="#exampleModalToggle2_lead_2"
                            data-bs-toggle="modal">
                            <img src="/assets/meta.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Meta</h5>
                        </div>

                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open
                        second modal</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="exampleModalToggle2_lead_1" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Select Your Google Ad
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container pop_up_box">
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style=" background:#f2d0b8b8;">
                                <img src="/assets/search_icon.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Search</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style=" background: #b8f2c582;">
                                <img src="/assets/call_icon.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Call-Ad</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style="background:#f5a9ad82;">
                                <img src="/assets/shopping_icon.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Shopping-Ad</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style=" background: #a7e4eb82;">
                                <img src="/assets/youtube_ad.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Youtube-Ad</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style=" background: #eba7e482;">
                                <img src="/assets/display.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Display-Ad</h5>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                        first</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="exampleModalToggle2_lead_2" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Select Your Meta Ad
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container pop_up_box">
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style="background: #9ab0ef82;">
                                <img src="/assets/facebook_icon-.png" alt="My Logo" w="10" h="10" />
                                <h6>Facebook</h6>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style="background: #e98ff5ba;">
                                <img src="/assets/instagram_icon.png" alt="My Logo" w="10" h="10" />
                                <h6>Instagram</h6>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_lead"
                                data-bs-toggle="modal" style="background: #dafbc9cc;">
                                <img src="/assets/whatsapp_icon.png" alt="My Logo" w="10" h="10" />
                                <h6>Whatsapp</h6>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                        first</button>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="modal fade" wire:ignore.self id="exampleModalToggle3_lead" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">lets plan your ad campaign {{ $modalTitle }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container lg">
                            <div class="page_title">Choose your daily budget</div>
                            <div>
                               
                                <div>
                                    <button>Rs.200 <br>Rs,6000 monthly max</button>
                                    <button> Recommende for you <br>Rs.300 <br>Rs.9,000 monthly max</button>
                                    <button>Rs.350 <br>Rs.10,500 monthly max</button>
                                    <div>Enter your budget<br><button>Rs.</button></div>
                                </div>
                            </div>
                        </div>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container pop_up_box">
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style=" background:#f2d0b8b8;">
                                <img src="/assets/gmb.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;text-align:center">GMB <br>Optimization</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style=" background: #b8f2c582;">
                                <img src="/assets/seo.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Search Engine <br>Optimization</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style="background: #f5a9ad82;">
                                <img src="/assets/social_media.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Social Media <br>Management</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style=" background: #a7e4eb82;">
                                <img src="/assets/content.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Content Writing</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style=" background: #eba7e482;">
                                <img src="/assets/email_marketing.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Email Marketing</h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style="background: radial-gradient(#f2d0b8b8,#b8f2c582,#f5a9ad82,#eba7e482);">
                                <img src="/assets/display.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Graphics Design</h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open
                        second modal</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="exampleModalToggle3_services_digital" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container pop_up_box">
                            hello digital
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                        first</button>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- end digital marketing --}}

    {{-- software --}}

    <div class="modal fade" wire:ignore.self id="modal_sub_services_soft" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select your {{ $modalTitle }} :-</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">hello
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open
                        second modal</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="exampleModalToggle2_soft" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
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