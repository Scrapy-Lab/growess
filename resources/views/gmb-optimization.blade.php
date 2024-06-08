@extends('layouts.app')
@section('content')
<!-- gmb optimization -->
<div class="container">
    <div class="gmb_login">
        <div>
            <img src="/assets/form.png" w="150" h="" alt="150" />
        </div>
        <div class="gmb_form">
            <div class="page_title" style="font-size:40px">
                Start Building your Buisness Profile</div>
            <div class="about_paragraph" style="color:#c4c4c4;text-align:left">This will help you get discovered by customers on Google Search and Maps
            </div>
            <div class="form_gmb">
                <div class="form-group col-md-8 mb-3">
                    <label for="inputBuisnessName">Buisness Name *</label>
                    <input type="buisnessname" class="form-control" id="inputBuisnessname">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputCategory">Buisness Category *</label>
                    <input type="category" class="form-control" id="inputCategory">
                </div>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="inputContact">Buisness Contact No *</label>
                <input type="text" class="form-control" id="inputContact" placeholder="12345678">
            </div>
            <div class="form-group col-md-8 mb-3">
                <label for="inputAddress2">Enter Your Street Address *</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Enter your city *</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Pincode *</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <button type="submit" class="button_btn">Next</button>
        </div>
    </div>
</div>
<!-- personal_details -->
<div class="container">
    <div class="personal_details">
        <div>
            <img src="/assets/personal_details.png" w="150" h="" alt="150" />
        </div>
        <div class="gmb_form">
            <div class="page_title" style="font-size:40px">
                Fill your personal details here :</div>
            <div class="form_gmb">
                <div class="form-group col-md-8 mb-3">
                    <label for="inputName">Your Name *</label>
                    <input type="name" class="form-control" id="inputName">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmailid">Email-ID *</label>
                        <input type="text" class="form-control" id="inputEmailid" placeholder="abc@xyz.com">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputContact">Contact No *</label>
                        <input type="text" class="form-control" id="inputContact" placeholder="12345678">
                    </div>
                </div>
            </div>
            <div class="confirmation">I here by Agrred</div>
            <button type="submit" class="btn_button">Get Estimate Now</button>
        </div>
    </div>
</div>

<!-- successfully_submitted -->
<div class="container">
    <div class="personal_details">
        <div>
            <img src="/assets/submitted.png" w="150" h="" alt="250" />
        </div>
        <div class="estimate_card">
            <i class='fa fa-check-circle' style='font-size:80px;color:#288d0c'></i>
            <div class="save_title" style="font-size:40px">
                Thank you !<br>Your request has been sent successfully. </div>
            <div class="estimate_title" style="font-size:40px">Your GMB Estimate</div>
            <div class="estimate_price">Rs.3500/-</div>
            <div>This is a lifetime plan</div>
        </div>
    </div>
    <div class="estimate_bottom">
        <div class="token">Pay <span style="color:#1786f4;font-weight:500">Rs.1000</span> Token Amount and Start your work</div>
        <button type="submit" class="final_button">Pay Now</button>
    </div>
</div>
@endsection
