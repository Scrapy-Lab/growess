<div class="container">
    <div class="Button_box">
        <div class="box_1">
            <img src="/assets/200.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Website</div>
            <p class="box_headline">get instant quote</p>
            {{-- id="openOuterPopupBtn" onclick="openOuterPopup()" --}}
            <button class="btn btn-primary rounded-pill"  wire:click="sub_service(1)" data-bs-toggle="modal"
                data-bs-target="#modal_sub_services" style="background: #1786f4">Click here</button>
        </div>
        <div class="box_1">
            <img src="/assets/giphy (2).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Lead Generation</div>
            <p class="box_headline">get instant quote</p>
            <button id="openOuterPopupBtn" wire:click="sub_service(2)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services" class="btn btn-danger rounded-pill"
                onclick="openOuterPopup()"style="background: #e31b09">Click here</button>

        </div>
        <div class="box_1">
            <img src="/assets/giphy (1).webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Digital Marketing</div>
            <p class="box_headline">get instant quote</p>
            <button id="openOuterPopupBtn" wire:click="sub_service(3)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services" class="btn btn-warning rounded-pill"
                onclick="openOuterPopup()"style="background: #f49317">Click here</button>

        </div>
        <div class="box_1">
            <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
            <div class="box_title">Software & Apps</div>
            <p class="box_headline">get instant quote</p>
            <button id="openOuterPopupBtn" wire:click="sub_service(4)" data-bs-toggle="modal"
            data-bs-target="#modal_sub_services" class="btn btn-success rounded-pill"
                onclick="openOuterPopup()"style="background: #288d0c">Click here</button>
        </div>

        <x-modal  :sub_services="$sub_services" :modalTitle="$modalTitle" :subModalTitle="$subModalTitle"  :products="$products">
        </x-modal>
    </div>
</div>

