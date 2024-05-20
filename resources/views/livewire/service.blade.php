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
            <div class="modal-content bg-color">
                <div class="modal-header text-capitalize">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Select your Static Website Feature
                        {{ $modalTitle }} :-
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container pop_up_box">
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">Domain
                                            <div class="tooltip"
                                                style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                &nbsp;&#9432;
                                                <span class="tooltiptext">Hello Tooltip text </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div style="margin-left: 52px;">
                                    <select name="month" id="month" class="select_month">
                                        <option value="placeholder" selected>&nbsp;Select</option>
                                        <option value="option">1 months</option>
                                        <option value="option">2 months</option>
                                        <option value="option">3 months</option>
                                        <option value="option">4 months</option>
                                        <option value="option">5 months</option>
                                        <option value="option">6 months</option>
                                        <option value="option">7 months</option>
                                        <option value="option">8 months</option>
                                        <option value="option">9 months</option>
                                        <option value="option">10 months</option>
                                        <option value="option">11 months</option>
                                        <option value="option">12 months</option>
                                        <option value="option">13 months</option>
                                        <option value="option">14 months</option>
                                        <option value="option">15 months</option>
                                        <option value="option">16 months</option>
                                        <option value="option">17 months</option>
                                        <option value="option">18 months</option>
                                        <option value="option">19 months</option>
                                        <option value="option">20 months</option>
                                        <option value="option">21 months</option>
                                        <option value="option">22 months</option>
                                        <option value="option">23 months</option>
                                        <option value="option">24 months</option>
                                        <option value="option">25 months</option>
                                        <option value="option">25 months</option>
                                        <option value="option">27 months</option>
                                        <option value="option">28 months</option>
                                        <option value="option">29 months</option>
                                        <option value="option">30 months</option>
                                        <option value="option">31 months</option>
                                        <option value="option">32 months</option>
                                        <option value="option">33 months</option>
                                        <option value="option">34 months</option>
                                        <option value="option">35 months</option>
                                        <option value="option">36 months</option>
                                        <option value="option">37 months</option>
                                        <option value="option">38 months</option>
                                        <option value="option">39 months</option>
                                        <option value="option">40 months</option>
                                        <option value="option">41 months</option>
                                        <option value="option">42 months</option>
                                        <option value="option">43 months</option>
                                        <option value="option">44 months</option>
                                        <option value="option">45 months</option>
                                        <option value="option">46 months</option>
                                        <option value="option">47 months</option>
                                        <option value="option">48 months</option>
                                        <option value="option">49 months</option>
                                        <option value="option">50 months</option>
                                        <option value="option">51 months</option>
                                        <option value="option">52 months</option>
                                        <option value="option">53 months</option>
                                        <option value="option">54 months</option>
                                        <option value="option">55 months</option>
                                        <option value="option">56 months</option>
                                        <option value="option">57 months</option>
                                        <option value="option">58 months</option>
                                        <option value="option">59 months</option>
                                        <option value="option">60 months</option>
                                        <option value="option">61 months</option>
                                        <option value="option">62 months</option>
                                        <option value="option">63 months</option>
                                        <option value="option">64 months</option>
                                        <option value="option">65 months</option>
                                        <option value="option">66 months</option>
                                        <option value="option">67 months</option>
                                        <option value="option">68 months</option>
                                        <option value="option">69 months</option>
                                        <option value="option">70 months</option>
                                        <option value="option">71 months</option>
                                        <option value="option">72 months</option>
                                        <option value="option">73 months</option>
                                        <option value="option">74 months</option>
                                        <option value="option">75 months</option>
                                        <option value="option">76 months</option>
                                        <option value="option">77 months</option>
                                        <option value="option">78 months</option>
                                        <option value="option">79 months</option>
                                        <option value="option">80 months</option>
                                        <option value="option">81 months</option>
                                        <option value="option">82 months</option>
                                        <option value="option">83 months</option>
                                        <option value="option">84 months</option>
                                        <option value="option">85 months</option>
                                        <option value="option">86 months</option>
                                        <option value="option">87 months</option>
                                        <option value="option">88 months</option>
                                        <option value="option">89 months</option>
                                        <option value="option">90 months</option>
                                        <option value="option">91 months</option>
                                        <option value="option">92 months</option>
                                        <option value="option">93 months</option>
                                        <option value="option">94 months</option>
                                        <option value="option">95 months</option>
                                        <option value="option">96 months</option>
                                        <option value="option">97 months</option>
                                        <option value="option">99 months</option>
                                        <option value="option">99 months</option>
                                        <option value="option">100 months</option>
                                        <option value="option">101 months</option>
                                        <option value="option">102 months</option>
                                        <option value="option">103 months</option>
                                        <option value="option">104 months</option>
                                        <option value="option">105 months</option>
                                        <option value="option">106 months</option>
                                        <option value="option">107 months</option>
                                        <option value="option">108 months</option>
                                    </select>
                                </div>
                                <div class="check_price">Rs.1600/-</div>
                            </div>
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">Web Hosting
                                            <div class="tooltip"
                                                style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                &nbsp;&#9432;
                                                <span class="tooltiptext">Hello Tooltip text </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div style="margin-left: 48px;">
                                    <select name="months" id="months" class="select_month">
                                        <option value="placeholder" selected>&nbsp;Select</option>
                                        <option value="option">1 months</option>
                                        <option value="option">2 months</option>
                                        <option value="option">3 months</option>
                                        <option value="option">4 months</option>
                                        <option value="option">5 months</option>
                                        <option value="option">6 months</option>
                                        <option value="option">7 months</option>
                                        <option value="option">8 months</option>
                                        <option value="option">9 months</option>
                                        <option value="option">10 months</option>
                                        <option value="option">11 months</option>
                                        <option value="option">12 months</option>
                                        <option value="option">13 months</option>
                                        <option value="option">14 months</option>
                                        <option value="option">15 months</option>
                                        <option value="option">16 months</option>
                                        <option value="option">17 months</option>
                                        <option value="option">18 months</option>
                                        <option value="option">19 months</option>
                                        <option value="option">20 months</option>
                                        <option value="option">21 months</option>
                                        <option value="option">22 months</option>
                                        <option value="option">23 months</option>
                                        <option value="option">24 months</option>
                                        <option value="option">25 months</option>
                                        <option value="option">25 months</option>
                                        <option value="option">27 months</option>
                                        <option value="option">28 months</option>
                                        <option value="option">29 months</option>
                                        <option value="option">30 months</option>
                                        <option value="option">31 months</option>
                                        <option value="option">32 months</option>
                                        <option value="option">33 months</option>
                                        <option value="option">34 months</option>
                                        <option value="option">35 months</option>
                                        <option value="option">36 months</option>
                                        <option value="option">37 months</option>
                                        <option value="option">38 months</option>
                                        <option value="option">39 months</option>
                                        <option value="option">40 months</option>
                                        <option value="option">41 months</option>
                                        <option value="option">42 months</option>
                                        <option value="option">43 months</option>
                                        <option value="option">44 months</option>
                                        <option value="option">45 months</option>
                                        <option value="option">46 months</option>
                                        <option value="option">47 months</option>
                                        <option value="option">48 months</option>
                                        <option value="option">49 months</option>
                                        <option value="option">50 months</option>
                                        <option value="option">51 months</option>
                                        <option value="option">52 months</option>
                                        <option value="option">53 months</option>
                                        <option value="option">54 months</option>
                                        <option value="option">55 months</option>
                                        <option value="option">56 months</option>
                                        <option value="option">57 months</option>
                                        <option value="option">58 months</option>
                                        <option value="option">59 months</option>
                                        <option value="option">60 months</option>
                                        <option value="option">61 months</option>
                                        <option value="option">62 months</option>
                                        <option value="option">63 months</option>
                                        <option value="option">64 months</option>
                                        <option value="option">65 months</option>
                                        <option value="option">66 months</option>
                                        <option value="option">67 months</option>
                                        <option value="option">68 months</option>
                                        <option value="option">69 months</option>
                                        <option value="option">70 months</option>
                                        <option value="option">71 months</option>
                                        <option value="option">72 months</option>
                                        <option value="option">73 months</option>
                                        <option value="option">74 months</option>
                                        <option value="option">75 months</option>
                                        <option value="option">76 months</option>
                                        <option value="option">77 months</option>
                                        <option value="option">78 months</option>
                                        <option value="option">79 months</option>
                                        <option value="option">80 months</option>
                                        <option value="option">81 months</option>
                                        <option value="option">82 months</option>
                                        <option value="option">83 months</option>
                                        <option value="option">84 months</option>
                                        <option value="option">85 months</option>
                                        <option value="option">86 months</option>
                                        <option value="option">87 months</option>
                                        <option value="option">88 months</option>
                                        <option value="option">89 months</option>
                                        <option value="option">90 months</option>
                                        <option value="option">91 months</option>
                                        <option value="option">92 months</option>
                                        <option value="option">93 months</option>
                                        <option value="option">94 months</option>
                                        <option value="option">95 months</option>
                                        <option value="option">96 months</option>
                                        <option value="option">97 months</option>
                                        <option value="option">99 months</option>
                                        <option value="option">99 months</option>
                                        <option value="option">100 months</option>
                                        <option value="option">101 months</option>
                                        <option value="option">102 months</option>
                                        <option value="option">103 months</option>
                                        <option value="option">104 months</option>
                                        <option value="option">105 months</option>
                                        <option value="option">106 months</option>
                                        <option value="option">107 months</option>
                                        <option value="option">108 months</option>
                                    </select>
                                    <div style="font-size:16px;color:#000;font-weight:500">(Rs.220 p/month)</div>
                                </div>
                                <div class="check_price">Rs.200/-</div>
                            </div>
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">Web Pages
                                            <div class="tooltip"
                                                style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                &nbsp;&#9432;
                                                <span class="tooltiptext">Hello Tooltip text </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div style="margin-left: 60px;">
                                    <form>
                                        <div class="value-button" id="decrease" onclick="decreaseValue()"
                                            value="Decrease Value">-</div>
                                        <input type="number" id="number" value="0" />
                                        <div class="value-button" id="increase" onclick="increaseValue()"
                                            value="Increase Value">+</div>
                                    </form>
                                    <div style="font-size:16px;color:#000;font-weight:500">(Rs.300 p/page)</div>
                                </div>
                                <div class="check_price">Rs.4000/-</div>
                            </div>
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">E-mails
                                            <div class="tooltip"
                                                style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                &nbsp;&#9432;
                                                <span class="tooltiptext">Hello Tooltip text </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div style="margin-left: 60px;">
                                    <form>
                                        <div class="value-button" id="decrease" onclick="decreaseValues()"
                                            value="Decrease Value">-</div>
                                        <input type="number" id="numbers" value="0" />
                                        <div class="value-button" id="increase" onclick="increaseValues()"
                                            value="Increase Value">+</div>
                                    </form>
                                    <div style="font-size:16px;color:#000;font-weight:500">(Rs.800 p/page)</div>
                                </div>
                                <div class="check_price">Rs.4000/-</div>
                            </div>
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">SSL Certificate(1 Year)</div>
                                    </label>
                                </div>
                                <div class="check_price">Rs.700/-</div>
                            </div>
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">Inquiry Form</div>
                                    </label>
                                </div>
                                <div class="check_price">Rs.700/-</div>
                            </div>

                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">Security & Backup</div>
                                    </label>
                                </div>
                                <div class="check_price">Rs.700/-</div>
                            </div>
                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">HD Quality Images
                                            <div class="tooltip"
                                                style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                &nbsp;&#9432;
                                                <span class="tooltiptext">Hello Tooltip text </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="check_price">Rs.700/-</div>
                            </div>

                            <div class="checkbox_card">
                                <div class="checkboxes__item">
                                    <label class="checkbox style-a">
                                        <input type="checkbox" />
                                        <div class="checkbox__checkmark"></div>
                                        <div class="checkbox__body">Content Writing
                                            <div class="tooltip"
                                                style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                &nbsp;&#9432;
                                                <span class="tooltiptext">Hello Tooltip text </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="check_price">Rs.700/-</div>
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
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">lets plan your ad campaign :
                        {{ $modalTitle }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container lg">
                            <div style="margin-bottom:40px">
                                <div class="modal_title">Choose your daily budget</div>
                                <div>
                                    <div style="display: flex;justify-content: space-between;gap:12px">
                                        <div
                                            style="border: 4px solid #10a3ec; border-radius: 12px; width: 170px; height: 88px;padding: 20px 10px;text-align: center;">
                                            <div
                                                style="color: #000; font-size: 26px; font-weight: 700;text-align:center">
                                                Rs.200 </div>
                                            <div style="font-size:14px;color:#000;font-weight:500;">Rs,6000 monthly max
                                            </div>
                                        </div>
                                        <div
                                            style="border: 4px solid #44c011; border-radius: 12px; width: 179px; height: 88px;text-align: center; ">
                                            <div style="font-size:14px;color: #0091ff;font-weight:500;">Recommended for
                                                you<div class="tooltip"
                                                    style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                                                    &nbsp;&#9432;
                                                    <span class="tooltiptext">Hello Tooltip text </span>
                                                </div>
                                            </div>
                                            <div style="color: #000; font-size: 26px; font-weight: 700;">
                                                Rs.300 </div>
                                            <div style="font-size:14px;color:#000;font-weight:500;">Rs.9,000 monthly max
                                            </div>
                                        </div>
                                        <div
                                            style="border: 4px solid #10a3ec; border-radius: 12px; width: 170px; height: 88px; padding: 20px 5px;text-align: center; ">
                                            <div style="color: #000; font-size: 26px; font-weight: 700;">
                                                Rs.350 </div>
                                            <div style="font-size:14px;color:#000;font-weight:500;">Rs.10,500 monthly
                                                max
                                            </div>
                                        </div>
                                        <div>
                                            <div style="font-size: 16px;font-weight: 600;">Enter your budget</div>
                                            <div
                                                style="border: 4px solid #10a3ec; border-radius: 12px; width: 155px; height: 63px; ">
                                                <div
                                                    style="color: #000; font-size: 26px; font-weight: 700;padding: 6px 10px; background: none;">
                                                    Rs. <span><input type="text" placeholder=""
                                                            style="border: none;width: 63%;font-size: 26px;font-weight: 700;border: none;outline: none;" />
                                                    </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom:40px">
                                <div class="modal_title">Select your Day</div>
                                <div>
                                    <div style="display: flex;justify-content: space-between;gap:12px">
                                        <div
                                            style="border: 4px solid #10a3ec; border-radius: 12px; width: 170px; height: 88px;padding: 20px 10px;text-align: center;">
                                            <div
                                                style="color: #000; font-size: 26px; font-weight: 700;text-align:center">
                                                10 Days </div>
                                            <div style="font-size:14px;color:#000;font-weight:500;">Rs,6000 monthly max
                                            </div>
                                        </div>
                                        <div
                                            style="border: 4px solid #44c011; border-radius: 12px; width: 180px; height: 88px;text-align: center; ">
                                            <div style="font-size:14px;color: #0091ff;font-weight:500;">Recommended for
                                                you<div class="tooltip"
                                                    style="display:contents; color: #e90d12;font-size: 12px;font-weight:700">
                                                    &nbsp;&#9432;
                                                    <span class="tooltiptext">Hello Tooltip text </span>
                                                </div>
                                            </div>
                                            <div style="color: #000; font-size: 26px; font-weight: 700;">
                                                30 Days </div>
                                            <div style="font-size:14px;color:#000;font-weight:500;">Rs.9,000 monthly max
                                            </div>
                                        </div>
                                        <div
                                            style="border: 4px solid #10a3ec; border-radius: 12px; width: 170px; height: 88px;    padding: 20px 5px;text-align: center; ">
                                            <div style="color: #000; font-size: 26px; font-weight: 700;">
                                                15 Days </div>
                                            <div style="font-size:14px;color:#000;font-weight:500;">Rs.10,500 monthly
                                                max
                                            </div>
                                        </div>
                                        <div>
                                            <div style="font-size: 14px;font-weight: 600;">Choose your custom date</div>
                                            <div
                                                style="border: 4px solid #10a3ec; border-radius: 12px; width: 170px; height: 63px; ">
                                                <div class="input-container" id="date-picker-container">
                                                    <input type="date" id="date-checkin" class="date-field"
                                                        name"date-from" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex;justify-content: space-between;gap:12px;margin-bottom:40px">
                                <div>
                                    <div class="modal_title">Total Selected Days</div>
                                    <div
                                        style="border: 4px solid #10a3ec; border-radius: 12px; width: 320px; height: 105px;padding: 12px 10px;text-align: center;">
                                        <div style="color: #000; font-size: 42px; font-weight: 700;text-align:center">
                                            30 Days </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="modal_title">Total Amount</div>
                                    <div
                                        style="border: 4px solid #10a3ec; border-radius: 12px; width: 320px; height: 105
                                        px;padding: 8px 10px;">
                                        <div style="color: #000; font-size: 22px; font-weight: 700;">
                                            <span>Sub Total.&nbsp;&nbsp;&nbsp;:-&nbsp;<input type="text" placeholder=""
                                                    style="border: none;width: 48%;font-size: 22px;font-weight: 700;border: none;outline: none;" />
                                            </span>
                                        </div>
                                        <div style="font-size:16px;color:#000;font-weight:700;">Service
                                            Charge&nbsp;:-&nbsp;<span><input type="text" placeholder=""
                                                    style="border: none;width: 48%;font-size: 22px;font-weight: 700;border: none;outline: none;" />
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom:40px">
                                <div
                                    style="background: #10a3ec;color: #fff;padding: 15px;border-radius: 40px;width: 58%;font-size: 23px;font-weight: 700;">
                                    Our Service Charge (Rs.135p/day)</div>
                            </div>
                            <div style="width:100%;border:4px solid #000;"></div>
                            <div style="margin-bottom:40px">
                                <div style="color: #000;font-size: 40px;font-weight: 700;text-align:center">Grand
                                    Total<span style="font-size:16px">&nbsp;(Incl.Service charge)&nbsp;</span>:-
                                    <span><input type="text" placeholder=""
                                            style="border: none;width: 10%;font-size: 40px;font-weight: 700;border: none;outline: none;" />
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
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style=" background:#f2d0b8b8;">
                                <img src="/assets/gmb.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;text-align:center">GMB
                                    <br>Optimization
                                </h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style=" background: #b8f2c582;">
                                <img src="/assets/seo.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Search Engine
                                    <br>Optimization
                                </h5>
                            </div>
                            <div class="col-md-6 model_pop-up" data-bs-target="#exampleModalToggle3_services_digital"
                                data-bs-toggle="modal" style="background: #f5a9ad82;">
                                <img src="/assets/social_media.png" alt="My Logo" w="10" h="10" />
                                <h5 style="margin-top: 10px;text-transform: capitalize;">Social Media <br>Management
                                </h5>
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
                                data-bs-toggle="modal"
                                style="background: radial-gradient(#f2d0b8b8,#b8f2c582,#f5a9ad82,#eba7e482);">
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