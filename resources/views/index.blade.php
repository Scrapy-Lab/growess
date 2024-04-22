@extends('layouts.app')
@section('content')
<!-- Components for Banner -->
        <div class="mid_banner">
            <div class="left_banner_text">
                <div><span style="color:rgb(25 123 255);font-size:46px;font-weight:500 !important;line-height:28px">Compare</span><span style="font-size:46px;font-weight:500 !important;line-height:28px"> &#38;</span> <span style="color:rgb(1 206 135);font-size:46px;font-weight:500 !important;line-height:28px">Choose the </span>Best Health</div>
                <div class="slidingVertical">
                    <span>Insurance Plan</span>
                    <span>Beautiful</span>
                    <span>Cute</span>
                    <span>Delightful</span>
                    <span>Emotional</span>
                </div>
            </div>
            <img src="/assets/banner-img-1.png" w="100" h="" alt="100"/>
        </div>
<!-- Components for button boxes  -->
        <div class="Button_box">
            <div class="box_1">
                <img src="/assets/200.webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Website</div>
                <p class="box_headline">get instant quote</p>
                <button id="openOuterPopupBtn" onclick="openOuterPopup()"style="background: #1786f4">Click here</button>
                <div id="outerPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-btn" onclick="closeOuterPopup()">&times;</span>
                        <button class="button" id="openInnerPopupBtn" onclick="openInnerPopup()">Landing page website</button>
                        <div id="innerPopup" class="popup">
                            <div class="popup-content">
                                <span class="close-btn" onclick="closeInnerPopup()">&times;</span>
                                <div class="checkbox-container">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="domainCheckbox" name="domainCheckbox">
                                        <label for="domainCheckbox">Domain &#120102;</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="hostingCheckbox" name="hostingCheckbox">
                                        <label for="hostingCheckbox">Hosting &#120102;</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="webpageCheckbox" name="webpageCheckbox">
                                        <label for="webpageCheckbox">Webpage Section</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="emailsCheckbox" name="emailsCheckbox">
                                        <label for="emailsCheckbox">Emails</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="button">shopping website</button>
                        <button class="button">Dynamic website</button>
                        <button class="button">Static website</button>
                    </div>
                </div>
            </div>
            <div class="box_1">
                <img src="/assets/giphy (2).webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Lead Generation</div>
                <p class="box_headline">get instant quote</p>
                <button id="openOuterPopupBtn" onclick="openOuterPopup()"style="background: #e31b09">Click here</button>
                <div id="outerPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-btn" onclick="closeOuterPopup()">&times;</span>
                        <button class="button" id="openInnerPopupBtn" onclick="openInnerPopup()">Landing page website</button>
                        <div id="innerPopup" class="popup">
                            <div class="popup-content">
                                <span class="close-btn" onclick="closeInnerPopup()">&times;</span>
                                <p>This is the inner popup!</p>
                            </div>
                        </div>
                        <button class="button">Landing page website</button>
                        <button class="button">Dynamic website</button>
                        <button class="button">Static website</button>
                    </div>
                </div>
            </div>
            <div class="box_1">
                <img src="/assets/giphy (1).webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Digital Marketing</div>
                <p class="box_headline">get instant quote</p>
                <button id="openOuterPopupBtn" onclick="openOuterPopup()"style="background: #f49317">Click here</button>
                <div id="outerPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-btn" onclick="closeOuterPopup()">&times;</span>
                        <button class="button" id="openInnerPopupBtn" onclick="openInnerPopup()">Landing page website</button>
                        <div id="innerPopup" class="popup">
                            <div class="popup-content">
                                <span class="close-btn" onclick="closeInnerPopup()">&times;</span>
                                <p>This is the inner popup!</p>
                            </div>
                        </div>
                        <button class="button">Landing page website</button>
                        <button class="button">Static website</button>
                        <button class="button">shopping website</button>
                    </div>
                </div>
            </div>
            <div class="box_1">
                <img src="/assets/giphy.webp" alt="My Logo" w="10" h="10" />
                <div class="box_title">Software & Apps</div>
                <p class="box_headline">get instant quote</p>
                <button id="openOuterPopupBtn" onclick="openOuterPopup()"style="background: #288d0c">Click here</button>
                <div id="outerPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-btn" onclick="closeOuterPopup()">&times;</span>
                        <button class="button" id="openInnerPopupBtn" onclick="openInnerPopup()">Landing page website</button>
                        <div id="innerPopup" class="popup">
                            <div class="popup-content">
                                <span class="close-btn" onclick="closeInnerPopup()">&times;</span>
                                <p>This is the inner popup!</p>
                            </div>
                        </div>
                        <button class="button">Static website</button>
                        <button class="button">Dynamic website</button>
                        <button class="button">shopping website</button>
                    </div>
                </div>
            </div>
        </div>
<!-- Toggle button -->
        <div class="switches-container">
            <input type="radio" id="switchMonthly" name="switchPlan" value="Google Ad Preview" checked="checked" onclick="toggleContainers()"/>
            <input type="radio" id="switchYearly" name="switchPlan" value="Meta Ad Preview" onclick="toggleContainers()"/>
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
                <p class="google_headline">Google Ads gives you many ways to be seen</p>
                <div class="list_card ">
                    <div class="menu_bar">
                        <div class="menuAds tablinks active" onclick="tab(event, 'tab1')">
                            <img src="/assets/search.png" w="5" h="5" alt="logo"/>
                            <span>Search</span>
                        </div>
                        <div class="menuAds tablinks" onclick="tab(event, 'tab2')">
                            <img src="/assets/display.png" w="5" h="5" alt="logo"/>
                            <span>Display</span>
                        </div>
                        <div class="menuAds tablinks" onclick="tab(event, 'tab3')">
                            <img src="/assets/shopping.png" w="5" h="5" alt="logo"/>
                                <span>Shopping</span>
                        </div>
                        <div class="menuAds tablinks" onclick="tab(event, 'tab4')">
                            <img src="/assets/video.png" w="5" h="5" alt="logo"/>
                                <span>Video</span>
                        </div>
                        <div class="menuAds tablinks" onclick="tab(event, 'tab5')">
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
                        <div class="icon_wrapper">
                            <a href=" " target=_blank class="icon_wrapper">
                                <img src="/assets/10009356.png" w="10" h="10" alt="logo"/>
                                <span>Explore Search Ads</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="container2" style="display: none;" >
            <h2>What types of ads can you run on instagram?</h2>
            <p class="intagram_headline">Instagrams offers inspiring and seamless ways to tell your story.No matter what types of business you are.
                there's anad format that can help you <span styles="color:blues">reach your marketing goals.</span>
            <div class="instagram_container">
                <img src="/assets/twitter.jpeg" w="100" h="" alt="100"/>
                <div class="right_container">
                    <div id="myDiv1" class="active photo_ads" onclick="toggleActive('myDiv1')">
                        <div class="photo_ads_title">Photos ads</div>
                        <p class="photo_ads_headline">tell your story through a clean,sample and beautiful creative canvas.photos can be square,landscape and portriot.</p>
                    </div>
                    <div class="photo_ads" id="myDiv2" onclick="toggleActive('myDiv2')">
                        <div class="photo_ads_title">Video ads</div>
                        <p class="photo_ads_headline">tell your story through a clean,sample and beautiful creative canvas.photos can be square,landscape and portriot.</p>
                    </div>
                </div>
            </div>
        </div>
<!-- Components for payment section -->
        <div class="payment_card_section">
            <div class="page_title">the all in one <span style="color: rgb(1, 178, 86)">finance platform</span><br> you've been looking for </div>
            <nav>
                <ul>
                    <li>With Razorpay, you can:</li>
                    <li><div>accept payments</div></li>
                    <li><div>make payments</div></li>
                    <li><div>Start business banking</div></li>
                    <li><div>automate payroll</div></li>
                    <li><div>get credits & loans</div></li>
                </ul>
            </nav>
        </div>
        <div class="payment_mode">
            <div class="card_title">accepts payment</div>
                <div class="card_mode box-container">
                    <ul class="tab_nav">
                        <li class="show button_mode" data-tab="tab01">top products</li>
                        <li class="button_mode" data-tab="tab02">on website/app</li>
                        <li class="button_mode" data-tab="tab03">plugins</li>
                        <li class="button_mode" data-tab="tab04">on social media</li>
                        <li class="button_mode" data-tab="tab05">in-store</li>
                        <li class="button_mode" data-tab="tab06">international</li>
                        <li class="button_mode" data-tab="tab07">with smart add-ons</li> 
                    </ul>
                </div>
                <div class="contents">
                    <div id="tab01" class="show box_tab">
                        <div class="card_box1">
                            <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab02" class="box_tab">
                        <div class="card_box1">
                            <img src="/assets/product-card-pg-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab03" class="box_tab">
                        <div class="card_box1">
                            <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab04" class="box_tab">
                        <div class="card_box1">
                            <img src="/assets/payment-pages-product-img-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab05" class="box_tab">
                        <div class="card_box1">
                            <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab06" class="box_tab">
                        <div class="card_box1">
                            <img src="/assets/payment-pages-product-img-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab07" class="box_tab">
                        <div class="card_box1">
                            <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                            <div class="">payment gateway</div>
                                <p class="">Offer a seamless payment experience on your website or app</p>
                            <div class="">
                                <div class="">sign up</div>
                                <div class="">know more </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Components for learn and level up -->
        <div class="level_up_container" style="display: flex;gap: 80px;align-items: center;background: #ffff0033;border-radius: 60px;">
            <img src="/assets/upskills.jpeg" w="150" h="150" alt="logo"/>
            <div class="right_container_text">
                <div class="level_up_title">Learn & <span style="color: #283299;opacity: .7;">Level up your skills<span></div>
                <p class="level_up_headlne">slect from a wide range of courses to upskills and advance your carrier !</p>
                <ul class="level_up_category">
                    <ol>&#11088; 50+ courses</ol>
                    <ol>&#11088; Certificates</ol>
                    <ol>&#11088; Projects & Assignments</ol>
                </ul>
                <a href="#" class="explore_courses">Explore Courses ↗</a>
            </div>
        </div>
        
@endsection
