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
        <div class="box_1" style="background:#e7bdf8ab;">
            <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">E-Commerce Solution</div>
            <p class="box_headline">get instant quote</p>
            <button wire:click="sub_service(4)" data-bs-toggle="modal" data-bs-target="#modal_sub_services_soft"
                class="btn btn-success rounded-pill" style="background: #288d0c">Click here</button>
        </div>

        {{-- <x-modal :sub_services="$sub_services" :modalTitle="$modalTitle" :subModalTitle="$subModalTitle"
            :products="$products">
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
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal" style="background: #f2d0b8b8;">
                            <img src="/assets/web_logo.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">static</h5>
                        </div>
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal" style="background: #b8f2c582;">
                            <img src="/assets/brochere.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Brochere</h5>
                        </div>
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal" style="background: #f5a9ad82;">
                            <img src="/assets/dynamic.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Dynamic</h5>
                        </div>
                        <div class="col-md-6 model_pop_up" data-bs-target="#exampleModalToggle2_website"
                            data-bs-toggle="modal" style="background: #a7e4eb82;">
                            <img src="/assets/e-com.png" alt="My Logo" w="10" h="10" />
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
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" wire:ignore.self
        id="exampleModalToggle2_website" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-color">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="#exampleModalToggle2_website">Select your
                        {{ $modalTitle }} :-
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 2rem;">
                    @livewire('website')
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
                            data-bs-toggle="modal" style="background:#f2d0b8b8;">
                            <img src="/assets/google_ad.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Google</h5>
                        </div>
                        <div class="col-md-6 pop_up" data-bs-target="#exampleModalToggle2_lead_2"
                            data-bs-toggle="modal" style="background: #b8f2c582;">
                            <img src="/assets/meta.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Meta</h5>
                        </div>
                        <div class="col-md-6 pop_up" data-bs-target="#exampleModalToggle2_lead_3"
                            data-bs-toggle="modal" style="background: #a7e4eb82;">
                            <img src="/assets/linkdin_ad.png" alt="My Logo" w="10" h="10" />
                            <h5 style="margin-top: 10px;text-transform: capitalize;">Linkdin</h5>
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
    <div class="modal fade" wire:ignore.self id="exampleModalToggle2_lead_3" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Select Your Linkdin Ad
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="exampleModalToggle3_lead" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">lets plan your ad campaign :
                        {{ $modalTitle }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container">
                            <div style="margin-bottom:40px">
                                <div class="modal_title">Choose your daily budget</div>
                                <div>
                                    <div style="display: flex;justify-content: space-around;gap:12px">
                                        <div wire:click="fixedAmount(200)"
                                            style="box-shadow: 3px 5px 0px 7px #d4eefb;border-radius: 12px; width: 210px; height: 98px;padding: 20px 10px;text-align: center;">
                                            <div
                                                style="color: #000; font-size: 32px; font-weight: 700;text-align:center">
                                                Rs.200 </div>
                                            <div style="font-size:16px;color:#000;font-weight:500;">Rs,6000 monthly max
                                            </div>
                                        </div>
                                        <div wire:click="fixedAmount(300)"
                                            style="box-shadow: 3px 5px 0px 7px #44c011; border-radius: 12px; width: 210px; height: 98px;text-align: center; ">
                                            <div style="font-size:16px;color: #0091ff;font-weight:500;">Recommended for
                                                you<div class="tooltip"
                                                    style="display:contents; color: #e90d12;font-size: 12px;font-weight: 700;">
                                                    &nbsp;&#9432;
                                                    <span class="tooltiptext">Hello Tooltip text </span>
                                                </div>
                                            </div>
                                            <div style="color: #000; font-size: 32px; font-weight: 700;">
                                                Rs.300 </div>
                                            <div style="font-size:16px;color:#000;font-weight:500;">Rs.9,000 monthly
                                                max
                                            </div>
                                        </div>
                                        <div wire:click="fixedAmount(350)"
                                            style="box-shadow: 3px 5px 0px 7px #d4eefb;border-radius: 12px; width: 210px; height: 98px; padding: 20px 5px;text-align: center; ">
                                            <div style="color: #000; font-size: 32px; font-weight: 700;">
                                                Rs.350 </div>
                                            <div style="font-size:16px;color:#000;font-weight:500;">Rs.10,500 monthly
                                                max
                                            </div>
                                        </div>
                                        <div>
                                            <div style="font-size: 20px;font-weight: 600;">Enter your budget</div>
                                            <div
                                                style="box-shadow: 3px 5px 0px 7px #d4eefb; border-radius: 12px; width: 210px; height: 63px;margin-top:5px">
                                                <div
                                                    style="color: #000; font-size: 32px; font-weight: 700;padding: 6px 10px; background: none;">
                                                    Rs. <span><input type="text" wire:change="customAmount"
                                                            placeholder="" wire:model="amount"
                                                            style="border: none;width: 63%;font-size: 32px;font-weight: 700;border: none;outline: none;" />
                                                    </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom:40px">
                                <div class="modal_title">Select your Day</div>
                                <div>
                                    <div style="display: flex;justify-content: space-around;gap:12px">
                                        <div wire:click="fixedDays(10)"
                                            style="box-shadow: 3px 5px 0px 7px #d4eefb; border-radius: 12px; width: 210px; height: 98px;padding: 20px 10px;text-align: center;">
                                            <div
                                                style="color: #000; font-size: 32px; font-weight: 700;text-align:center">
                                                10 Days </div>
                                            <div style="font-size:16px;color:#000;font-weight:500;">Rs,6000 monthly max
                                            </div>
                                        </div>
                                        <div wire:click="fixedDays(30)"
                                            style="box-shadow: 3px 5px 0px 7px #44c011; border-radius: 12px; width: 210px; height: 98px;text-align: center; ">
                                            <div style="font-size:16px;color: #0091ff;font-weight:500;">Recommended for
                                                you<div class="tooltip"
                                                    style="display:contents; color: #e90d12;font-size: 12px;font-weight:700">
                                                    &nbsp;&#9432;
                                                    <span class="tooltiptext">Hello Tooltip text </span>
                                                </div>
                                            </div>
                                            <div style="color: #000; font-size: 32px; font-weight: 700;">
                                                30 Days </div>
                                            <div style="font-size:16px;color:#000;font-weight:500;">Rs.9,000 monthly
                                                max
                                            </div>
                                        </div>
                                        <div wire:click="fixedDays(15)"
                                            style="box-shadow: 3px 5px 0px 7px #d4eefb; border-radius: 12px; width: 210px; height: 98px;padding: 20px 5px;text-align: center; ">
                                            <div style="color: #000; font-size: 32px; font-weight: 700;">
                                                15 Days </div>
                                            <div style="font-size:16px;color:#000;font-weight:500;">Rs.10,500 monthly
                                                max
                                            </div>
                                        </div>
                                        <div>
                                            <div style="font-size: 18px;font-weight: 600;">Choose your custom date
                                            </div>
                                            <div
                                                style="box-shadow: 3px 5px 0px 7px #d4eefb; border-radius: 12px; width: 210px; height: 67px;margin-top:5px; ">
                                                <div class="input-container" id="date-picker-container">
                                                    <input type="date" id="date-checkin" class="date-field"
                                                        wire:change="customDate" wire:model="custom_date"
                                                        name"date-from" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex;justify-content: space-around;gap:12px;margin-bottom:40px">
                                <div>
                                    <div class="modal_title">Total Selected Days</div>
                                    <div
                                        style="box-shadow: 3px 5px 0px 7px #d4eefb; border-radius: 12px; width: 320px; height: 121px;padding: 28px 10px;text-align: center;">
                                        <div style="color: #000; font-size: 42px; font-weight: 700;text-align:center">
                                            {{ $day }} Days
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="modal_title">Total Amount</div>
                                    <div
                                        style="box-shadow: 3px 5px 0px 7px #d4eefb; border-radius: 12px; width: 370px; height: 121px;padding: 10px 10px;">
                                        <div style="color: #000; font-size: 32px; font-weight: 700;">
                                            <span>Total Amount.&nbsp;:-&nbsp;
                                                {{-- <input type="text" placeholder=""
                                                    style="border: none;width: 48%;font-size: 22px;font-weight: 700;border: none;outline: none;" />
                                                --}}

                                                {{ $amount }}
                                            </span>
                                        </div>
                                        <div style="color: #000; font-size: 20px; font-weight: 700;">
                                            <span>Sub
                                                Total.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp;
                                                {{-- <input type="text" placeholder=""
                                                    style="border: none;width: 48%;font-size: 22px;font-weight: 700;border: none;outline: none;" />
                                                --}}

                                                ₹{{ $amount }} x {{ $day }}D : {{ $amount * $day }}
                                            </span>
                                        </div>
                                        <div style="font-size:18px;color:#000;font-weight:700;">Service
                                            Charge&nbsp;&nbsp;&nbsp;:-&nbsp;<span>
                                                {{-- <input type="text" placeholder=""
                                                    style="border: none;width: 48%;font-size: 22px;font-weight: 700;border: none;outline: none;" />
                                                --}}
                                                @if ($day)
                                                    ₹{{ $service_charge * $day }}
                                                @else
                                                    ₹{{ $service_charge }}
                                                @endif
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom:40px">
                                <div
                                    style="background: #aee0f8;color: #fff;padding: 15px;border-radius: 40px;width: 58%;font-size: 28px;font-weight: 700;">
                                    Our Service Charge (Rs.135p/day)</div>
                            </div>
                            <div style="width:100%;border:4px solid #000;"></div>
                            <div style="margin-bottom:40px">
                                <div style="color: #000;font-size: 40px;font-weight: 700;text-align:center">Grand
                                    Total<span style="font-size:16px">&nbsp;(Incl.Service charge)&nbsp;</span>:-
                                    <span>₹ {{ $grand_total + $service_charge * $day }}<input type="text"
                                            placeholder=""
                                            style="border: none;width: 30%;font-size: 42px;font-weight: 700;border: none;outline: none;" />

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back
                        to
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
                            {{-- data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal"  --}}
                            <div class="col-md-6 model_pop-up" style=" background:#f2d0b8b8;">
                                <a href="{{ route('gmb-optimization') }}" target="_blank">
                                    <img src="/assets/gmb.png" alt="My Logo" w="10" h="10" />
                                    <h5 style="margin-top: 10px;text-transform: capitalize;text-align:center">GMB
                                        <br>Optimization
                                    </h5>
                                </a>
                            </div>
                            {{-- data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" --}}
                            <div class="col-md-6 model_pop-up" style=" background: #b8f2c582;">
                                <a href="{{ route('seo') }}" target="_blank">
                                    <img src="/assets/seo.png" alt="My Logo" w="10" h="10" />
                                    <h5 style="margin-top: 10px;text-transform: capitalize;">Search Engine
                                        <br>Optimization
                                    </h5>
                                </a>
                            </div>
                            {{-- data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" --}}
                            <div class="col-md-6 model_pop-up" style="background: #f5a9ad82;">
                                <a href="{{ route('smm') }}" target="_blank">
                                    <img src="/assets/social_media.png" alt="My Logo" w="10" h="10" />
                                    <h5 style="margin-top: 10px;text-transform: capitalize;">Social Media
                                        <br>Management
                                    </h5>
                                </a>
                            </div>
                            {{-- data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" --}}
                            <div class="col-md-6 model_pop-up" style=" background: #a7e4eb82;">
                                <a href="{{ route('content-writting') }}" target="_blank">
                                    <img src="/assets/content.png" alt="My Logo" w="10" h="10" />
                                    <h5 style="margin-top: 10px;text-transform: capitalize;">Content Writing</h5>
                                </a>
                            </div>
                            {{-- data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" --}}
                            <div class="col-md-6 model_pop-up" style=" background: #eba7e482;">
                                <a href="{{ route('email-marketing') }}" target="_blank">
                                    <img src="/assets/email_marketing.png" alt="My Logo" w="10" h="10" />
                                    <h5 style="margin-top: 10px;text-transform: capitalize;">Email Marketing</h5>
                                </a>
                            </div>
                            {{-- data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" --}}
                            <div class="col-md-6 model_pop-up"
                                style="background: radial-gradient(#f2d0b8b8,#b8f2c582,#f5a9ad82,#eba7e482);">
                                <a href="{{ route('graphic-design') }}" target="_blank">
                                    <img src="/assets/display.png" alt="My Logo" w="10" h="10" />
                                    <h5 style="margin-top: 10px;text-transform: capitalize;">Graphics Design</h5>
                                </a>
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
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back
                        to
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
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back
                        to
                        first</button>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- end Lead generation --}}
</div>
