<div class="container">
    <div style="display:flex;justify-content: space-between;align-items: center;">
        <div class="container pop_up_box" style="width:58%!important">
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" value="1" id="website" wire:model="domain_checkbox"
                            wire:click="select_domain" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body">Domain
                    <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                        &nbsp;&#9432;
                        <span class="tooltiptext">Hello Tooltip text </span>
                    </div>
                </div>
                <div style="margin-left: 40px;">
                    <select name="Year" id="select_month_website" class="select_month" wire:model="domain"
                        wire:change="domain_func" {{ $selectDomain ? '' : 'disabled' }}>
                        <option value="placeholder" selected>&nbsp;Select</option>
                        <option value="1">1 Year</option>
                        <option value="2">2 Year</option>
                        <option value="3">3 Year</option>
                    </select>
                </div>
                <div class="check_price">&#8377;{{ $website->domain }}/-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{ $domain_amount ?? 0 }}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" value="1" wire:model="webHost_checkbox"
                            wire:click="select_web_host" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body">Web Hosting
                    <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                        &nbsp;&#9432;
                        <span class="tooltiptext">Hello Tooltip text </span>
                    </div>
                </div>
                <div>
                    <select name="Year" id="Year" class="select_month" wire:model="webHost"
                        wire:change="web_host" {{ $select_webHost ? '' : 'disabled' }}>
                        <option value="placeholder" selected>&nbsp;Select</option>
                        <option value="12">1 Year</option>
                        <option value="24">2 Year</option>
                        <option value="36">3 Year</option>
                    </select>
                </div>
                <div class="check_price">&#8377;{{ $website->web_hosting }} /-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{ $webHost_amount ?? 0 }}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" value="1" wire:model="webPage_checkbox"
                            wire:click="select_web_page" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body">Web Pages
                    <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                        &nbsp;&#9432;
                        <span class="tooltiptext">Hello Tooltip text </span>
                    </div>
                </div>
                <div>
                    <form>
                        <div class="value-button" id="decrease" wire:click="decrement_webPage" value="Decrease Value">-
                        </div>
                        {{-- <input type="number" id="number" value="{{$value}}" wire:model="webPage"
                        {{ $select_webPage ? '' : 'disabled' }}/> --}}
                        <input type="number" id="number" wire:model="value_webPage"
                            {{ $select_webPage ? '' : 'disabled' }} />
                        <div class="value-button" id="increase" wire:click="increment_webPage" value="Increase Value">+
                        </div>
                    </form>
                    {{-- <div style="font-size:14px;color:#000;text-align: center;">(&#8377;{{ $website->web_page }} p/page)
                    </div> --}}
                </div>
                <div class="check_price">&#8377;{{ $website->web_page }} / Page</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{ $webPage_amount ?? 0 }}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" value="1" wire:model="email_checkbox"
                            wire:click="select_email_checkbox" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body">E-mails
                    <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                        &nbsp;&#9432;
                        <span class="tooltiptext">Hello Tooltip text </span>
                    </div>
                </div>
                <div style="margin-left: 29px;">
                    <form>
                        <div class="value-button" id="decrease" wire:click="decrement_email" value="Decrease Value">-
                        </div>
                        <input type="number" id="number" wire:model="value_email"
                            {{ $email_checkbox ? '' : 'disabled' }} />
                        <div class="value-button" id="increase" wire:click="increment_email" value="Increase Value">
                            +</div>
                    </form>
                    {{-- <div style="font-size:14px;color:#000;text-align: center;">(&#8377;{{ $website->email }}/Email)
                    </div> --}}
                </div>
                <div class="check_price">&#8377;{{ $website->email }} / Email</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{ $email_amount ?? 0 }}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" wire:model="ssl_checkbox" wire:click="select_ssl_checkbox" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body" style="margin-right:82px;">SSL Certificate (1 Yr)</div>
                <div class="check_price">&#8377;{{ $website->ssl }}/-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{$ssl_amount ?? 0}}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" wire:model="enquiry_form_checkbox"
                            wire:click="select_enquiry_form_checkbox" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body" style="margin-right: 147px;">Inquiry Form</div>
                <div class="check_price">&#8377;{{ $website->enquiry_form }}/-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{$enquiry_form_amount ?? 0}}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" wire:model="security_backup_checkboxt"
                            wire:click="select_security_backup_checkbox" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body" style="margin-right: 102px;">Security & Backup</div>
                <div class="check_price">&#8377;{{ $website->security_backup }}/-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{$security_backup_amount ?? 0}}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" wire:model="image_quality_checkbox"
                            wire:click="select_hd_quality_images_checkbox" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body" style="margin-right: 73px;">HD Quality Images
                    <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                        &nbsp;&#9432;
                        <span class="tooltiptext">Hello Tooltip text </span>
                    </div>
                </div>
                <div class="check_price">&#8377;{{ $website->hd_quality_images }}/-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{$image_quality_amount ?? 0}}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
            <div class="checkbox_card">
                <div class="checkboxes__item">
                    <label class="checkbox style-a">
                        <input type="checkbox" wire:model="content_writting_checkbox"
                            wire:click="select_content_writing_checkbox" />
                        <div class="checkbox__checkmark"></div>
                    </label>
                </div>
                <div class="checkbox__body" style="margin-right: 95px;">Content Writing
                    <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                        &nbsp;&#9432;
                        <span class="tooltiptext">Hello Tooltip text </span>
                    </div>
                </div>
                <div class="check_price">&#8377;{{ $website->content_writing }}/-</div>
                <div class="total_price">
                    {{-- <span>Total&nbsp;:&nbsp;&#8377;
                        {{$content_writting_amount ?? 0}}
                        <!-- <input type="text" placeholder=""
                            style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> -->
                    </span> --}}
                </div>
            </div>
        </div>
        <div class="container pop_up_box" style="width:44%!important;justify-content: center;">
            <div class="price_list" >
                <div style="font-size: 30px;font-weight:800;">Price Details </div>
                <div style="border:0.2px solid #c4c4c4;"></div>
                <div>
                    <div style="font-size: 20px;">
                        <span>Price -&nbsp;({{$itemCount}} items)&nbsp;<span class="fa fa-shopping-bag"
                                style="color:green"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&#8377;

                                @php
                                $totalAmount = $domain_amount + $webHost_amount + $webPage_amount + $email_amount + $ssl_amount + $enquiry_form_amount + $security_backup_amount + $image_quality_amount + $content_writting_amount;

                                @endphp
                                {{number_format($totalAmount, 2 , '.' , ',')}}

                                {{-- <input type="text" placeholder=""
                                style="border: none;font-size: 20px;border: none;outline: none;background:none;width:40%" /> --}}
                        </span>
                    </div>
                    <div style=" font-size: 16px">
                        <span>Discount&nbsp;(5%)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;

                            @php
                                $discountedAmount =  0.05 * $totalAmount
                            @endphp
                            {{ number_format($discountedAmount, 2 , '.' , ',') }}

                            {{-- <input type="text" placeholder=""
                                style="border: none;font-size: 20px;border: none;outline: none;background:none;width:40%" /> --}}
                        </span>
                    </div>
                    <div style="font-size: 22px;font-weight:500">
                        <span>Total Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&#8377;

                            {{number_format(($totalAmount - $discountedAmount), 2 , '.' , ',' )}}

                            {{-- <input type="text" placeholder=""
                                style="border: none;font-size: 20px;border: none;outline: none;background:none;width:40%" /> --}}
                        </span>
                    </div>
                    <div style="border:2px solid #000;"></div>
                    <div>
                        <div style="font-size: 16px;">
                            <span>with
                                GST(18%)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;

                                @php
                                    $gstAmount = 0.18 * $totalAmount - $discountedAmount;
                                @endphp
                                    {{ number_format($gstAmount , 2 , '.' , ',')}}
                                {{-- <input type="text" placeholder=""
                                    style="border: none;font-size: 16px;border: none;outline: none;background:none;width:40%" /> --}}
                            </span>
                        </div>
                        <div style="font-size: 24px;font-weight:500">
                            <span>Final Billing Amt.:&nbsp;&#8377;

                                {{number_format(($totalAmount - $discountedAmount + $gstAmount)  , 2 , '.' , ',')}}
                                {{-- <input type="text" placeholder=""
                                    style="border: none;font-weight:700;font-size: 28px;border: none;outline: none;background:none;width:50%" /> --}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <p style="text-align:center;font-size: 22px;font-weight:700;color:#198754;margin:0px 0px;width:100%">You will save
                &#8377;{{number_format($discountedAmount , 2 , '.' , ',')}} on this order</p>
            <button class="btn btn-success mt-5 btn-lg">Get Quatation</button>
            <button class="btn btn-primary mt-5 btn-lg">Get Quatation</button>
            <div style="display: none">




            @if ($domain_checkbox)
                <div class="checkbox_card">
                    <div class="checkbox_card_box" style="gap:188px">
                        <div class="checkbox__body">Domain
                        </div>
                        <div class="total_price">
                            <span>
                             {{ $website->domain }} x {{ $domain }} :
                                &nbsp;&#8377; {{ $domain_amount ?? 0 }}
                                <!-- {{-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}} -->
                            </span>
                        </div>
                    </div>
                </div>
                @endif
                @if ($webHost_checkbox)
                <div class="checkbox_card">
                    <div class="checkbox_card_box" style="gap: 134px">
                        <div class="checkbox__body">Web Hosting</div>
                        <div class="total_price">
                            <span>
                                {{ $website->web_hosting }} x {{ $webHost }}(M) :
                                &nbsp;&#8377;
                                {{ $webHost_amount ?? 0 }}
                                {{-- <input type="text" placeholder=""
                                style="width:60%;border: none;font-size: 20px;border: none;outline: none;background:none" /> --}}
                            </span>
                        </div>
                    </div>
                </div>
            @endif
            @if ($webPage_checkbox)

            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:153px">
                    <div class="checkbox__body">Web Pages</div>
                    <div class="total_price">
                        <span>
                            {{ $website->web_page }} x {{ $value_webPage }} :
                            &nbsp;&#8377;
                            {{ $webPage_amount ?? 0 }}
                            <!-- {{-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}} -->
                        </span>
                    </div>
                </div>
            </div>
            @endif

            @if ($email_checkbox)
            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:189px">
                    <div class="checkbox__body">E-mails</div>
                    <div class="total_price">
                        <span>
                            {{ $website->email }} x {{ $value_email }} :
                            &nbsp;&#8377;
                            {{ $email_amount ?? 0 }}
                            {{-- <input type="text" placeholder=""
                                style="width:60%;border: none;font-size: 20px;border: none;outline: none;background:none" /> --}}
                        </span>
                    </div>
                </div>
            </div>
            @endif

            @if ($ssl_checkbox)
            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:123px">
                    <div class="checkbox__body">SSL Certificate</div>
                    <div class="total_price">
                        <span>Total&nbsp;:&nbsp;&#8377;
                            {{ $ssl_amount ?? 0 }}
                            <!-- {{-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}} -->
                        </span>
                    </div>
                </div>
            </div>
            @endif

            @if ($enquiry_form_checkbox)
            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:142px">
                    <div class="checkbox__body">Inquiry Form</div>
                    <div class="total_price">
                        <span>Total&nbsp;:&nbsp;&#8377;
                            {{ $enquiry_form_amount ?? 0 }}
                            <!-- {{-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}} -->
                        </span>
                    </div>
                </div>
            </div>
            @endif

            @if ($security_backup_checkboxt)
            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:98px">
                    <div class="checkbox__body">Security & Backup</div>
                    <div class="total_price">
                        <span>Total&nbsp;:&nbsp;&#8377;
                            {{ $security_backup_amount ?? 0 }}
                            <!-- {{-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}} -->
                        </span>
                    </div>
                </div>
            </div>
            @endif

            @if ($image_quality_checkbox)
            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:98px">
                    <div class="checkbox__body">HD Quality Images
                    </div>
                    <div class="total_price">
                        <span>Total&nbsp;:&nbsp;&#8377;
                            {{ $image_quality_amount ?? 0 }}
                            {{-- <!-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --> --}}
                        </span>
                    </div>
                </div>
            </div>
            @endif

            @if ($content_writting_checkbox)
            <div class="checkbox_card">
                <div class="checkbox_card_box" style="gap:123px">
                    <div class="checkbox__body">Content Writing
                    </div>
                    <div class="total_price">
                        <span>Total&nbsp;:&nbsp;&#8377;
                            {{ $content_writting_amount ?? 0 }}
                            <!-- {{-- <input type="text" placeholder=""
                                style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}} -->
                        </span>
                    </div>
                </div>
            </div>
            @endif
        </div>
        </div>
    </div>


</div>
<script>
    // $(document).ready(function() {
    //     // Add a click event listener to the button
    //     $('#website').click(function() {
    //         // Enable the select box
    //         console.log("adasd");
    //         $('#select_month_website').prop('disabled', false);
    //     });
    // });
</script>
