@extends('layouts.app')
@section('content')
    <!-- Components for Banner -->
    @livewire('home-banner')
    <!-- Components for button boxes  -->
    @livewire('service')
        <!-- Toggle button -->
        <div class="gap" style="background: linear-gradient(to right, #eee5ad , #bf86f4); !important">
            <div class="container">
                <div class="page_title">Get <span style="color:red">100% </span>Qualified Lead through<br>our <span style="color:green">certified partners </span></div>
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
                                    <span class="fa fa-search" style="font-size:20px">&nbsp;Search</span>
                                </div>
                                <div class="menuAds tablinks" onclick="tab(event, 'tab2')">
                                    <span class=" fa fa-desktop" style="font-size:20px">&nbsp; Display</span>
                                   
                                </div>
                                <div class="menuAds tablinks" onclick="tab(event, 'tab3')">
                                    <span class="fa fa-shopping-cart" style="font-size:20px">&nbsp;Shopping</span>
                                   
                                </div>
                                <div class="menuAds tablinks" onclick="tab(event, 'tab4')">
                                    <span class="fa fa-play-circle-o" style="font-size:20px">&nbsp; Video</span>
                                </div>
                                <div class="menuAds tablinks" onclick="tab(event, 'tab5')">
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
                                    <img src="/assets/display.webp" w="10" h="10" alt="" />
                                </section>
                            </div>
                            <div class="tab-name" id="tab3" style="display:none">
                                <section class="grid">
                                    <img src="/assets/shopping_1.webp" w="10" h="10" alt="" />
                                </section>
                            </div>
                            <div class="tab-name" id="tab4" style="display:none">
                                <section class="grid">
                                    <img src="/assets/youtube.webp" w="10" h="10" alt="" />
                                </section>
                            </div>
                            <div class="tab-name" id="tab5" style="display:none">
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
                    <h2>What types of ads can you run on instagram?</h2>
                    <p class="intagram_headline">Instagrams offers inspiring and seamless ways to tell your story.No matter what
                        types
                        of business you are.
                        there's anad format that can help you <span styles="color:blues">reach your marketing goals.</span>
                    <div class="instagram_container">
                        <img src="/assets/twitter.jpeg" w="100" h="" alt="100" />
                        <div class="right_container">
                            <div id="myDiv1" class="active photo_ads" onclick="toggleActive('myDiv1')">
                                <div class="photo_ads_title">Photos ads</div>
                                <p class="photo_ads_headline">tell your story through a clean,sample and beautiful creative
                                    canvas.photos can be square,landscape and portriot.</p>
                            </div>
                            <div class="photo_ads" id="myDiv2" onclick="toggleActive('myDiv2')">
                                <div class="photo_ads_title">Video ads</div>
                                <p class="photo_ads_headline">tell your story through a clean,sample and beautiful creative
                                    canvas.photos can be square,landscape and portriot.</p>
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
                    <div class="page_title">the all in one <span style="color: rgb(1, 178, 86)">Digital Marketing</span><br> you've
                        been looking for </div>
                    <nav>
                        <ul>
                            <li>We Provide Complete:</li>
                            <li>
                                <div style="background: #fbd9dc;color: #d44927;">Digital Marketing</div>
                            </li>
                            <li>
                                <div style="background: #c8edc5;color: #42ab1e;">Web Designs</div>
                            </li>
                            <li>
                                <div style="background: #f6ce9b;color: #e99d47;">Lead Generation</div>
                            </li>
                            <li>
                                <div style="background: #b6f9f7;color: #0db8d6;">Graphics Designs</div>
                            </li>
                            <li>
                                <div style="background: #dfb0ed;color: #b12de9;">Software & Apps</div>
                            </li>
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
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab02" class="box_tab">
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/product-card-pg-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pg-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pg-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab03" class="box_tab">
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab04" class="box_tab">
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/payment-pages-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-pages-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab05" class="box_tab">
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab06" class="box_tab">
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/payment-pages-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab07" class="box_tab">
                            <div class="card_box_multiple">
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/product-card-pos-image-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href="" class="card_sign-up">sign up &#8594;</a>
                                        <a href="" class="card_know-more">know more </a>
                                    </div>
                                </div>
                                <div class="card_box1">
                                    <img src="/assets/payment-link-product-img-2x.png" alt="My Logo" w="10" h="10" />
                                    <div class="card_payment-title">payment gateway</div>
                                    <p class="card_payment-headline">Offer a seamless payment experience on your website or app</p>
                                    <div class="card_payment-details">
                                        <a href=" " class="card_sign-up">sign up &#8594;</a>
                                        <a href=" " class="card_know-more">know more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Components for learn and level up -->
        <div class="gap" style="background-image: url('/assets/depositpho.jpg');">
            <div class="level_up_container container">
                <img src="/assets/upskills.jpeg" w="150" h="150" alt="logo" />
                <div class="right_container_text">
                    <div class="level_up_title">Learn & <span style="color: #283299;opacity: .7;">Level up your skills<span>
                    </div>
                    <p class="level_up_headlne">slect from a wide range of courses to upskills and advance your carrier !</p>
                    <ul class="level_up_category">
                        <ol>&#11088; 50+ courses</ol>
                        <ol>&#11088; Certificates</ol>
                        <ol>&#11088; Projects & Assignments</ol>
                    </ul>
                    <a href="#" class="explore_courses">Explore Courses ↗</a>
                </div>
            </div>
        </div>
        <!-- components for pratice codeing -->
        <div class="gap container">
            <div class="code_assessment">
                <div class="code_assessment_box">
                    <div class="page_title">practice codeing & ace hireing assessments</div>
                    <p class="code_assessment_headline">level up your coding skills by practicing the hieing assessments of your companies and ace your placement game!<p>
                </div>
                <a href=" " class="view_more" >view more &#8599;</a>
            </div> 
            <div class="code_assessment_details">
                <div class="code_assessment_details_box">
                    <img src="/assets/coding.jpeg" w="10" h="10" alt="logo" style="background: #c8e5f2;">
                    <h4>code practice</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring question</p>
                    <p>500+ questions &nbsp;&nbsp;&gt;</p>
                </div>
                <div class="code_assessment_details_box">
                    <img src="/assets/interview.png" w="10" h="10" alt="logo" style="background: #f6def8;">
                    <h4>Interview preparation</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring question</p>
                    <p>200+ companies &nbsp;&nbsp;&gt;</p>
                </div>
                <div class="code_assessment_details_box">
                    <img src="/assets/projects.png" w="10" h="10" alt="logo" style="background: #ccacf5;">
                    <h4>projects</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring question</p>
                    <p>50+ projects &nbsp;&nbsp;&gt;</p>
                </div>
                <div class="code_assessment_details_box">
                    <img src="/assets/skills.jpeg" w="10" h="10" alt="logo" style="background: #fbdf98;">
                    <h4>skill assessments</h4>
                    <p class="code_assessment_details_box_description">let us our coding skills by practicing the hiring question</p>
                    <p>500+ questions &nbsp;&nbsp;&gt;</p>
                </div>
            </div>
            <div class="code_assessment_job">
                <div>
                    <div class="code_assessment_job_details"><span style="color:#0862ab">browse job/internship</span> <br>that's right for you !</div>
                    <p class="code_assessment_job_details_description">find a role that fits your carrier aspirators.</p>
                    <div class="code_assessment_job_details_box-container">
                        <ul class="tab_box">
                            <li class="select select_mode fa fa-search" data-tab="tab01">&nbsp;find job</li>
                            <li class="select_mode" data-tab="tab02">&nbsp;full-time</li>
                            <li class="select_mode" data-tab="tab03">&nbsp;part-time</li>
                            <li class="select_mode fa fa-home " data-tab="tab04">&nbsp;work from home</li>
                            <li class="select_mode" data-tab="tab05">&nbsp;on-field</li>
                        </ul>
                    </div>
                </div>
                <div class="code_assessment_job_details_box">
                    <div class="job_details">
                        <h4>jobs</h4>
                        <img src="/assets/amazone.png" w="10" h="10" alt="logo">
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
                <div class="code_assessment_job_details_box">
                    <div class="job_details">
                        <h4>jobs</h4>
                        <img src="/assets/amazone.png" w="10" h="10" alt="logo">
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
            </div>  
        </div>
        <!-- Components for company logo -->
        <div class="gap container">
            <div class="company_banner">
                <div>
                    <div class="company_title"><span style="font-weight:100">Our</span> <br>Clientele </div>
                    <div class="company_headline">Companies who trust us </div>
                    <a href="" class="contact_button">Contact Us</a>
                </div>
                <img src="/assets/company_logo.png" w="100" h="" alt="100"/>
            </div> 
            <div class="company_bottom_text">
                <h2>our Numbers</h2>
                <div class="company_user_data">
                    <div>9 <span style="color: #0d6efd">K+</span><br><span style="font-size: 16px;">Active Users</span></div>
                    <div>22.5 <span style="color: #0d6efd">M+</span><br><span style="font-size: 16px;">Assessments</span></div>
                    <div>120 <span style="color: #0d6efd">K+</span><br><span style="font-size: 16px;">Opportunities</span></div>
                    <div>900 <span style="color: #0d6efd">+</span><br><span style="font-size: 16px;">brands trust us</span></div>
                    <div>23 <span style="color: #0d6efd">M+</span><br><span style="font-size: 16px;">organisations</span></div>
                    <div>12.4 <span style="color: #0d6efd">K+</span><br><span style="font-size: 16px;">Countries</span></div>
                </div>
            </div>
        </div>
        
    @endsection
