@extends('layouts.app')
@section('content')
<div class="container">
    <h6 class="contact_us">Contact Us</h6>
    <p class="headline" style="text-transform:capitalize;font-size:20px">tell us <span style="color:rgb(240 99 47);">!</span></p>
    <div class="page_title">i'am interested in ....</div>
    <div class="box_container">
        <ul>
            <li class="selected select_tab">&nbsp;Branding</li>
            <li class="select_tab">&nbsp;Design Concept</li>
            <li class="select_tab">&nbsp;illustrations</li>
            <li class="select_tab">&nbsp;app design</li>
            <li class="select_tab">&nbsp;IOS development</li>
            <li class="select_tab">&nbsp;Android development</li>
        </ul>
    </div>
    <div class="form_section">
        <div>
            <div class="headline" style="text-transform:capitalize;">contact information</div>
            <div class="form_control">
                <input type="text" placeholder="Full Name" required>
                <label> Full Name </label>
                <input type="text" placeholder="Email address" required>
                <label> Email </label>
                <input type="text" placeholder="Tell us about your project" required>
                <label> tell about us your project </label>
            </div>
            <p class="info_field">Project Budget</p>
            <div class="box_price">
                <ul>
                    <li class="selected select_tab">&nbsp;$2-5K</li>
                    <li class="select_tab">&nbsp;$5-10K</li>
                    <li class="select_tab">&nbsp;$10-20K</li>
                    <li class="select_tab">&nbsp;>$20,OOO</li>
                </ul>
            </div>
            <button class="submit_now">Submit Now</button>
        </div>
        <div>
            <img src="/assets/seo.jpg" w="100" h="" alt="100" />
        </div>
    </div>
</div>
</div>
@endsection