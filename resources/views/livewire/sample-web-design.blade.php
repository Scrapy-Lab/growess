<div class="code_assessment_job">
    <div>
        <div class="code_assessment_job_details"><span style="color:#0862ab">browse job/internship</span>
            <br>that's right for you !
        </div>
        <p class="code_assessment_job_details_description">find a role that fits your carrier aspirators.</p>
        <div class="code_assessment_job_details_box-container">
            <ul class="tab_box">
                <li class=" btn_color1 select_mode @if ($static) select  @endif  fa fa-search" wire:click="web_type('static')" data-tab="tab01" style=" ;">&nbsp;Static
                    Website</li>
                <li class="btn_color2 select_mode  @if ($dynamic) select  @endif" wire:click="web_type('dynamic')" data-tab="tab02" style=" ;">&nbsp;Dynamic Website</li>
                {{-- <li class="select_mode" data-tab="tab03">&nbsp;</li> --}}
                <li class="btn_color3 select_mode fa fa-home @if ($brochure) select  @endif " wire:click="web_type('brochure')" data-tab="tab04" style=" ">&nbsp;Brochure
                    Website</li>
            <li class="btn_color4 select_mode @if ($ecom) select  @endif" wire:click="web_type('ecom')" data-tab="tab05" style="  ;">&nbsp;E-Commerece Website</li>
            </ul>
        </div>
    </div>
{{-- Static type --}}
        <div class="code_assessment_job_details_box">
            <div style="display:flex;align-items: center;justify-content: space-evenly;">
                    <div class="jobs">jobs</div>
                    <img src="https://skillicons.dev/icons?i=php,laravel,python,js,wordpress,jquery,html,css,bootstrap,wordpress,django"
                        w="10" h="10" alt="logo" class="image_logo">
            </div>
        @if ($static)
        {{-- <div class="web_type_static"> --}}
            <div class="job_details">
                <div class="code_assessment_job_details_box1">
                    <div class="jobs_category btn_color1">
                        Construction
                        <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color2">
                        Restaurant
                        <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color3">
                        School / College
                        <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                    </div>
                </div>
                <div class="code_assessment_job_details_box2">
                    <div class="jobs_category btn_color4">
                        Shop
                        <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color1">
                        Portfolio
                        <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color2">
                        Entartainment
                        <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    @endif

    {{-- Dynamic website --}}
    @if ($dynamic)
        {{-- <div class="web_type_dynamic"> --}}
            <div class="job_details">
                <div class="code_assessment_job_details_box1">
                    <div class="jobs_category btn_color1">
                        dynamic   Construction
                        <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color2">
                        dynamic Restaurant
                        <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color3">
                        dynamic  School / College
                        <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                    </div>
                </div>
                <div class="code_assessment_job_details_box2">

                    <div class="jobs_category btn_color4">
                        Shop
                        <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color1">
                        Portfolio
                        <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                    </div>
                    <div class="jobs_category btn_color2">
                        Entartainment
                        <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    @endif
    {{-- Dynamic website --}}
    @if ($brochure)
        {{-- <div class="web_type_dynamic"> --}}
        <div class="job_details">
            <div class="code_assessment_job_details_box1">
                <div class="jobs_category btn_color1">
                    brochure   Construction
                    <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color2">
                    brochure  Restaurant
                    <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color3">
                    brochure  School / College
                    <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                </div>
            </div>
            <div class="code_assessment_job_details_box2">
                <div class="jobs_category btn_color4">
                    brochure   Shop
                    <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color1">
                    Portfolio
                    <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color2">
                    Entartainment
                    <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                </div>
            </div>
        </div>
    @endif
    {{-- Dynamic website --}}
    @if ($ecom)
        <div class="job_details">
            <div class="code_assessment_job_details_box1">
                <div class="jobs_category btn_color1">
                    ecom    Construction
                    <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color2">
                    ecom  Restaurant
                    <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color3">
                    ecom  School / College
                    <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                </div>
            </div>
            <div class="code_assessment_job_details_box2">
                <div class="jobs_category btn_color4">
                    Shop
                    <div class="jobs_category_description">Software development &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color1">
                    Portfolio
                    <div class="jobs_category_description">computer science &nbsp;&gt;</div>
                </div>
                <div class="jobs_category btn_color2">
                    Entartainment
                    <div class="jobs_category_description">marketing &nbsp;&gt;</div>
                </div>
            </div>
        </div>
        </div>
    @endif
    <script>
        $(document).ready(function() {




            // Add click event handler to elements with class donate_amount
            $('.select_mode').click(function() {
                // Change color to blue on click

                // $('.select_mode').css('background-color', '#ffffff');
                $('.select_mode').css('color', 'black');
                // $(this).css('background-color', '#0862ab');
                $(this).css('color', 'white');
                console.log("fasdasdasda");
            });
        });
    </script>
</div>
