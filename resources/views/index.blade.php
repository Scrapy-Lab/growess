@extends('layouts.app')
@section('content')
    <div class="page_layout">
        <div class="mid_banner">
            <div class="left_banner_text">
                <div><span style="color:rgb(25 123 255);font-size:46px;font-weight:500 !important;line-height:28px">Compare</span><span style="font-size:46px;font-weight:500 !important;line-height:28px"> &#38;</span> <span style="color:rgb(1 206 135);font-size:46px;font-weight:500 !important;line-height:28px">Choose the </span>Best Health</div>
                <div class="banner_animated_element">Insurance Plan</div>
            </div>
            <img src="/assets/banner-img-1.png" w="100" h="" alt="100"/>
        </div>

<!-- Components for button boxes  -->
        <div class="Button_box">
            <div class="box_1">
                <img src="/assets/200.webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Website</div>
                <p class="box_headline">get instant quote</p>
                <button style="background: #1786f4">Click here</button>
            </div>
            <div class="box_1">
                <img src="/assets/giphy (2).webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Lead Generation</div>
                <p class="box_headline">get instant quote</p>
                <button style="background: #e31b09">Click here</button>
            </div>
            <div class="box_1">
                <img src="/assets/giphy (1).webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Digital Marketing</div>
                <p class="box_headline">get instant quote</p>
                <button style="background: #f49317">Click here</button>
            </div>
            <div class="box_1">
                <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Software & Apps</div>
                <p class="box_headline">get instant quote</p>
                <button style="background: #288d0c">Click here</button>
            </div>
        </div>
<!-- Components for Google ads  -->
        <div class="google_container">
            <p class="google_headline">Google Ads gives you many ways to be seen</p>
            <div class="list_card">
                <div class="menu-bar">
                    <div class="menu tablinks active" onclick="tab(event, 'tab1')">
                        <img src="/assets/search.png" w="5" h="5" alt="logo"/>
                        <span>Search</span>
                    </div>
                    <div class="menu tablinks" onclick="tab(event, 'tab2')">
                        <img src="/assets/display.png" w="5" h="5" alt="logo"/>
                        <span>Display</span>
                    </div>
                    <div class="menu tablinks" onclick="tab(event, 'tab3')">
                        <img src="/assets/shopping.png" w="5" h="5" alt="logo"/>
                            <span>Shopping</span>
                    </div>
                    <div class="menu tablinks" onclick="tab(event, 'tab4')">
                        <img src="/assets/video.png" w="5" h="5" alt="logo"/>
                            <span>Video</span> 
                    </div>
                    <div class="menu tablinks" onclick="tab(event, 'tab5')">
                        <img src="/assets/app.png" w="5" h="5" alt="logo"/>
                            <span>App</span> 
                    </div>
                </div>
                <div class="tab-name" id="tab1">
                    <section class="grid">
                        <img src="/assets/google.webp" w="10" h="10" alt=""/>
                    </section>
                </div>
                <div class="tab-name" id="tab2" style="display:none">
                    <section class="grid">
                        <img src="/assets/display.webp" w="10" h="10" alt=""/>
                    </section>
                </div>
                <div class="tab-name" id="tab3" style="display:none">
                    <section class="grid">
                        <img src="/assets/shopping_1.webp" w="10" h="10" alt=""/>
                    </section>
                </div>
                <div class="tab-name" id="tab4" style="display:none">
                    <section class="grid">
                        <img src="/assets/youtube.webp" w="10" h="10" alt=""/>
                    </section>
                </div>
                <div class="tab-name" id="tab5" style="display:none">
                    <section class="grid">
                        <img src="/assets/apps.webp" w="10" h="10" alt=""/>
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
                    <div class="icon_container">
                        <a href=" " target=_blank class="icon_wrapper">
                            <img src="/assets/10009356.png" w="10" h="10" alt="logo"/>
                            <span>Explore Search Ads</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
