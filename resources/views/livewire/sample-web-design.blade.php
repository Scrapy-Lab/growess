<div class="code_assessment_job">
    <div>
        <div class="code_assessment_job_details"><span style="color:#0862ab">browse job/internship</span>
            <br>that's right for you !
        </div>
        <p class="code_assessment_job_details_description">find a role that fits your carrier aspirators.</p>
        <div class="code_assessment_job_details_box-container">
            <ul class="tab_box">
                <li class=" select_mode  fa fa-search" data-tab="tab01">&nbsp;Static Website</li>
                <li class="select_mode" data-tab="tab02">&nbsp;Dynamic Website</li>
                {{-- <li class="select_mode" data-tab="tab03">&nbsp;</li> --}}
                <li class="select_mode fa fa-home " data-tab="tab04">&nbsp;Brochure Website</li>
                <li class="select_mode" data-tab="tab05">&nbsp;E-Commerece Website</li>
            </ul>
        </div>
    </div>
    <div class="code_assessment_job_details_box">
        <div class="job_details">
            {{-- <h4>jobs</h4> --}}
            {{-- <img src="{{asset('assets/logo/logo_web_type.png')}}" w="10" h="10" alt="logo"> --}}
            <img src="https://skillicons.dev/icons?i=php,laravel,python,js,wordpress,jquery,html,css,bootstrap,wordpress,django" w="10" h="10" alt="logo">
        </div>
        <div class="jobs_category">
            Construction
            <p class="jobs_category_description">Software development &nbsp;&gt;</p>
        </div>
        <div class="jobs_category">
            Restaurant
            <p class="jobs_category_description">computer science &nbsp;&gt;</p>
        </div>
        <div class="jobs_category">
            School/College
            <p class="jobs_category_description">marketing &nbsp;&gt;</p>
        </div>
    </div>
    <div class="code_assessment_job_details_box">
        <div class="job_details">
            {{-- <h4>jobs</h4> --}}
            {{-- <img src="https://skillicons.dev/icons?i=php,laravel,python,js,wordpress,jquery,html,css,bootstrap" w="10" h="10" alt="logo"> --}}
        </div>
        <div class="jobs_category">
            web developer
            <p class="jobs_category_description">Software development &nbsp;&gt;</p>
        </div>
        <div class="jobs_category">
            data science
            <p class="jobs_category_description">computer science &nbsp;&gt;</p>
        </div>
        <div class="jobs_category">
            digital marketing
            <p class="jobs_category_description">marketing &nbsp;&gt;</p>
        </div>
    </div>

    <script>
        $(document).ready(function() {




            // Add click event handler to elements with class donate_amount
            $('.select_mode').click(function() {
                // Change color to blue on click

                $('.select_mode').css('background-color', '#ffffff');
                $('.select_mode').css('color', 'black');
                $(this).css('background-color', '#0862ab');
                $(this).css('color', 'white');
                console.log("fasdasdasda");
            });
        });
    </script>
</div>
