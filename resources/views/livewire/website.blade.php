<div class="container">
    <div class="container pop_up_box">
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox" value="1" id="website" wire:model="domain_checkbox"
                        wire:click="select_domain" />
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Domain
                        <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                            &nbsp;&#9432;
                            <span class="tooltiptext">Hello Tooltip text </span>
                        </div>
                    </div>
                </label>
            </div>
            <div style="margin-left: 48px;">
                <select name="Year" id="select_month_website" class="select_month" wire:model="domain"
                    wire:change="domain_func" {{ $selectDomain ? '' : 'disabled' }}>
                    <option value="placeholder" selected>&nbsp;Select</option>
                    <option value="1">1 Year</option>
                    <option value="2">2 Year</option>
                    <option value="3">3 Year</option>
                </select>
            </div>
            <div class="check_price">Rs.{{ $website->domain }}/-</div>
            <div style="color: #000; font-size: 20px;margin-left:32px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{ $domain_amount ?? 0 }} {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox" value="1" wire:model="webHost_checkbox" wire:click="select_web_host" />
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Web Hosting
                        <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                            &nbsp;&#9432;
                            <span class="tooltiptext">Hello Tooltip text </span>
                        </div>
                    </div>
                </label>
            </div>
            <div style="margin-left: 48px;">
                <select name="Year" id="Year" class="select_month" wire:model="webHost" wire:change="web_host"
                    {{ $select_webHost ? '' : 'disabled' }}>
                    <option value="placeholder" selected>&nbsp;Select</option>
                    <option value="12">1 Year</option>
                    <option value="24">2 Year</option>
                    <option value="36">3 Year</option>
                </select>
                <div style="font-size:14px;color:#000;width:110px">(Rs.220 p/month)</div>
            </div>
            <div class="check_price">Rs. {{ $website->web_hosting }} /-</div>
            <div style="color: #000; font-size: 20px;margin-left:42px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{ $webHost_amount ?? 0 }}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox"  value="1" wire:model="webPage_checkbox" wire:click="select_web_page" />
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Web Pages
                        <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                            &nbsp;&#9432;
                            <span class="tooltiptext">Hello Tooltip text </span>
                        </div>
                    </div>
                </label>
            </div>
            <div style="margin-left: 42px;">
                <form>
                    <div class="value-button" id="decrease" wire:click="decrement_webPage"  value="Decrease Value">-</div>
                    {{-- <input type="number" id="number" value="{{$value}}" wire:model="webPage"
                    {{ $select_webPage ? '' : 'disabled' }}/> --}}
                    <input type="number" id="number" wire:model="value_webPage" {{ $select_webPage ? '' : 'disabled' }} />
                    <div class="value-button" id="increase"    wire:click="increment_webPage" value="Increase Value">+</div>
                </form>
                <div style="font-size:14px;color:#000;width:110px">(Rs.{{ $website->web_page }} p/page)</div>
            </div>
            <div class="check_price">Rs.4000/-</div>
            <div style="color: #000; font-size: 20px;margin-left:32px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{ $webPage_amount ?? 0 }}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox"  value="1" wire:model="email_checkbox" wire:click="select_email_checkbox" />
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">E-mails
                        <div class="tooltip" style="display:contents; color: #e90d12;font-size: 14px;font-weight: 700;">
                            &nbsp;&#9432;
                            <span class="tooltiptext">Hello Tooltip text </span>
                        </div>
                    </div>
                </label>
            </div>
            <div style="margin-left: 42px;">
                <form>
                    <div class="value-button" id="decrease" wire:click="decrement_email" value="Decrease Value">-</div>
                    <input type="number" id="number" wire:model="value_email" {{ $email_checkbox ? '' : 'disabled' }} />
                    <div class="value-button" id="increase" wire:click="increment_email" value="Increase Value">+</div>
                </form>
                <div style="font-size:14px;color:#000;width:110px">(Rs.{{ $website->email }}/Email)</div>
            </div>
            <div class="check_price">Rs.4000/-</div>
            <div style="color: #000; font-size: 20px;margin-left:32px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{ $email_amount ?? 0 }}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox" wire:model="ssl_checkbox" wire:click="select_ssl_checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">SSL Certificate (1 Yr)</div>
                </label>
            </div>
            <div class="check_price" style="margin-left: 183px!important;">Rs.{{ $website->ssl }}/-</div>
            <div style="color: #000; font-size: 20px;margin-left:52px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{$ssl_amount ?? 0}}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox" wire:model="enquiry_form_checkbox" wire:click="select_enquiry_form_checkbox" />
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Inquiry Form</div>
                </label>
            </div>
            <div class="check_price" style="margin-left: 183px!important;">Rs.{{ $website->enquiry_form}}/-</div>
            <div style="color: #000; font-size: 20px;margin-left:52px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{$enquiry_form_amount}}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>

        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox"  wire:model="security_backup_checkboxt" wire:click="select_security_backup_checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Security & Backup</div>
                </label>
            </div>
            <div class="check_price" style="margin-left: 183px!important;">Rs.{{ $website->security_backup}}/-</div>
            <div style="color: #000; font-size: 20px;margin-left:52px">
                <span>Total Amount.&nbsp;:-&nbsp;

                    {{$security_backup_amount}}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox"  wire:model="image_quality_checkbox" wire:click="select_hd_quality_images_checkbox" />
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
            <div class="check_price" style="margin-left: 183px!important;">Rs.{{ $website->hd_quality_images}}/-</div>
            <div style="color: #000; font-size: 20px;margin-left:52px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{$image_quality_amount}}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>

        <div class="checkbox_card">
            <div class="checkboxes__item">
                <label class="checkbox style-a">
                    <input type="checkbox" wire:model="content_writting_checkbox" wire:click="select_content_writing_checkbox"  />
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
            <div class="check_price" style="margin-left: 183px!important;">Rs.{{ $website->content_writing}}/-</div>
            <div style="color: #000; font-size: 20px;margin-left:52px">
                <span>Total Amount.&nbsp;:-&nbsp;
                    {{$content_writting_amount}}
                    {{-- <input type="text" placeholder=""
                        style="border: none;width: 33%;font-size: 20px;border: none;outline: none;background:none" /> --}}
                </span>
            </div>
        </div>
    </div>
    {{-- <div style="margin:10px 20px;display:flex;justify-content:space-between;gap:20px;width:100%">
        <div style="font-size: 40px;font-weight:800;">Price Details :-</div>
        <div>
            <div style="font-size: 24px;">
                <span>Sub Amount.&nbsp;:-&nbsp;
                    <input type="text" placeholder=""
                        style="border: none;font-size: 24px;border: none;outline: none;background:none" />
                </span>
            </div>
            <div style=" font-size: 22px">
                <span>Special Price.&nbsp;&nbsp;&nbsp;:-&nbsp;
                    <input type="text" placeholder=""
                        style="border: none;font-size: 22px;border: none;outline: none;background:none" />
                </span>
            </div>
            <div style="font-size: 20px;">
                <span>Extra Discout.&nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp;
                    <input type="text" placeholder=""
                        style="border: none;font-size: 20px;border: none;outline: none;background:none" />
                </span>
            </div>
            <div style="border:4px solid #000;width:70%"></div>
            <div style="font-size: 28px;font-weight:700">
                <span>Final Amount&nbsp;:-&nbsp;
                    <input type="text" placeholder=""
                        style="width:30%;border: none;font-weight:700;font-size: 28px;border: none;outline: none;background:none" />
                </span>
            </div>
        </div>
    </div> --}}
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
</div>
