<div class="mid_banner">
    <div class="left_banner_text">
        <div><span style="color:rgb(0 0 0);font-size:46px;font-weight:500 !important;line-height:28px">Create budget</span><span style="font-size:46px;font-weight:500 !important;line-height:28px"> &#38;</span> {{--  Best Health--}}</div>
        <span style="color:rgb(0 0 0);font-size:46px;font-weight:500 !important;line-height:28px">Get Amazing </span>
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
