<div class="mid_banner container">
    <div class="left_banner_text">
        <div class="page_title">Create budget <br>Get Amazing<br>
        <p class="page_headline">idea is yours, choice is your, price is yours</p></div>
        <div class="slidingVertical wrapper">
            <ul class="dynamic-txts">
                @foreach ($services as $key => $service )
                <li>
                    <span  style="color: {{$colors[$key]}}">{{strtoupper($service->name)}}</span></li>
                @endforeach
            </ul>
            {{-- <span>LEAD GENERATION</span>
            <span>DIGITAL MARKETING</span>
            <span>SOFTWARE</span>
            <span>Application</span> --}}
        </div>
    </div>
    {{-- @dd($services) --}}
    <img src="{{ asset('storage/'.$banner->image) }}" w="100" h="" alt="100"/>
</div>
