@extends('layouts.app')
@section('content')
    <!-- Components for Banner -->
    @livewire('home-banner')
    <!-- Components for button boxes  -->
    @livewire('service')
    <!-- Toggle button -->
    <div class="gap" style="background: linear-gradient(to right, #f9f8ef, #faf4ff); !important">
        <div class="container">
            <div class="page_title" style="text-align:center">Get <span style="color:red">100% </span>Qualified Lead
                through<br>our <span style="color:green">certified partners </span></div>
            <div class="switches-container">
                <input type="radio" id="switchMonthly" name="switchPlan" value="Google Ad Preview" checked="checked"
                    onclick="toggleContainers()" />
                <input type="radio" id="switchYearly" name="switchPlan" value="Meta Ad Preview"
                    onclick="toggleContainers()" />
                <label for="switchMonthly">Google Ad Preview</label>
                <label for="switchYearly">Meta Ad Preview</label>
                <div class="switch-wrapper">
                    <div class="switch">
                        <div>Google Ad Preview</div>
                        <div>Meta Ad Preview</div>
                    </div>
                </div>
            </div>
            <!-- Google ads -->
            <div id="container1">
                <div class="google_container" id="content1">
                    <div class="list_card ">
                        <div class="menu_bar">
                            <div class="menuAds tablinks active" onclick="tab(event, 'tab1')">
                                <span class="fa fa-search" style="font-size:20px;">&nbsp;Search</span>
                            </div>
                            <div class="menuAds tablinks" onclick="tab(event, 'tab2')">
                                <span class=" fa fa-phone" style="font-size:20px;">&nbsp; Call</span>

                            </div>
                            <div class="menuAds tablinks" onclick="tab(event, 'tab3')">
                                <span class=" fa fa-desktop" style="font-size:20px">&nbsp; Display</span>

                            </div>
                            <div class="menuAds tablinks" onclick="tab(event, 'tab4')">
                                <span class="fa fa-shopping-cart" style="font-size:20px">&nbsp;Shopping</span>

                            </div>
                            <div class="menuAds tablinks" onclick="tab(event, 'tab5')">
                                <span class="fa fa-play-circle-o" style="font-size:20px">&nbsp; Video</span>
                            </div>
                            <div class="menuAds tablinks" onclick="tab(event, 'tab6')">
                                <span class="fa fa-qrcode" style="font-size:20px">&nbsp; App</span>
                            </div>
                        </div>
                        <div class="tab-name" id="tab1">
                            <section class="grid">
                                <img src="/assets/google.webp" w="10" h="10" alt="" />
                            </section>
                        </div>
                        <div class="tab-name" id="tab2" style="display:none">
                            <section class="grid">
                                <img src="/assets/call-removebg-preview.png" w="10" h="10" alt="" />
                            </section>
                        </div>
                        <div class="tab-name" id="tab3" style="display:none">
                            <section class="grid">
                                <img src="/assets/display.webp" w="10" h="10" alt="" />
                            </section>
                        </div>
                        <div class="tab-name" id="tab4" style="display:none">
                            <section class="grid">
                                <img src="/assets/shopping.png" w="10" h="10" alt="" />
                            </section>
                        </div>
                        <div class="tab-name" id="tab5" style="display:none">
                            <section class="grid">
                                <img src="/assets/youtube.webp" w="10" h="10" alt="" />
                            </section>
                        </div>
                        <div class="tab-name" id="tab6" style="display:none">
                            <section class="grid">
                                <img src="/assets/apps.webp" w="10" h="10" alt="" />
                            </section>
                        </div>
                        <div class="text-title">
                            <h3 class="headline">
                                Start with search
                            </h3>
                            <p class="text_paragraph">
                                Help drive sales, leads or site traffic by getting your
                                business in front of people who are actively searching Google
                                for products or services you offer.
                            </p>
                            <div class="icon_wrapper">
                                <a href=" " target=_blank class="icon_wrapper">
                                    <img src="/assets/10009356.png" w="10" h="10" alt="logo" />
                                    <span>Explore Search Ads</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container2" style="display: none;">
                <div class="google_container" id="content1">
                    <div class="list_card ">
                        <div class="menu_bar">
                            <div class="menuAds tab-links active" onclick="tabb(event, 'tab01')">
                                <span class="" style="font-size:20px">&nbsp;Image</span>
                            </div>
                            <div class="menuAds tab-links" onclick="tabb(event, 'tab02')">
                                <span class=" " style="font-size:20px">&nbsp; Video</span>

                            </div>
                            <div class="menuAds tab-links" onclick="tabb(event, 'tab03')">
                                <span class="" style="font-size:20px">&nbsp;Carousel</span>

                            </div>
                            <div class="menuAds tab-links" onclick="tabb(event, 'tab04')">
                                <span class="" style="font-size:20px">&nbsp; Collection</span>
                            </div>
                            <div class="menuAds tab-links" onclick="tabb(event, 'tab05')">
                                <span class="" style="font-size:19px">&nbsp; Whatsapp</span>
                            </div>
                        </div>
                        <div class="tab_name" id="tab01">
                            <section class="gridcard">
                                <img src="{{ asset('assets/images/iphone.png') }}" w="10" h="10" alt="" />
                                <section class="grid1">
                                    <!-- <img src="/assets/google.webp" w="10" h="10" alt="" /> -->
                                </section>
                            </section>
                        </div>
                        <div class="tab_name" id="tab02" style="display:none">
                            <section class="gridcard">
                                <img src="{{ asset('assets/images/iphone.png') }}" w="10" h="10" alt="" />
                                <section class="grid1">
                                    <img src="/assets/image.webp" w="320" h="520" alt="" />
                                </section>
                            </section>
                        </div>
                        <div class="tab_name" id="tab03" style="display:none">
                            <section class="gridcard">
                                <img src="{{ asset('assets/images/iphone.png') }}" w="10" h="10" alt="" />
                                <section class="grid1">
                                    <!-- <img src="/assets/video.png" w="10" h="10" alt="" /> -->
                                </section>
                            </section>
                        </div>
                        <div class="tab_name" id="tab04" style="display:none">
                            <section class="gridcard">
                                <img src="{{ asset('assets/images/iphone.png') }}" w="10" h="10" alt="" />
                                <section class="grid1">
                                    <img src="/assets/Carousel.webp" w="10" h="10" alt="" />
                                </section>
                            </section>
                        </div>
                        <div class="tab_name" id="tab05" style="display:none">
                            <section class="gridcard">
                                <img src="{{ asset('assets/images/iphone.png') }}" w="10" h="10" alt="" />
                                <section class="grid1">
                                    <img src="/assets/collection.webp" w="10" h="10" alt="" />
                                </section>
                            </section>
                        </div>
                        <div class="text-title">
                            <h3 class="headline">
                                Start with search
                            </h3>
                            <p class="text_paragraph">
                                Help drive sales, leads or site traffic by getting your
                                business in front of people who are actively searching Google
                                for products or services you offer.
                            </p>
                            <div class="icon_wrapper">
                                <a href=" " target=_blank class="icon_wrapper">
                                    <img src="/assets/10009356.png" w="10" h="10" alt="logo" />
                                    <span>Explore Search Ads</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Components for payment section -->
    <div class="gap">
        <div class="container">
            <div class="payment_card_section">
                <div class="page_title">the all in one <span style="color: rgb(1, 178, 86)">Digital Marketing</span><br>
                    you've
                    been looking for </div>
                <nav>
                    <ul class="tab_card">
                        <li>We Provide Complete:</li>
                        <span class="mob_view">
                            <li>
                                <div style="background: #ffe8ea;color: #ef3305;"class="open" data-tab="tab01">Digital
                                    Marketing</div>
                            </li>
                            <li>
                                <div style="background: #eaffe8;color: #1e5c09;" data-tab="tab02">Web Designs</div>
                            </li>
                            <li>
                                <div style="background: #fff4e5;color: #704b22;" data-tab="tab03">Lead Generation</div>
                            </li>
                            <li>
                                <div style="background: #dafffe;color: #2b6f7a;" data-tab="tab04">Graphics Designs</div>
                            </li>
                            <li>
                                <div style="background: #f6e7fb;color: #580f76;" data-tab="tab05">Software & Apps</div>
                            </li>
                        </span>
                    </ul>
                </nav>
            </div>

            {{-- TAB 1 --}}
            <div class="content sliderMainContent">
                <div id="tab01" class="open payment_mode">
                    <div class="card_title">
                        <h3>Digital Marketing</h3>
                        <p>Digital marketing is not an art of selling a product. It is an art of making people buy the
                            product that you sell.</p>
                    </div>
                    <div class="card_mode box-container">
                        <ul class="tab_nav">
                            <li class="show button_mode" data-tab="tab01">SEO Services</li>
                            <li class="button_mode" data-tab="tab02">Social Media Marketing</li>
                            <li class="button_mode" data-tab="tab03">Email Marketing</li>
                            <li class="button_mode" data-tab="tab04">Content Marketing</li>
                            <li class="button_mode" data-tab="tab05">Pay-Per-Click Advertising</li>
                            <li class="button_mode" data-tab="tab06">Influencer Marketing</li>
                            <li class="button_mode" data-tab="tab07">Analytics & Reporting</li>
                        </ul>
                    </div>
                    <div class="contents">
                        <div id="tab01" class="show box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Keyword Research</h5>
                                                    <p class="card-text">Identify the best keywords to target for maximum
                                                        traffic.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">On-Page SEO</h5>
                                                    <p class="card-text">Optimize website content and structure for search
                                                        engines.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Off-Page SEO</h5>
                                                    <p class="card-text">Build quality backlinks to improve search
                                                        rankings.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Technical SEO</h5>
                                                    <p class="card-text">Improve website speed, structure, and performance.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Local SEO</h5>
                                                    <p class="card-text">Optimize your online presence for local searches.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Keyword Research</h5>
                                                    <p class="card-text">Identify the best keywords to target for maximum
                                                        traffic.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">On-Page SEO</h5>
                                                    <p class="card-text">Optimize website content and structure for search engines.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Off-Page SEO</h5>
                                                    <p class="card-text">Build quality backlinks to improve search rankings.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab02" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Profile Management</h5>
                                                    <p class="card-text">Create and manage social media profiles.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Creation</h5>
                                                    <p class="card-text">Develop engaging content for social media.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Ad Campaigns</h5>
                                                    <p class="card-text">Run targeted ads to reach your audience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Community Engagement</h5>
                                                    <p class="card-text">Interact with followers and respond to comments.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Analytics & Reporting</h5>
                                                    <p class="card-text">Track and analyze social media performance.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Profile Management</h5>
                                                    <p class="card-text">Create and manage social media profiles.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Creation</h5>
                                                    <p class="card-text">Develop engaging content for social media.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Ad Campaigns</h5>
                                                    <p class="card-text">Run targeted ads to reach your audience.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab03" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">List Building</h5>
                                                    <p class="card-text">Grow your email subscriber list.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Campaign Design</h5>
                                                    <p class="card-text">Create visually appealing email campaigns.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Segmentation</h5>
                                                    <p class="card-text">Target specific groups within your audience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Automation</h5>
                                                    <p class="card-text">Set up automated email sequences.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">A/B Testing</h5>
                                                    <p class="card-text">Test different email elements for better results.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">List Building</h5>
                                                    <p class="card-text">Grow your email subscriber list.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Campaign Design</h5>
                                                    <p class="card-text">Create visually appealing email campaigns.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Segmentation</h5>
                                                    <p class="card-text">Target specific groups within your audience.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab04" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Blog Posts</h5>
                                                    <p class="card-text">Write informative and engaging blog articles.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Video Content</h5>
                                                    <p class="card-text">Produce high-quality videos to engage viewers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Infographics</h5>
                                                    <p class="card-text">Design visually appealing infographics.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Whitepapers</h5>
                                                    <p class="card-text">Develop in-depth whitepapers and eBooks.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Case Studies</h5>
                                                    <p class="card-text">Showcase successful projects and client results.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Blog Posts</h5>
                                                    <p class="card-text">Write informative and engaging blog articles.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Video Content</h5>
                                                    <p class="card-text">Produce high-quality videos to engage viewers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Infographics</h5>
                                                    <p class="card-text">Design visually appealing infographics.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab05" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Google Ads</h5>
                                                    <p class="card-text">Run search and display ads on Google.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Meta Ads</h5>
                                                    <p class="card-text">Advertise on Facebook and Instagram.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">LinkedIn Ads</h5>
                                                    <p class="card-text">Target professionals with LinkedIn advertising.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">YouTube Ads</h5>
                                                    <p class="card-text">Reach audiences with video ads on YouTube.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Retargeting</h5>
                                                    <p class="card-text">Re-engage visitors who have previously interacted
                                                        with your site.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Google Ads</h5>
                                                    <p class="card-text">Run search and display ads on Google.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Meta Ads</h5>
                                                    <p class="card-text">Advertise on Facebook and Instagram.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">LinkedIn Ads</h5>
                                                    <p class="card-text">Target professionals with LinkedIn advertising.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab06" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Influencer Identification</h5>
                                                    <p class="card-text">Find the right influencers for your brand.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Campaign Planning</h5>
                                                    <p class="card-text">Develop a strategic influencer marketing plan.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Collaboration</h5>
                                                    <p class="card-text">Work with influencers to create content.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Performance Tracking</h5>
                                                    <p class="card-text">Monitor and analyze influencer campaign results.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Relationship Management</h5>
                                                    <p class="card-text">Build and maintain relationships with influencers.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Influencer Identification</h5>
                                                    <p class="card-text">Find the right influencers for your brand.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Campaign Planning</h5>
                                                    <p class="card-text">Develop a strategic influencer marketing plan.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Collaboration</h5>
                                                    <p class="card-text">Work with influencers to create content.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab07" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Website Analytics</h5>
                                                    <p class="card-text">Analyze website traffic and user behavior.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Campaign Tracking</h5>
                                                    <p class="card-text">Monitor the performance of marketing campaigns.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Conversion Rate Optimization</h5>
                                                    <p class="card-text">Improve the rate at which visitors convert.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">A/B Testing</h5>
                                                    <p class="card-text">Test different elements to see what works best.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Custom Reports</h5>
                                                    <p class="card-text">Generate detailed reports on key metrics.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Website Analytics</h5>
                                                    <p class="card-text">Analyze website traffic and user behavior.</p>

                                                </div>
                                            </div><div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Campaign Tracking</h5>
                                                    <p class="card-text">Monitor the performance of marketing campaigns.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Conversion Rate Optimization</h5>
                                                    <p class="card-text">Improve the rate at which visitors convert.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- TAB 2 --}}
            <div class="content sliderMainContent">
                <div id="tab02" class="payment_mode">
                    <div class="card_title">
                        <h3>Web Designs</h3>
                        <p>Good design is good business.</p>
                    </div>
                    <div class="card_mode box-container">
                        <ul class="tab_nav">
                            <li class="show button_mode" data-tab="tab001">Responsive Design</li>
                            <li class="button_mode" data-tab="tab002">E-Commerce Design</li>
                            <li class="button_mode" data-tab="tab003">UI/UX Design</li>
                            <li class="button_mode" data-tab="tab004">Landing Page Design</li>
                            <li class="button_mode" data-tab="tab005">Custom Web Development</li>
                            <li class="button_mode" data-tab="tab006">CMS Integration</li>
                            <li class="button_mode" data-tab="tab007">Website Maintenance</li>
                        </ul>
                    </div>
                    <div class="contents">
                        <div id="tab001" class="show box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Mobile Optimization</h5>
                                                    <p class="card-text">Optimize your site for mobile devices.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cross-Browser Compatibility</h5>
                                                    <p class="card-text">Ensure your site works on all browsers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Fluid Grids</h5>
                                                    <p class="card-text">Use flexible grids that adapt to different screen sizes.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Responsive Images</h5>
                                                    <p class="card-text">Use images that scale with screen size.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Media Queries</h5>
                                                    <p class="card-text">Implement CSS media queries for responsive design.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Mobile Optimization</h5>
                                                    <p class="card-text">Optimize your site for mobile devices.</p>

                                                </div>
                                            </div><div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cross-Browser Compatibility</h5>
                                                    <p class="card-text">Ensure your site works on all browsers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Fluid Grids</h5>
                                                    <p class="card-text">Use flexible grids that adapt to different screen sizes.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab002" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Product Page</h5>
                                                    <p class="card-text">Design engaging and informative product pages.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Shopping Cart</h5>
                                                    <p class="card-text">Create a user-friendly shopping cart experience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Checkout Process</h5>
                                                    <p class="card-text">Simplify the checkout process to reduce cart abandonment.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Payment Integration</h5>
                                                    <p class="card-text">Integrate secure payment gateways.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Customer Reviews</h5>
                                                    <p class="card-text">Implement customer review sections for social proof.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Product Pages</h5>
                                                    <p class="card-text">Design engaging and informative product pages.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Shopping Cart</h5>
                                                    <p class="card-text">Create a user-friendly shopping cart experience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Checkout Process</h5>
                                                    <p class="card-text">Simplify the checkout process to reduce cart abandonment.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab003" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Wireframing</h5>
                                                    <p class="card-text">Create wireframes to outline the structure of your site.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Prototyping</h5>
                                                    <p class="card-text">Develop prototypes to test functionality.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">User Testing</h5>
                                                    <p class="card-text">Conduct user tests to gather feedback.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Interaction Design</h5>
                                                    <p class="card-text">Design interactive elements for better engagement.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Accessibility</h5>
                                                    <p class="card-text">Ensure your site is accessible to all users.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Wireframing</h5>
                                                    <p class="card-text">Create wireframes to outline the structure of your site.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Prototyping</h5>
                                                    <p class="card-text">Develop prototypes to test functionality.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">User Testing</h5>
                                                    <p class="card-text">Conduct user tests to gather feedback.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab004" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Lead Capture Forms</h5>
                                                    <p class="card-text">Create forms to capture visitor information.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Call to Action (CTA)</h5>
                                                    <p class="card-text">Design compelling CTAs to drive conversions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Visual Hierarchy</h5>
                                                    <p class="card-text">Use visual elements to guide user attention.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">A/B Testing</h5>
                                                    <p class="card-text">Test different landing page elements for optimization.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Mobile Optimization</h5>
                                                    <p class="card-text">Ensure landing pages are mobile-friendly.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Lead Capture Forms</h5>
                                                    <p class="card-text">Create forms to capture visitor information.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Call to Action (CTA)</h5>
                                                    <p class="card-text">Design compelling CTAs to drive conversions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Visual Hierarchy</h5>
                                                    <p class="card-text">Use visual elements to guide user attention.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab005" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Front-End Development</h5>
                                                    <p class="card-text">Develop the client-facing part of the website.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Back-End Development</h5>
                                                    <p class="card-text">Build the server-side functionality.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Management Systems</h5>
                                                    <p class="card-text">Implement and customize CMS platforms.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">API Integration</h5>
                                                    <p class="card-text">Integrate third-party services and APIs.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Security</h5>
                                                    <p class="card-text">Ensure your website is secure from threats.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Front-End Development</h5>
                                                    <p class="card-text">Develop the client-facing part of the website.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Back-End Development</h5>
                                                    <p class="card-text">Build the server-side functionality.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Management Systems</h5>
                                                    <p class="card-text">Implement and customize CMS platforms.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab006" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">WordPress</h5>
                                                    <p class="card-text">Integrate and customize WordPress for your needs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Joomla</h5>
                                                    <p class="card-text">Use Joomla for flexible content management.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Drupal</h5>
                                                    <p class="card-text">Implement Drupal for robust content management.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Magento</h5>
                                                    <p class="card-text">Build and manage e-commerce sites with Magento.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Shopify</h5>
                                                    <p class="card-text">Create and manage online stores with Shopify.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">WordPress</h5>
                                                    <p class="card-text">Integrate and customize WordPress for your needs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Joomla</h5>
                                                    <p class="card-text">Use Joomla for flexible content management.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Drupal</h5>
                                                    <p class="card-text">Implement Drupal for robust content management.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab007" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Regular Update</h5>
                                                    <p class="card-text">Ensure your site software is up-to-date.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Backups</h5>
                                                    <p class="card-text">Perform regular backups to prevent data loss.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Security Monitoring</h5>
                                                    <p class="card-text">Monitor and address security threats.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Performance Optimization</h5>
                                                    <p class="card-text">Optimize site speed and performance.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Updates</h5>
                                                    <p class="card-text">Keep your site content fresh and relevant.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Regular Update</h5>
                                                    <p class="card-text">Ensure your site software is up-to-date.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Backups</h5>
                                                    <p class="card-text">Perform regular backups to prevent data loss.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Security Monitoring</h5>
                                                    <p class="card-text">Monitor and address security threats.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- TAB 3 --}}
            <div class="content sliderMainContent">
                <div id="tab03" class="payment_mode">
                    <div class="card_title">
                        <h3>Lead Generation</h3>
                        <p>Lead generation is not an event, it’s a process.</p>
                    </div>
                    <div class="card_mode box-container">
                        <ul class="tab_nav">
                            <li class="show button_mode" data-tab="tab011">Google Ads</li>
                            <li class="button_mode" data-tab="tab012">Meta Ads</li>
                            <li class="button_mode" data-tab="tab013">LinkedIn Ads</li>
                            <li class="button_mode" data-tab="tab014">Email Campaigns</li>
                            <li class="button_mode" data-tab="tab015">Content Marketing</li>
                            <li class="button_mode" data-tab="tab016">Webinars & Events</li>
                            <li class="button_mode" data-tab="tab017">Landing Pages</li>
                        </ul>
                    </div>
                    <div class="contents">
                        <div id="tab011" class="show box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Search Ads</h5>
                                                    <p class="card-text">Show ads in Google search results.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Display Ads</h5>
                                                    <p class="card-text">Reach users with banner ads on websites.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Call Ads</h5>
                                                    <p class="card-text">Encourage users to call your business directly.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Shopping Ads</h5>
                                                    <p class="card-text">Promote products with Google Shopping ads.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">YouTube Ads</h5>
                                                    <p class="card-text">Advertise on YouTube with video ads.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Search Ads</h5>
                                                    <p class="card-text">Show ads in Google search results.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Display Ads</h5>
                                                    <p class="card-text">Reach users with banner ads on websites.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Call Ads</h5>
                                                    <p class="card-text">Encourage users to call your business directly.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab012" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Feed Ads</h5>
                                                    <p class="card-text">Advertise in users' news feeds.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Story Ads</h5>
                                                    <p class="card-text">Create ads for Facebook and Instagram Stories.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Carousel Ads</h5>
                                                    <p class="card-text">Showcase multiple images or videos in a single ad.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Messenger Ads</h5>
                                                    <p class="card-text">Reach users through Facebook Messenger.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Audience Network</h5>
                                                    <p class="card-text">Extend reach with ads on third-party apps and sites.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Feed Ads</h5>
                                                    <p class="card-text">Advertise in users' news feeds.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Story Ads</h5>
                                                    <p class="card-text">Create ads for Facebook and Instagram Stories.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Carousel Ads</h5>
                                                    <p class="card-text">Showcase multiple images or videos in a single ad.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab013" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Sponsored Content</h5>
                                                    <p class="card-text">Promote your content in the LinkedIn feed.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Sponsored InMail</h5>
                                                    <p class="card-text">Send direct messages to LinkedIn users.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Text Ads</h5>
                                                    <p class="card-text">Display ads on LinkedIn's sidebar.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Dynamic Ads</h5>
                                                    <p class="card-text">Personalize ads based on LinkedIn user data.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Video Ads</h5>
                                                    <p class="card-text">Engage users with video content on LinkedIn.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Sponsored Content</h5>
                                                    <p class="card-text">Promote your content in the LinkedIn feed.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Sponsored InMail</h5>
                                                    <p class="card-text">Send direct messages to LinkedIn users.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Text Ads</h5>
                                                    <p class="card-text">Display ads on LinkedIn's sidebar.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab014" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Newsletter Campaigns</h5>
                                                    <p class="card-text">Keep your audience informed with newsletters.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Promotional Emails</h5>
                                                    <p class="card-text">Send offers and promotions to your subscribers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Drip Campaigns</h5>
                                                    <p class="card-text">Automate a series of emails to nurture leads.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Re-Engagement Campaigns</h5>
                                                    <p class="card-text">Win back inactive subscribers.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Transactional Emails</h5>
                                                    <p class="card-text">Send order confirmations and receipts.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Newsletter Campaigns</h5>
                                                    <p class="card-text">Keep your audience informed with newsletters.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Promotional Emails</h5>
                                                    <p class="card-text">Send offers and promotions to your subscribers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Drip Campaigns</h5>
                                                    <p class="card-text">Automate a series of emails to nurture leads.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab015" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Blog Posts</h5>
                                                    <p class="card-text">Write informative articles to attract readers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">E-Books</h5>
                                                    <p class="card-text">Offer in-depth information in downloadable e-books.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Whitepapers</h5>
                                                    <p class="card-text">Create detailed reports to educate your audience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Case Studies</h5>
                                                    <p class="card-text">Highlight success stories to build trust.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Webinars</h5>
                                                    <p class="card-text">Host webinars to engage and educate prospects.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Blog Posts</h5>
                                                    <p class="card-text">Write informative articles to attract readers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">E-Books</h5>
                                                    <p class="card-text">Offer in-depth information in downloadable e-books.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Whitepapers</h5>
                                                    <p class="card-text">Create detailed reports to educate your audience.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab016" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Live Webinars</h5>
                                                    <p class="card-text">Host live sessions to interact with your audience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Recorded Webinars</h5>
                                                    <p class="card-text">Provide access to recorded sessions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Virtual Events</h5>
                                                    <p class="card-text">Conduct online events to reach a broader audience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Workshops</h5>
                                                    <p class="card-text">Organize workshops to provide hands-on learning.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Networking Events</h5>
                                                    <p class="card-text">Facilitate networking opportunities for attendees.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Live Webinars</h5>
                                                    <p class="card-text">Host live sessions to interact with your audience.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Recorded Webinars</h5>
                                                    <p class="card-text">Provide access to recorded sessions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Virtual Events</h5>
                                                    <p class="card-text">Conduct online events to reach a broader audience.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab017" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Lead Capture Forms</h5>
                                                    <p class="card-text">Use forms to collect visitor information.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Call to Action (CTA)</h5>
                                                    <p class="card-text">Design effective CTAs to drive conversions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Thank You Pages</h5>
                                                    <p class="card-text">Create pages to thank and engage new leads.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">A/B Testing</h5>
                                                    <p class="card-text">Test and optimize landing page elements.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Mobile Optimization</h5>
                                                    <p class="card-text">Ensure landing pages are mobile-friendly.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Lead Capture Forms</h5>
                                                    <p class="card-text">Use forms to collect visitor information.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Call to Action (CTA)</h5>
                                                    <p class="card-text">Design effective CTAs to drive conversions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Thank You Pages</h5>
                                                    <p class="card-text">Create pages to thank and engage new leads.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- TAB 4 --}}
            <div class="content sliderMainContent">
                <div id="tab04" class="payment_mode">
                    <div class="card_title">
                        <h3>Graphic Designs</h3>
                        <p>Design is the silent ambassador of your brand.</p>
                    </div>
                    <div class="card_mode box-container">
                        <ul class="tab_nav">
                            <li class="show button_mode" data-tab="tab021">Logo Design</li>
                            <li class="button_mode" data-tab="tab022">Brochure Design</li>
                            <li class="button_mode" data-tab="tab023">Infographics</li>
                            <li class="button_mode" data-tab="tab024">Social Media Graphics</li>
                            <li class="button_mode" data-tab="tab025">Advertisement Design</li>
                            <li class="button_mode" data-tab="tab026">Packaging Design</li>
                            <li class="button_mode" data-tab="tab027">Business Card Design</li>
                        </ul>
                    </div>
                    <div class="contents">
                        <div id="tab021" class="show box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Concept Development</h5>
                                                    <p class="card-text">Generate initial logo concepts.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Revisions</h5>
                                                    <p class="card-text">Refine the logo design based on feedback.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Finalization</h5>
                                                    <p class="card-text">Finalize the logo design.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Brand Guidelines</h5>
                                                    <p class="card-text">Create guidelines for logo usage.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">File Delivery</h5>
                                                    <p class="card-text">Provide logo files in various formats.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Concept Development</h5>
                                                    <p class="card-text">Generate initial logo concepts.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Revisions</h5>
                                                    <p class="card-text">Refine the logo design based on feedback.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Finalization</h5>
                                                    <p class="card-text">Finalize the logo design.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab022" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Layout Design</h5>
                                                    <p class="card-text">Develop the brochure layout.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Creation</h5>
                                                    <p class="card-text">Write compelling copy for the brochure.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Image Selection</h5>
                                                    <p class="card-text">Choose high-quality images.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Printing</h5>
                                                    <p class="card-text">Coordinate the printing process.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Digital Brochures</h5>
                                                    <p class="card-text">Create digital versions for online distribution.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Layout Design</h5>
                                                    <p class="card-text">Develop the brochure layout.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Creation</h5>
                                                    <p class="card-text">Write compelling copy for the brochure.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Image Selection</h5>
                                                    <p class="card-text">Choose high-quality images.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab023" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Research</h5>
                                                    <p class="card-text">Gather data and information.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Design</h5>
                                                    <p class="card-text">Create visually appealing infographics.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Revisions</h5>
                                                    <p class="card-text">Make adjustments based on feedback.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Finalization</h5>
                                                    <p class="card-text">Finalize the infographic design.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Distribution</h5>
                                                    <p class="card-text">Share infographics across various platforms.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Research</h5>
                                                    <p class="card-text">Gather data and information.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Design</h5>
                                                    <p class="card-text">Create visually appealing infographics.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Revisions</h5>
                                                    <p class="card-text">Make adjustments based on feedback.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab024" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Profile Banners</h5>
                                                    <p class="card-text">Design banners for social media profiles.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Post Templates</h5>
                                                    <p class="card-text">Create templates for social media posts.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Ad Graphics</h5>
                                                    <p class="card-text">Design graphics for social media ads.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Story Graphics</h5>
                                                    <p class="card-text">Develop visuals for Stories on social platforms.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Highlight Covers</h5>
                                                    <p class="card-text">Create highlight covers for Instagram.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Profile Banners</h5>
                                                    <p class="card-text">Design banners for social media profiles.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Post Templates</h5>
                                                    <p class="card-text">Create templates for social media posts.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Ad Graphics</h5>
                                                    <p class="card-text">Design graphics for social media ads.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab025" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Print Ads</h5>
                                                    <p class="card-text">Design ads for magazines, newspapers, and flyers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Digital Ads</h5>
                                                    <p class="card-text">Create ads for online platforms.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Billboard Ads</h5>
                                                    <p class="card-text">Design large-scale ads for billboards.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Banner Ads</h5>
                                                    <p class="card-text">Develop banner ads for websites.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Video Ads</h5>
                                                    <p class="card-text">Produce engaging video advertisements.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Print Ads</h5>
                                                    <p class="card-text">Design ads for magazines, newspapers, and flyers.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Digital Ads</h5>
                                                    <p class="card-text">Create ads for online platforms.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Billboard Ads</h5>
                                                    <p class="card-text">Design large-scale ads for billboards.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab026" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Product Boxes</h5>
                                                    <p class="card-text">Create designs for product packaging.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Labels</h5>
                                                    <p class="card-text">Design labels for products.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Inserts</h5>
                                                    <p class="card-text">Develop inserts for packaging.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Prototypes</h5>
                                                    <p class="card-text">Create prototypes of packaging designs.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Sustainable Packaging</h5>
                                                    <p class="card-text">Design eco-friendly packaging options.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Product Boxes</h5>
                                                    <p class="card-text">Create designs for product packaging.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Labels</h5>
                                                    <p class="card-text">Design labels for products.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Inserts</h5>
                                                    <p class="card-text">Develop inserts for packaging.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab027" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Layout Design</h5>
                                                    <p class="card-text">Design the layout of the business card.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Creation</h5>
                                                    <p class="card-text">Include relevant information and branding.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Printing</h5>
                                                    <p class="card-text">Coordinate the printing process.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Special Finishes</h5>
                                                    <p class="card-text">Add finishes like embossing or foil.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Digital Business Cards</h5>
                                                    <p class="card-text">Create digital versions for online sharing.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Layout Design</h5>
                                                    <p class="card-text">Design the layout of the business card.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Content Creation</h5>
                                                    <p class="card-text">Include relevant information and branding.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Printing</h5>
                                                    <p class="card-text">Coordinate the printing process.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- TAB 5 --}}
            <div class="content sliderMainContent">
                <div id="tab05" class="payment_mode">
                    <div class="card_title">
                        <h3>Software & Apps</h3>
                        <p>Software is a great combination of artistry and engineering.</p>
                    </div>
                    <div class="card_mode box-container">
                        <ul class="tab_nav">
                            <li class="show button_mode" data-tab="tab031">Custom Software Development</li>
                            <li class="button_mode" data-tab="tab032">Mobile App Development</li>
                            <li class="button_mode" data-tab="tab033">Web App Development</li>
                            <li class="button_mode" data-tab="tab034">E-Commerce Solutions</li>
                            <li class="button_mode" data-tab="tab035">API Integration</li>
                            <li class="button_mode" data-tab="tab036">Software Maintenance</li>
                            <li class="button_mode" data-tab="tab037">Cloud Solutions</li>
                        </ul>
                    </div>
                    <div class="contents">
                        <div id="tab031" class="show box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Requirement Analysis</h5>
                                                    <p class="card-text">Gather and analyze business requirements.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">System Design</h5>
                                                    <p class="card-text">Design the architecture of the software.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Development</h5>
                                                    <p class="card-text">Write and test the software code.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Deployment</h5>
                                                    <p class="card-text">Implement the software in the business environment.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Maintenance</h5>
                                                    <p class="card-text">Provide ongoing support and updates.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Requirement Analysis</h5>
                                                    <p class="card-text">Gather and analyze business requirements.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">System Design</h5>
                                                    <p class="card-text">Design the architecture of the software.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Development</h5>
                                                    <p class="card-text">Write and test the software code.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab032" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">iOS Development</h5>
                                                    <p class="card-text">Create apps for Apple's iOS platform.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Android Development</h5>
                                                    <p class="card-text">Develop apps for the Android platform.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cross-Platform Apps</h5>
                                                    <p class="card-text">Build apps that work on multiple platforms.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">UI/UX Design</h5>
                                                    <p class="card-text">Design intuitive interfaces for mobile apps.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">App Testing</h5>
                                                    <p class="card-text">Test apps for functionality and performance.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">iOS Development</h5>
                                                    <p class="card-text">Create apps for Apple's iOS platform.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Android Development</h5>
                                                    <p class="card-text">Develop apps for the Android platform.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cross-Platform Apps</h5>
                                                    <p class="card-text">Build apps that work on multiple platforms.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab033" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Front-End Development</h5>
                                                    <p class="card-text">Build the client-side of web applications.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Back-End Development</h5>
                                                    <p class="card-text">Develop server-side functionality.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Database Integration</h5>
                                                    <p class="card-text">Integrate databases for data storage.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">API Integration</h5>
                                                    <p class="card-text">Connect web apps with third-party APIs.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Security</h5>
                                                    <p class="card-text">Implement security measures for web apps.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Front-End Development</h5>
                                                    <p class="card-text">Build the client-side of web applications.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Back-End Development</h5>
                                                    <p class="card-text">Develop server-side functionality.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Database Integration</h5>
                                                    <p class="card-text">Integrate databases for data storage.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab034" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Platform Selection</h5>
                                                    <p class="card-text">Choose the right e-commerce platform.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Store Design</h5>
                                                    <p class="card-text">Design the layout and functionality of the store.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Payment Gateway Integration</h5>
                                                    <p class="card-text">Integrate secure payment gateways.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Inventory Management</h5>
                                                    <p class="card-text">Implement systems for managing inventory.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Order Processing</h5>
                                                    <p class="card-text">Develop efficient order processing systems.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Platform Selection</h5>
                                                    <p class="card-text">Choose the right e-commerce platform.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Store Design</h5>
                                                    <p class="card-text">Design the layout and functionality of the store.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Payment Gateway Integration</h5>
                                                    <p class="card-text">Integrate secure payment gateways.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab035" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Third-Party Services</h5>
                                                    <p class="card-text">Connect with external services through APIs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Custom API Development</h5>
                                                    <p class="card-text">Develop custom APIs for specific needs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">API Documentation</h5>
                                                    <p class="card-text">Create comprehensive documentation for APIs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">API Testing</h5>
                                                    <p class="card-text">Test APIs for functionality and security.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Monitoring & Maintenance</h5>
                                                    <p class="card-text">Monitor and maintain API integrations.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Third-Party Services</h5>
                                                    <p class="card-text">Connect with external services through APIs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Custom API Development</h5>
                                                    <p class="card-text">Develop custom APIs for specific needs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">API Documentation</h5>
                                                    <p class="card-text">Create comprehensive documentation for APIs.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab036" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Bug Fixing</h5>
                                                    <p class="card-text">Identify and fix software bugs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Performance Optimization</h5>
                                                    <p class="card-text">Improve the performance of software.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Security Updates</h5>
                                                    <p class="card-text">Implement security patches and updates.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Feature Enhancements</h5>
                                                    <p class="card-text">Add new features to existing software.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">User Support</h5>
                                                    <p class="card-text">Provide support to software users.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Bug Fixing</h5>
                                                    <p class="card-text">Identify and fix software bugs.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Performance Optimization</h5>
                                                    <p class="card-text">Improve the performance of software.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Security Updates</h5>
                                                    <p class="card-text">Implement security patches and updates.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                        <div id="tab037" class="box_tab">

                            {{-- SLIDER 1 --}}

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Migration</h5>
                                                    <p class="card-text">Move existing systems to the cloud.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Storage</h5>
                                                    <p class="card-text">Implement cloud-based storage solutions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Security</h5>
                                                    <p class="card-text">Ensure cloud systems are secure.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Applications</h5>
                                                    <p class="card-text">Develop applications that run on the cloud.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="cards-wrapper row">
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Scalability</h5>
                                                    <p class="card-text">Ensure systems can scale with business growth.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Migration</h5>
                                                    <p class="card-text">Move existing systems to the cloud.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Storage</h5>
                                                    <p class="card-text">Implement cloud-based storage solutions.</p>

                                                </div>
                                            </div>
                                            <div class="card col-md-3">

                                                <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10"
                                                    h="10" />
                                                <div class="card-body">
                                                    <h5 class="card-title">Cloud Security</h5>
                                                    <p class="card-text">Ensure cloud systems are secure.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- SLIDER 1 ENDS --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- components for pratice codeing -->
    <div class="gap " style="background-image: url(/assets/backgd.jpg);">
        <div class="container">
            <div class="code_assessment">
                <div class="code_assessment_box">
                    <div class="page_title">practice codeing & ace hireing assessments</div>
                    <p class="code_assessment_headline">level up your coding skills by practicing the hieing assessments
                        of
                        your companies and ace your placement game!
                    <p>
                </div>
                <a href=" " class="view_more">view more &#8599;</a>
            </div>
            <div class="code_assessment_details">
                <div class="code_assessment_details_box code_assessment_details_box_active" id="box_1">
                    <img src="/assets/coding.jpeg" w="10" h="10" alt="logo" style="background: #c8e5f2;">
                    <h4>code practice</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring
                        question</p>
                    <p>500+ questions &nbsp;&nbsp;&gt;</p>
                </div>
                <div class="code_assessment_details_box" id="box_2">
                    <img src="/assets/interview.png" w="10" h="10" alt="logo" style="background: #f6def8;">
                    <h4>Interview preparation</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring
                        question</p>
                    <p>200+ companies &nbsp;&nbsp;&gt;</p>
                </div>
                <div class="code_assessment_details_box" id="box_3">
                    <img src="/assets/projects.png" w="10" h="10" alt="logo" style="background: #ccacf5;">
                    <h4>projects</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring
                        question</p>
                    <p>50+ projects &nbsp;&nbsp;&gt;</p>
                </div>
                <div class="code_assessment_details_box" id="box_4">
                    <img src="/assets/skills.jpeg" w="10" h="10" alt="logo" style="background: #fbdf98;">
                    <h4>skill assessments</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring
                        question</p>
                    <p>500+ questions &nbsp;&nbsp;&gt;</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Components for learn and level up -->
    <div class="gap">
        <div class="level_up_container container">
            <img src="/assets/Group-807.png" w="150" h="150" alt="logo" />
            <div class="right_container_text">
                <div class="level_up_title">Start your journey to <span style="color: rgb(22, 103, 208);">digital
                        success!<span>
                </div>
                <p class="level_up_headlne">Unlock your digital potential today and soar above the competition! Let's
                    revolutionize your brand together.</p>
                <ul class="level_up_category">
                    <ol><span style="color:rgb(22, 103, 208);">&#9733;</span> 50+ Cities</ol>
                    <ol><span style="color:rgb(22, 103, 208);">&#9733;</span> 5+ Countries</ol>
                    <ol><span style="color:rgb(22, 103, 208);">&#9733;</span> 3200+ Clients</ol>
                </ul>
                <a href="#" class="explore_courses">Start Digital Journey ↗</a>
            </div>
        </div>
    </div>
    <!-- Components for job/internship -->
    <div class="gap" style="background: linear-gradient(to right, #f9f8ef, #faf4ff); !important; padding:60px">
        <div class="container">

            @livewire('sample-web-design')
        </div>
    </div>


    <!-- Components for company logo -->
    <div class="gap" style="background-image: url('/assets/news-left-vector.webp');">
        <div class="container">
            <div class="company_banner">
                <div>
                    <div class="company_title"><span style="font-weight:100">Our</span> <br>Clientele </div>
                    <div class="company_headline">Companies who trust us </div>
                    <a href="" class="contact_button">Contact Us</a>
                </div>
                <div id="image-container">
                    <div id="image-wrapper">
                        <img src="/assets/company_logo.png" w="100" h="" alt="100" />
                        <img src="/assets/company_logo.png" w="100" h="" alt="100" />
                        <img src="/assets/company_logo.png" w="100" h="" alt="100" />
                        <img src="/assets/company_logo.png" w="100" h="" alt="100" />
                        <img src="/assets/company_logo.png" w="100" h="" alt="100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="company_bottom_text">
            <h2>our Numbers</h2>
            <div class="company_user_data">
                <div>9 <span style="color: #0d6efd">K+</span><br><span style="font-size: 16px;">Active Users</span>
                </div>
                <div>22.5 <span style="color: #0d6efd">M+</span><br><span style="font-size: 16px;">Assessments</span>
                </div>
                <div>120 <span style="color: #0d6efd">K+</span><br><span style="font-size: 16px;">Opportunities</span>
                </div>
                <div>900 <span style="color: #0d6efd">+</span><br><span style="font-size: 16px;">brands trust us</span>
                </div>
                <div>23 <span style="color: #0d6efd">M+</span><br><span style="font-size: 16px;">organisations</span>
                </div>
                <div>12.4 <span style="color: #0d6efd">K+</span><br><span style="font-size: 16px;">Countries</span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {


            $(".code_assessment_details_box").mouseover(function() {
                $(".code_assessment_details_box:nth-child(1)").addClass("remove-styles");
            });

            $(".code_assessment_details_box").hover(function() {
                // Get the id of the hovered element
                var id = $(this).attr("id");
                $('.code_assessment_details_box').css("background-color", "");
                $(".code_assessment_details_box").removeClass("code_assessment_details_box_active");
                $(this).addClass("code_assessment_details_box_active");

                var backgroundColor;
                switch (id) {
                    case "box_1":
                        backgroundColor = "#f29900";
                        break;
                    case "box_2":
                        backgroundColor = "#1e8e3e";
                        break;
                    case "box_3":
                        backgroundColor = "#1667d0";
                        break;
                    case "box_4":
                        backgroundColor = "#c7241d";
                        break;
                    default:
                        backgroundColor = ""; // Default background color
                }
                console.log(backgroundColor, id);
                // Set the background color of the hovered element
                $(this).css("background-color", backgroundColor);
            });
        });
    </script>
@endsection
