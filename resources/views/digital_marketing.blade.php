@extends('layouts.app')
@section('content')

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital Marketing</title>

    <link rel="stylesheet" href="digital_marketing/assets/css/aos.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/bootstrap.min.css">

    <!-- Google Font Poppins -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    <!-- Css -->

    <link rel="stylesheet" href="digital_marketing/assets/css/style.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/header.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/style.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/why-choose-us.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/price.css ">

    <link rel="stylesheet" href="digital_marketing/assets/css/faq.css ">

    <link rel="stylesheet" href="digital_marketing/assets/css/cta.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/footer.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/style.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/main-banner.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/services.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/benifits.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/why-choose-us.css">

    <link rel="stylesheet" href="digital_marketing/assets/css/marque.css">

</head>

<body>

{{-- <header class="container-fluid py-3" id="header">

    <span onclick="toggleMenu()" class="close-side-menu"></span>

    <nav class="container-fluid px-0">

        <div class="row justify-content-between">

            <div class="col-5 col-md-2">

                <div class="biz15-logo">

                    <div class="light-logo d-flex align-items-start justify-content-start">

                        <a href="https://biz15.com/"><img data-image-src="assets/images/biz15-logo.png" alt="BIZ15"></a>

                    </div>

                </div>

            </div>

            <div class="col col-md-7 navigations d-flex align-items-center justify-content-center">

                <div class="nav-links close-btn-inner w-100 mb-3 d-flex justify-content-between align-items-center">

                    <a href="https://biz15.com/"><img style="max-width: 150px;" src="assets/images/biz15-logo-f.png" alt="BIZ15"></a>

                    <span class="btn">

                        <svg onclick="toggleMenu()" xmlns="http://www.w3.org/2000/svg" width="32" height="32"

                            viewBox="0 0 24 24">

                            <path fill="currentColor"

                                d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />

                        </svg>

                    </span>

                </div>

                <div class="nav-links drop-down-link">

                    <a href="#">Web Solution</a>

                    <div class="drop-down-btn"></div>

                    <div class="drop-down">

                        <div class="row">

                            <div

                                class="col-12 col-xl-6 px-5 py-4 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a href="https://biz15.com/web-site-designs" class="title">Web & App</a>

                                <a href="http://biz15.com/website-design">Website Design & Development</a>

                                <a href="https://biz15.com/ecommerce-website-design">Ecommerce Website Design</a>

                                <a href="http://biz15.com/app-design-and-development">App Design & Development</a>

                                <a href="https://biz15.com/webs/business-email">Business Email</a>

                                <a href="https://biz15.com/webs/ssl-certificates.html">SSL Certificates</a>

                            </div>

                            <div

                                class="col-12 col-xl-6 px-5 py-4 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a class="title">Domains</a>

                                <a href="https://biz15.com/webs/domain-registeration">Doomain

                                    Registration</a>

                                <a href="https://biz15.com/webs/domain-transferring.html">Domain

                                    Transferring</a>

                                <a href="https://biz15.com/webs/premium-domains">Premium

                                    Domains</a>

                            </div>

                        </div>

                    </div>







                </div>

                <div class="nav-links drop-down-link">

                    <a href="#">Digital Marketing</a>

                    <div class="drop-down-btn"></div>

                    <div class="drop-down">

                        <div class="row">

                            <div

                                class="col-12 px-5 py-4 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a href="https://biz15.com/digital-marketing/search-engine-optimization.html">Search

                                    Engine Optimization</a>

                                <a href="https://biz15.com/digital-marketing/search-engine-marketing.html">Search

                                    Engine Marketing</a>

                                <a href="https://biz15.com/digital-marketing/local-seo.html">Local SEO</a>

                                <a href="https://biz15.com/digital-marketing/social-media-marketing.html">Social

                                    Media Marketing</a>

                                <a href="https://biz15.com/digital-marketing/video-advertising.html">Video

                                    Advertising</a>

                                <a href="https://biz15.com/digital-marketing/display-advertising.html">Display

                                    Advertising</a>

                                <a href="https://biz15.com/digital-marketing/shopping-advertising.html">Shopping

                                    Advertising</a>

                                <a href="https://biz15.com/digital-marketing/business-listings.html">Business Listing</a>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="nav-links drop-down-link">

                    <a href="https://biz15.co/">Bioweb & Tools</a>

                    <div class="drop-down-btn"></div>

                    <div class="drop-down">

                        <div class="row">

                            <div

                                class="col-12 col-xl-6 px-5 py-4 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a href="https://biz15.co/" class="title">Bioweb & Tools</a>

                                <a href="https://biz15.co/biolink-pages">Biolink pages</a>

                                <a href="https://biz15.co/event-links">Event links</a>

                                <a href="https://biz15.co/file-links">File links</a>

                                <a href="https://biz15.co/qr-codes">QR codes</a>

                                <a href="https://biz15.co/static-sites">Static sites</a>

                                <a href="https://biz15.co/shortened-links">Shortened links</a>

                                <a href="https://biz15.co/vcard-links">Vcard links</a>

                                <a href="https://biz15.co/other-tools">Other Tools</a>



                            </div>

                            <div

                                class="col-12 col-xl-6 px-5 py-4 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a href="https://biz15.co/promo-widgets" class="title">Promo Widgets</a>

                                <a href="https://biz15.co/promo-widgets-sign-in">Sign In</a>

                                <a href="https://biz15.co/promo-widgets-sign-up">Sign Up</a>



                                <a href="https://biz15.com/msg/" class="title msg w-100 d-flex mt-3"><img

                                    class="w-100" src="assets/images/biz15-msg.png" alt="Biz15 Msg"></a>

                            <a href="https://biz15.com/msg/dashboard/authenticate/login">SMS & WhatsApp <br> Marketing</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="nav-links drop-down-link">

                    <a href="https://www.themez.store/">THEMEZ</a>

                    <div class="drop-down-btn"></div>

                    <div class="drop-down">

                        <div class="row theme-store-bg">

                            <div

                                class="col-12 px-2 col-xl-6 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a href="#" class="title w-100 theme-img">

                                    <img  class="w-100" data-image-src="assets/images/theme-store-col-1.png" alt="">

                                </a>



                            </div>

                            <div

                                class="col-12 col-xl-6 px-3 py-4 drop-down-items d-flex flex-column align-items-start justify-content-start">

                                <a href="https://www.themez.store/" class="title theme-logo"><img class="w-100"

                                        src="https://www.themez.store/wp-content/uploads/2023/12/logo-light.png"

                                        alt="THEMEZ STORE"></a>

                                <a href="https://www.themez.store/website-templates/">Website Templates</a>

                                <a href="https://www.themez.store/biopage-templates/">Biopage Templates</a>

                                <a href="https://www.themez.store/email-templates/">Email Templates</a>

                                <a href="https://www.themez.store/landing-page-design/">Landing Page Design</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="nav-links w-100 header-share my-5">

                    <h6 class="title fw-bold text-center">Connect Via</h6>

                    <div class="d-flex gap-3 footer-social-icons justify-content-center align-items-center w-100 h-100">

                    <a target="_blank" href="https://www.facebook.com/biz15"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95"/></svg></a>

                    <a target="_blank" href="https://www.twitter.com/biz15digital"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.205 2.25h3.308l-7.227 8.26l8.502 11.24H16.13l-5.214-6.817L4.95 21.75H1.64l7.73-8.835L1.215 2.25H8.04l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg></a>

                    <a target="_blank" href="https://www.instagram.com/biz15digital/"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg></a>

                    <a target="_blank" href="https://in.linkedin.com/company/biz15"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32m-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43m264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z"/></svg></a>

                    </div>

                </div>

            </div>

            <div class="col-7 col-md d-flex justify-content-end align-items-center header-btn">

                <a onclick="togglePopUpForm()" href="#form"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M15.275 12.475L11.525 8.7L14.3 5.95l-.725-.725L8.1 10.7L6.7 9.3l6.875-6.875L15.7 4.55l1.975-1.975l3.75 3.75zM6.75 21H3v-3.75l7.1-7.125l3.775 3.75z"/></svg><span class="px-1">Get Started</span></a>

                <div id="lang-select">

                    <a href="#land"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M4 5h7M9 3v2c0 4.418-2.239 8-5 8"/><path d="M5 9c0 2.144 2.952 3.908 6.7 4m.3 7l4-9l4 9m-.9-2h-6.2"/></g></svg></a>

                    <div id="google_translate_element"></div>


                </div>

                <div class="menu-btn"></div>

            </div>

        </div>

    </nav>

</header> --}}

<script src='https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>


    <main>

        <section id="main-banner" class="container-fluid py-5">

            <div class="container py-5">

                <div class="row py-5 my-5">

                    <div class="col-12 my-auto col-md-10 mx-auto main-title d-flex flex-column justify-content-center align-items-center ">

                        <h1 data-aos="fade-up" data-aos-delay="0" class="text-center text-white">Digital Marketing</h1>

                        <p data-aos="fade-up" data-aos-delay="50" class="text-center mt-3 text-white ">Biz15 digital marketing service is a great way to reach and engage your business's target audience, generate leads and increase sales.</p>

                        <a data-aos="fade-up" data-aos-delay="100" href="#" class="get-started mt-3">Get Started</a>

                    </div>

                </div>

            </div>

            <video class="w-100 h-100 vid-background" autoplay loop muted src="digital_marketing/assets/images/video/digital-marketing.mp4"></video>

        </section>



        <section id="main-intro" class="container my-5 py-5">

            <div class="row py-5">

                <div class="col-12 col-md-9 main-titles text-center d-flex flex-column mx-auto">

                    <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">Boost Your Online Presence</h6>

                    <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Digital Marketing Services</h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="m-0">Biz15 offer a wide range of tactics and strategies, including search engine optimization (SEO), content marketing, email marketing, social media marketing and online advertising. At our digital marketing agency, we provide comprehensive digital marketing services that help businesses reach their target audience and achieve their marketing and sales goals.</p>

                </div>

            </div>

        </section>



        <section id="services" class="my-5 container-fluid overflow-hidden py-5">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">

                        <div data-pos="1"  data-aos="fade-up" data-aos-delay="0" class="service-img-items w-100" id="digital_marketing_image_list">

                            <img src="{{asset('digital_marketing/assets/images/social-media.svg')}}" alt="Digital Marketing Image" class="w-100">

                        </div>

                        <div style="--clr:hsl(231, 50%, 50%);" class="service-content mt-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center align-items-start justify-content-center">

                            <h5  class="service-title text-lg-start">Social Media Marketing</h5>

                            <p  class="text-start service-para ps-3 py-2">Social media Promotion is a cost-effective and powerful way for businesses to reach new customers and increase sales. Connect with our social media marketing agency to optimize your business social media efforts and get more return on your investment.</p>

                        </div>

                    </div>

                    <div class="col-12 col-lg-6 mt-3 mt-lg-0">

                        <div class="row">

                            <div class="col-4 col-md-4 p-lg-3 p-4">

                                <div id="smm_tab"  data-image-url="{{ asset('digital_marketing/assets/images/social-media.svg') }}"  data-clr="hsl(231, 50%, 50%)" style="--clr:hsl(231, 50%, 50%);"  data-aos="fade-up" data-aos-delay="0" class="service-items active py-1 px-1 py-lg-5 px-lg-3 d-flex flex-column justify-content-center align-items-center gap-3 ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M14.5 14.5q.633 0 1.066-.434Q16 13.633 16 13t-.434-1.066q-.433-.434-1.066-.434q-.317 0-.587.128q-.27.128-.488.334l-3.444-1.735q.019-.05.019-.104v-.256q0-.063-.02-.113l3.426-1.716q.217.206.497.334q.28.128.597.128q.633 0 1.066-.434Q16 7.633 16 7t-.434-1.066Q15.133 5.5 14.5 5.5t-1.066.434Q13 6.367 13 7v.123q0 .054.02.123L9.593 8.962q-.217-.206-.497-.334Q8.817 8.5 8.5 8.5q-.633 0-1.066.434Q7 9.367 7 10t.434 1.066q.433.434 1.066.434q.317 0 .597-.137q.28-.138.497-.344l3.425 1.735q-.019.07-.019.123V13q0 .633.434 1.066q.433.434 1.066.434M6.077 17l-1.704 1.704q-.379.379-.876.174Q3 18.673 3 18.133V4.615q0-.69.463-1.152Q3.925 3 4.615 3h14.77q.69 0 1.152.463q.463.462.463 1.152v10.77q0 .69-.462 1.153q-.463.462-1.153.462zm-.427-1h13.735q.23 0 .423-.192q.192-.193.192-.423V4.615q0-.23-.192-.423Q19.615 4 19.385 4H4.615q-.23 0-.423.192Q4 4.385 4 4.615v13.03zM4 16V4z"/></svg>

                                    <h6 class="text-center d-none d-lg-block">Social Media Marketing</h6>

                                    <p class="d-none">Social media Promotion is a cost-effective and powerful way for businesses to reach new customers and increase sales. Connect with our social media marketing agency to optimize your business social media efforts and get more return on your investment.</p>

                                </div>

                            </div>

                            <div class="col-4 col-md-4 p-lg-3 p-4">

                                <div id="video_tab" data-image-url="{{ asset('digital_marketing/assets/images/video-ad.svg') }}" data-clr="hsl(118, 42%, 45%)" style="--clr:hsl(118, 42%, 45%);"  data-aos="fade-up" data-aos-delay="0" class="service-items py-1 px-1 py-lg-5 px-lg-3 d-flex flex-column justify-content-center align-items-center gap-3 ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m11.03 13.923l3.67-2.361q.315-.204.315-.562t-.315-.562l-3.67-2.361q-.326-.229-.678-.04q-.352.188-.352.596v4.734q0 .408.352.596q.352.189.679-.04M4.615 18q-.69 0-1.152-.462Q3 17.075 3 16.385V5.615q0-.69.463-1.152Q3.925 4 4.615 4h14.77q.69 0 1.152.463q.463.462.463 1.152v10.77q0 .69-.462 1.152q-.463.463-1.153.463H15v1.192q0 .348-.23.578q-.23.23-.578.23H9.808q-.348 0-.578-.23q-.23-.23-.23-.578V18zm0-1h14.77q.23 0 .423-.192q.192-.193.192-.423V5.615q0-.23-.192-.423Q19.615 5 19.385 5H4.615q-.23 0-.423.192Q4 5.385 4 5.615v10.77q0 .23.192.423q.193.192.423.192M4 17V5z"/></svg>

                                    <h6 class="text-center d-none d-lg-block">Video Advertising</h6>

                                    <p class="d-none">Our video advertising service can help you take advantage of this trend and reach your audience in a Large way.</p>

                                </div>

                            </div>

                            <div class="col-4 col-md-4 p-lg-3 p-4">

                                <div id="seo_tab" data-image-url="{{ asset('digital_marketing/assets/images/seo.svg') }}" data-image-width="560" data-clr="hsl(258, 42%, 45%)" style="--clr:hsl(258, 42%, 45%);"  data-aos="fade-up" data-aos-delay="0" class="service-items py-1 px-1 py-lg-5 px-lg-3 d-flex flex-column justify-content-center align-items-center gap-3 ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8 3a7 7 0 0 0 0 14h1.07a7.06 7.06 0 0 1 0-2H8A5 5 0 0 1 8 5h8a5 5 0 0 1 4.9 6a7.021 7.021 0 0 1 1.426 2A7 7 0 0 0 16 3zm8 10a3 3 0 1 0 0 6a3 3 0 0 0 0-6m-5 3a5 5 0 1 1 9.172 2.757l2.535 2.536l-1.414 1.414l-2.536-2.535A5 5 0 0 1 11 16"/></svg>

                                    <h6 class="text-center d-none d-lg-block">Search Engine Optimization</h6>

                                    <p class="d-none">Biz15 offers SEO services that help your website and its content rank higher on search engines. Our team of experts will analyze your website and make several changes to improve its Relevance and Ranking.</p>

                                </div>

                            </div>

                            <div class="col-4 col-md-4 p-lg-3 p-4">

                                <div  id="sem_tab"  data-image-url="{{ asset('digital_marketing/assets/images/sem.svg') }}" data-clr="hsl(0, 42%, 45%)" style="--clr:hsl(0, 42%, 45%);"  data-aos="fade-up" data-aos-delay="0" class="service-items py-1 px-1 py-lg-5 px-lg-3 d-flex flex-column justify-content-center align-items-center gap-3 ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M14.25 2.1a1.25 1.25 0 0 0-1.17-.1L6.91 4.43a1.22 1.22 0 0 1-.46.09H2.5a1.25 1.25 0 0 0-1.25 1.25v.1H0v3h1.25V9a1.25 1.25 0 0 0 1.25 1.22L4 13.4a1.26 1.26 0 0 0 1.13.72h.63A1.25 1.25 0 0 0 7 12.87v-2.53l6.08 2.43a1.27 1.27 0 0 0 .47.09a1.29 1.29 0 0 0 .7-.22a1.25 1.25 0 0 0 .55-1V3.13a1.25 1.25 0 0 0-.55-1.03m-8.5 3.67V9H2.5V5.77zm0 7.1h-.63l-1.23-2.65h1.86zm1.62-3.72A2.29 2.29 0 0 0 7 9V5.7a2.26 2.26 0 0 0 .37-.11l6.18-2.46v8.48zm7.46-3.03v2.5a1.25 1.25 0 0 0 0-2.5"/></svg>

                                    <h6 class="text-center d-none d-lg-block">Search Engine Marketing</h6>

                                    <p class="d-none">Biz15 Offers keyword research, ad creation, bidding on targeted keywords, and tracking and optimizing ad performance to achieve the best results for your Business. Contact our team to know more about this service.</p>

                                </div>

                            </div>

                            <div class="col-4 col-md-4 p-lg-3 p-4">

                                <div id="shopping_tab" data-image-url="{{ asset('digital_marketing/assets/images/shop-ad.svg') }}" data-clr="hsl(181, 42%, 40%)"  style="--clr:hsl(181, 42%, 40%);"  data-aos="fade-up" data-aos-delay="0" class="service-items py-1 px-1 py-lg-5 px-lg-3 d-flex flex-column justify-content-center align-items-center gap-3 ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3a3 3 0 0 0-3 3h6a3 3 0 0 0-3-3m7 3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8c0-1.11.89-2 2-2h2a5 5 0 0 1 5-5a5 5 0 0 1 5 5zM9 19l7.5-5L9 10z"/></svg>

                                    <h6 class="text-center d-none d-lg-block">Shopping Advertising</h6>

                                    <p class="d-none">Product Listing Ads are a highly effective way for businesses to drive traffic to their online stores and increase sales. We will make good methods to highlight your business product offerings and get users to search more in their online store.</p>

                                </div>

                            </div>

                            <div class="col-4 col-md-4 p-lg-3 p-4">

                                <div id="busniess_tab" data-image-url="{{ asset('digital_marketing/assets/images/bus-list.svg') }}" data-clr="hsl(290, 100%, 40%)" style="--clr:hsl(290, 100%, 40%);"  data-aos="fade-up" data-aos-delay="0" class="service-items py-1 px-1 py-lg-5 px-lg-3 d-flex flex-column justify-content-center align-items-center gap-3 ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M17.5 21h1v-2.5H21v-1h-2.5V15h-1v2.5H15v1h2.5zm.5 2q-2.075 0-3.537-1.463T13 18q0-2.075 1.463-3.537T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23M9 7V5h12v2zM5 20q-.825 0-1.412-.587T3 18q0-.825.588-1.412T5 16q.825 0 1.413.588T7 18q0 .825-.587 1.413T5 20m0-6q-.825 0-1.412-.587T3 12q0-.825.588-1.412T5 10q.825 0 1.413.588T7 12q0 .825-.587 1.413T5 14m0-6q-.825 0-1.412-.587T3 6q0-.825.588-1.412T5 4q.825 0 1.413.588T7 6q0 .825-.587 1.413T5 8m4 11v-2h2.075Q11 17.5 11 18t.075 1zm0-6v-2h9q-1.425 0-2.675.538T13.125 13z"/></svg>

                                    <h6 class="text-center d-none d-lg-block">Business Listings</h6>

                                    <p class="d-none">Business listing is a comprehensive online profile of a company's product relevant details. At Biz15 Business Listing Portal, we understand the importance of an accurate and up-to-date online presence for your business.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section id="featured-section" class="container overflow-hidden mb-5 py-5">

            <div class="row py-5 mb-5">

                <div class="col-12 col-md-8 main-titles text-center d-flex flex-column mx-auto">

                    <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">What We Do ?</h6>

                    <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Online Advertising</h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="m-0">Digital marketing is a great way to reach and engage your business's target audience, generate leads and increase sales. It allows businesses to reach a wider audience than other marketing methods.</p>

                </div>

            </div>

            <div class="row fb-content justify-content-center p-3 p-md-0 mb-5">

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(258, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m9.008 6.709l3.43-1.516v7.672h-3.43zM4.72 4.814l2.144 3.032l2.144-1.137v6.154H4.72z"/><path d="m1.29 6.33l3.43-1.516v8.05H1.29zm12-5.193L7.851 4.613l-2.5-2.923L.878 3.988"/><path d="m10.586.678l2.703.45l-.45 2.704"/></g></svg>

                            <h3 class="text-center title">Strategy Building</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">Comprehensive SEM, SMM, SEO, and All the digital marketing strategy Development to increase brand Reach And awareness.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(0, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><circle cx="10" cy="8" r="2" fill="currentColor" opacity=".3"/><path fill="currentColor" d="M10 16c0-.34.03-.67.08-.99c-.03-.01-.05-.01-.08-.01c-1.97 0-3.9.53-5.59 1.54c-.25.14-.41.46-.41.81V18h6.29c-.19-.63-.29-1.3-.29-2z" opacity=".3"/><path fill="currentColor" d="M4 18v-.65c0-.34.16-.66.41-.81C6.1 15.53 8.03 15 10 15c.03 0 .05 0 .08.01c.1-.7.3-1.37.59-1.98c-.22-.02-.44-.03-.67-.03c-2.42 0-4.68.67-6.61 1.82c-.88.52-1.39 1.5-1.39 2.53V20h9.26c-.42-.6-.75-1.28-.97-2H4zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2zm10.83 6.63l-1.45.49c-.32-.27-.68-.48-1.08-.63L18 11h-2l-.3 1.49c-.4.15-.76.36-1.08.63l-1.45-.49l-1 1.73l1.14 1c-.03.21-.06.41-.06.63s.03.42.06.63l-1.14 1l1 1.73l1.45-.49c.32.27.68.48 1.08.63L16 21h2l.3-1.49c.4-.15.76-.36 1.08-.63l1.45.49l1-1.73l-1.14-1c.03-.21.06-.41.06-.63s-.03-.42-.06-.63l1.14-1l-1-1.75zM17 18c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2z"/></svg>

                            <h3 class="text-center title">Account Management</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">Create and manage your SEM, SEO, Social Media Platform, And All your Digital Marketing Account Managing.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(118, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15a4 4 0 1 0 8 0a4 4 0 1 0-8 0m7.5 3.5L21 21M4 6h16M4 12h4m-4 6h4"/></svg>

                            <h3 class="text-center title">Search Ads Planning</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">Well-planned targeted ads running on search engines (PPC) And increase conversions.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(46, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path fill="currentColor" fill-rule="evenodd" d="M24 24v-5L39 4l5 5l-15 15z" clip-rule="evenodd"/><path d="M16 24H9a5 5 0 0 0 0 10h30a5 5 0 0 1 0 10H18"/></g></svg>

                            <h3 class="text-center title">Content Writing</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">Writing valuable, relevant and consistent SEO Friendly content.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(323, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H4q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v4q0 .425-.288.713T21 11q-.425 0-.712-.288T20 10V6H4v12h7q.425 0 .713.288T12 19q0 .425-.288.713T11 20m-1.5-4.875v-6.25q0-.45.388-.663t.762.038l4.875 3.125q.35.225.35.625t-.35.625L10.65 15.75q-.375.25-.763.038t-.387-.663m8.275 7.475l-.225-1.1q-.3-.125-.563-.262t-.537-.338l-1.075.325q-.175.05-.325-.012T14.8 21l-.6-1q-.1-.15-.05-.325t.175-.3l.825-.725q-.05-.35-.05-.65t.05-.65l-.825-.725q-.125-.125-.175-.3T14.2 16l.6-1q.1-.15.25-.212t.325-.013l1.075.325q.275-.2.538-.337t.562-.263l.225-1.1q.05-.175.163-.288T18.25 13h1.2q.2 0 .313.113t.162.287l.225 1.1q.3.125.563.275t.537.375l1.05-.375q.175-.05.338.013T22.9 15l.6 1.05q.1.15.063.325t-.163.3l-.85.725q.05.3.05.625t-.05.625l.825.725q.125.125.175.3T23.5 20l-.6 1q-.1.15-.25.213t-.325.012L21.25 20.9q-.275.2-.537.338t-.563.262l-.225 1.1q-.05.175-.162.288T19.45 23h-1.2q-.2 0-.312-.112t-.163-.288M18.85 20q.825 0 1.413-.587T20.85 18q0-.825-.587-1.412T18.85 16q-.825 0-1.412.588T16.85 18q0 .825.588 1.413T18.85 20"/></svg>

                            <h3 class="text-center title">Video Design</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">To Engage More viewers With Attractive video content to Increase More Value, Awareness and Reach a large audience.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(182, 42%, 45%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M8 10h8v2H8zm0-4h12v2H8zm0-4h12v2H8z"/><path fill="currentColor" d="m4.711 28l5.631-9.996l7.434 6.49a2 2 0 0 0 3.084-.534l6.97-10.403l-1.661-1.114l-7 10.448l-.07.103l-7.435-6.49a2.003 2.003 0 0 0-3.08.53L4 25.183V2H2v26a2.002 2.002 0 0 0 2 2h26v-2Z"/></svg>

                            <h3 class="text-center title">Research And Analyzing</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">Monitoring, analyzing, Researching and reporting on the performance of your digital marketing campaigns.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(143, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M0 2.965C0 1.88.88 1 1.965 1h2.807c1.085 0 1.965.88 1.965 1.965v.561c0 1.086-.88 1.965-1.965 1.965H1.965A1.965 1.965 0 0 1 0 3.526zm1.965-.28a.28.28 0 0 0-.28.28v.561a.28.28 0 0 0 .28.281h2.807a.28.28 0 0 0 .28-.28v-.562a.28.28 0 0 0-.28-.28zm6.175.561c0-.465.377-.842.842-.842h6.176a.842.842 0 1 1 0 1.684H8.982a.842.842 0 0 1-.842-.842M.28 8.298c0-.465.378-.842.843-.842H11.79a.842.842 0 1 1 0 1.684H1.123a.842.842 0 0 1-.842-.842M.28 13.35c0-.464.378-.841.843-.841h13.474a.842.842 0 1 1 0 1.684H1.123a.842.842 0 0 1-.842-.842" clip-rule="evenodd"/><path fill="currentColor" d="M14.877 9.14a.842.842 0 1 0 0-1.684a.842.842 0 0 0 0 1.684"/></svg>

                            <h3 class="text-center title">Keyword Research</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">High performing keyword research related to your business, and we optimize Targeted keywords to rank higher in search results.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(271, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16.61 13.5c-.8.35-1.5.86-2.07 1.5H9.5a2.5 2.5 0 0 1 0-5H17v1.5H9.5c-.55 0-1 .45-1 1s.45 1 1 1zm-13.11-1c0-2.21 1.79-4 4-4H18a2.495 2.495 0 0 1 1.45 4.53c.6.04 1.18.17 1.72.38c.52-.67.83-1.5.83-2.41c0-2.21-1.79-4-4-4H7.5C4.46 7 2 9.46 2 12.5S4.46 18 7.5 18h5.59c.09-.53.25-1.03.46-1.5H7.5c-2.21 0-4-1.79-4-4m17.84 3.34l-3.59 3.59l-1.59-1.59L15 19l2.75 3l4.75-4.75z"/></svg>

                            <h3 class="text-center title">Link Building</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">Create, Manage & Publish Local business listings and Generating More Targeted Backlinks to Reach As Much As more Visitors.</p>

                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-sm">

                    <div style="--clr:hsl(219, 50%, 50%);" class="fb-items p-1 pt-5 pb-3 h-100 d-flex flex-column align-items-start justify-content-start">

                        <div class="fb-header-titles d-flex align-items-center justify-content-center ">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12h1m-3.5-6.5l1-1M12 3V2M5.5 5.5l-1-1M3 12H2m8 10h4m3-10a5 5 0 1 0-7 4.584V19h4v-2.416A5.001 5.001 0 0 0 17 12"/></svg>

                            <h3 class="text-center title">One Stop Solution</h3>

                        </div>

                        <div class="p-2 w-100">

                            <p class="text-start para">We provide a one-stop solution for analyzing, researching and optimizing all your digital marketing campaigns.</p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section id="why-choose-us" class="container overflow-hidden mb-5 py-5">

            <div class="row py-5 mb-5">

                <div class="col-12 col-md-8 main-titles text-center d-flex flex-column mx-auto">

                    <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">Innovative Solutions Tailored to Your Needs</h6>

                    <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Why Choose Us ?</h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="m-0">Experience unparalleled growth with our cutting-edge e-commerce solutions designed to meet your unique requirements.</p>

                </div>

            </div>

            <div class="row fb-content justify-content-center p-3 p-md-0 mb-5">

                <div data-aos="fade-up" data-aos-delay="100" class="col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(0, 42%, 45%);"

                        class="fb-items h-100 d-flex flex-column align-items-center justify-content-start p-3">

                        <div class="d-flex w-100 justify-content-center align-items-center p-2 icon-box">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="3em" height="3rem" viewBox="0 0 16 16"><path fill="currentColor" d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/></svg>

                        </div>

                        <h3 class="text-center title">We Hear</h3>

                        <p class="text-center para pb-2">By understanding where you are now, we can identify opportunities to amplify your brand and help shape your future.</p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(231, 42%, 45%);"

                        class="fb-items h-100 d-flex flex-column align-items-center justify-content-start p-3">

                        <div class="d-flex w-100 justify-content-center align-items-center p-2 icon-box">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24"><path fill="currentColor" d="M12 16q1.875 0 3.188-1.312T16.5 11.5q0-1.875-1.312-3.187T12 7q-1.875 0-3.187 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16m0-1.8q-1.125 0-1.912-.788T9.3 11.5q0-1.125.788-1.912T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2m0 4.8q-3.35 0-6.113-1.8t-4.362-4.75q-.125-.225-.187-.462t-.063-.488q0-.25.063-.488t.187-.462q1.6-2.95 4.363-4.75T12 4q3.35 0 6.113 1.8t4.362 4.75q.125.225.188.463t.062.487q0 .25-.062.488t-.188.462q-1.6 2.95-4.362 4.75T12 19m0-2q2.825 0 5.188-1.487T20.8 11.5q-1.25-2.525-3.613-4.012T12 6Q9.175 6 6.813 7.488T3.2 11.5q1.25 2.525 3.613 4.013T12 17"/></svg>



                        </div>

                        <h3 class="text-center title">We Identify</h3>

                        <p class="text-center para pb-2">With our vast experience and precise research, we can discover future trends that will light up your brand, and put you center stage.</p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(118, 42%, 45%);"

                        class="fb-items h-100 d-flex flex-column align-items-center justify-content-start p-3">

                        <div class="d-flex w-100 justify-content-center align-items-center p-2 icon-box">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="m14.773 3.485l-.78-.184l-2.108 2.096l-1.194-1.216l2.056-2.157l-.18-.792a4.42 4.42 0 0 0-1.347-.228a3.64 3.64 0 0 0-1.457.28a3.824 3.824 0 0 0-1.186.84a3.736 3.736 0 0 0-.875 1.265a3.938 3.938 0 0 0 0 2.966a335.341 335.341 0 0 0-6.173 6.234c-.21.275-.31.618-.284.963a1.403 1.403 0 0 0 .464.967c.124.135.272.247.437.328c.17.075.353.118.538.127c.316-.006.619-.126.854-.337c1.548-1.457 4.514-4.45 6.199-6.204c.457.194.948.294 1.444.293a3.736 3.736 0 0 0 2.677-1.133a3.885 3.885 0 0 0 1.111-2.73a4.211 4.211 0 0 0-.196-1.378M2.933 13.928a.31.31 0 0 1-.135.07a.437.437 0 0 1-.149 0a.346.346 0 0 1-.144-.057a.336.336 0 0 1-.114-.11c-.14-.143-.271-.415-.14-.568c1.37-1.457 4.191-4.305 5.955-6.046c.1.132.21.258.328.376c.118.123.245.237.38.341c-1.706 1.75-4.488 4.564-5.98 5.994zm11.118-9.065c.002.765-.296 1.5-.832 2.048a2.861 2.861 0 0 1-4.007 0a2.992 2.992 0 0 1-.635-3.137A2.748 2.748 0 0 1 10.14 2.18a2.76 2.76 0 0 1 1.072-.214h.254L9.649 3.839v.696l1.895 1.886h.66l1.847-1.816zM3.24 6.688h1.531l.705.717l.678-.674l-.665-.678V6.01l.057-1.649l-.22-.437l-2.86-1.882l-.591.066l-.831.849l-.066.599l1.838 2.918l.424.215zm-.945-3.632L4.609 4.58L4.57 5.703H3.494L2.002 3.341zm7.105 6.96l.674-.673l3.106 3.185a1.479 1.479 0 0 1 0 2.039a1.404 1.404 0 0 1-1.549.315a1.31 1.31 0 0 1-.437-.315l-3.142-3.203l.679-.678l3.132 3.194a.402.402 0 0 0 .153.105a.477.477 0 0 0 .359 0a.403.403 0 0 0 .153-.105a.436.436 0 0 0 .1-.153a.525.525 0 0 0 .036-.184a.547.547 0 0 0-.035-.184a.436.436 0 0 0-.1-.153z" clip-rule="evenodd"/></svg>

                        </div>

                        <h3 class="text-center title">We Build</h3>

                        <p class="text-center para pb-2">We write and design attract creative assets that live and breathe your brand that your target audience will gravitate towards naturally.</p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(258, 42%, 45%);"

                        class="fb-items h-100 d-flex flex-column align-items-center justify-content-start p-3">

                        <div class="d-flex w-100 justify-content-center align-items-center p-2 icon-box">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 14 14"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m9.008 6.709l3.43-1.516v7.672h-3.43zM4.72 4.814l2.144 3.032l2.144-1.137v6.154H4.72z"/><path d="m1.29 6.33l3.43-1.516v8.05H1.29zm12-5.193L7.851 4.613l-2.5-2.923L.878 3.988"/><path d="m10.586.678l2.703.45l-.45 2.704"/></g></svg>

                        </div>

                        <h3 class="text-center title">We Evaluate</h3>

                        <p class="text-center para pb-2">With close monitoring, we bring up and grow your digital marketing campaign, in order to keep it flowing in the right direction.</p>

                    </div>

                </div>



            </div>

        </section>



        <section id="faq-section" class="container overflow-hidden my-5 py-5">

            <div class="row mt-lg-5">

                <div class="col-md-6 col-12 px-4">

                    <div class="main-titles text-center d-flex flex-column mx-auto">

                        <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">FAQ</h6>

                        <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Answers to Your Questions</h1>

                        <p data-aos="fade-up" data-aos-delay="200" class="m-0">Learn More About Our Digital Marketing Services and Process</p>

                    </div>

                    <img  class="w-100" data-image-src="https://biz15.com/images/digital-marketing/faq.svg" alt="faq">

                </div>

                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 col-12 px-4">

                    <div data-aos="fade-up" data-aos-delay="0" style="--clr:hsl(276, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>1. What is a digital marketing ?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Digital marketing refers to the use of online features and tools to reach and engage with customers, promote products and services, and analyze the effectiveness of marketing efforts. <br> <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div data-aos="fade-up" data-aos-delay="0" style="--clr:hsl(209, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>2. How can you help my business ?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Our Digital marketing Team can help your business reach and engage with customers online through a variety of Strategies. We measure and analyze the performance of your online campaigns and provide insightful plans and recommendations to improve them. <br> <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div data-aos="fade-up" data-aos-delay="0" style="--clr:hsl(46, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>3. How much do you charge for your digital marketing services ?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Cost vary depending on digital marketing services. Reach out to our team and get the Cost details as per your requirement. <br> <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div data-aos="fade-up" data-aos-delay="0" style="--clr:hsl(187, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>4. How long does it take to see results from a digital marketing campaign ?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>The time it takes to see results from a digital marketing campaign varies depending on the specific tactics used and the goals of the campaign. We will develop the best strategies for all needs and problems. This will help your campaign reach the audience faster. <br> <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div data-aos="fade-up" data-aos-delay="0" style="--clr:hsl(152, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>5. What kind of digital marketing services does your company offer ?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>We offer a wide range of services including SEO, Social Media Marketing, Search Engine Marketing, Content Marketing and Website Design and Development. Contact our team (LINK) <br> <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div data-aos="fade-up" data-aos-delay="0" style="--clr:hsl(323, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>6. How do I know the success of my digital marketing campaigns provided by you ?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>We provide full detailed documentation of your website traffic, conversions, and social media engagement. We provide regular performance reports to help you track progress. <br> <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </section>



        <section id="maraque-templates" class="container-fluid py-5 mt-5">

            <!-- marquee row -->

            <div class="row">

                <!-- marquee column -->

                <div class="col-12 d-flex justify-content-center align-items-center p-0">

                    <!-- marquee over all box -->

                    <div class="scroll-wrapper py-3 py-lg-4">

                        <!-- marquee all box -->

                        <div class="scroll-inner d-flex" style="--items: 9;">

                             <!-- marquee item -->

                             <a href="https://biz15.com/digital-marketing/business-listings.html" style="--clr:hsl(204, 100%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2.25 6A.75.75 0 0 1 3 5.25h17a.75.75 0 0 1 0 1.5H3A.75.75 0 0 1 2.25 6m0 5a.75.75 0 0 1 .75-.75h8a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75m0 5a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75" clip-rule="evenodd" opacity=".5"/><path fill="currentColor" d="M16.97 8.47a.75.75 0 0 1 1.06 0l2.5 2.5a.75.75 0 1 1-1.06 1.06l-1.22-1.22V17a.75.75 0 0 1-1.5 0v-6.19l-1.22 1.22a.75.75 0 1 1-1.06-1.06z"/></svg>

                                <h6>Business Listing</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/display-advertising.html" style="--clr:hsl(298, 75%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M1 20.24c0-.42.344-.76.767-.76h20.466c.423 0 .767.34.767.76s-.344.76-.767.76H1.767A.764.764 0 0 1 1 20.24" clip-rule="evenodd"/><path fill="currentColor" d="M3.69 3.89c-.899.89-.899 2.324-.899 5.19v5.067c0 1.91 0 2.866.6 3.46c.599.593 1.564.593 3.493.593h10.233c1.93 0 2.894 0 3.493-.594c.6-.593.6-1.549.6-3.46V9.08c0-2.866 0-4.3-.9-5.19C19.412 3 17.965 3 15.07 3H8.93c-2.894 0-4.34 0-5.24.89" opacity=".5"/><path fill="currentColor" d="M8.93 14.4a.764.764 0 0 0-.767.76c0 .42.344.76.768.76h6.14c.423 0 .767-.34.767-.76s-.344-.76-.768-.76z"/></svg>

                                <h6>Display Ads</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/local-seo.html" style="--clr:hsl(103, 76%, 40%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><rect width="18" height="18" x="3" y="3" fill="currentColor" fill-opacity=".25" rx="2"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="m17 9l-3.044 4.566a1 1 0 0 1-1.727-.107l-.458-.918a1 1 0 0 0-1.727-.107L7 17"/></g></svg>

                                <h6>Local SEO</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/search-engine-optimization.html" style="--clr:hsl(239, 76%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M10 20h3.627a5.25 5.25 0 1 1 8.369-6.34C22 13.153 22 12.6 22 12c0-.442 0-1.608-.002-2H2.002C2 10.392 2 11.558 2 12c0 3.771 0 5.657 1.172 6.828C4.343 20 6.229 20 10 20" opacity=".5"/><path fill="currentColor" d="M5.25 16a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75"/><path fill="currentColor" fill-rule="evenodd" d="M17.75 14.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5M14 16.75a3.75 3.75 0 1 1 6.879 2.068l.901.902a.75.75 0 1 1-1.06 1.06l-.902-.901A3.75 3.75 0 0 1 14 16.75" clip-rule="evenodd"/><path fill="currentColor" d="M9.995 4h4.01c3.781 0 5.672 0 6.846 1.116c.846.803 1.083 1.96 1.149 3.884v1H2V9c.066-1.925.303-3.08 1.149-3.884C4.323 4 6.214 4 9.995 4"/></svg>

                                <h6>Search Engine Optimization</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/search-engine-marketing.html" style="--clr:hsl(0, 76%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><g fill="currentColor"><path d="M136 69.09v101.82l-93.76 28.76A8 8 0 0 1 32 192V48a8 8 0 0 1 10.24-7.67Z" opacity=".2"/><path d="m220.54 86.66l-176.06-54A16 16 0 0 0 24 48v144a16 16 0 0 0 16 16a16 16 0 0 0 4.52-.65L128 181.73V192a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16v-29.9l28.54-8.75A16.09 16.09 0 0 0 232 138v-36a16.09 16.09 0 0 0-11.46-15.34M128 165l-88 27V48l88 27Zm48 27h-32v-15.18l32-9.82Zm40-54h-.11L144 160.08V79.92l71.89 22h.11v36Z"/></g></svg>

                                <h6>Search Engine Marketing</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/social-media-marketing.html" style="--clr:hsl(0, 76%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 9a3 3 0 1 1 0-6a3 3 0 0 1 0 6ZM5.5 21a3 3 0 1 1 0-6a3 3 0 0 1 0 6Zm13 0a3 3 0 1 1 0-6a3 3 0 0 1 0 6Z"/><path stroke-linecap="round" d="M20 13a7.98 7.98 0 0 0-2.708-6M4 13a7.98 7.98 0 0 1 2.708-6M10 20.748A8 8 0 0 0 12 21a8 8 0 0 0 2-.252" opacity=".5"/></g></svg>

                                <h6>Social Media Marketing</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/shopping-advertising.html" style="--clr:hsl(135, 50%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><g fill="currentColor"><path d="M224 56v144a8 8 0 0 1-8 8H40a8 8 0 0 1-8-8V56a8 8 0 0 1 8-8h176a8 8 0 0 1 8 8" opacity=".2"/><path d="M216 40H40a16 16 0 0 0-16 16v144a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16m0 160H40V56h176zM176 88a48 48 0 0 1-96 0a8 8 0 0 1 16 0a32 32 0 0 0 64 0a8 8 0 0 1 16 0"/></g></svg>

                                <h6>Shopping Advertising</h6>

                            </a>

                            <!-- marquee item -->

                            <a href="https://biz15.com/digital-marketing/video-advertising.html" style="--clr:hsl(323, 75%, 50%);" class="scroll-items d-flex flex-column justify-content-center align-items-center px-5">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><g fill="currentColor"><path d="M216 48H40a8 8 0 0 0-8 8v112a8 8 0 0 0 8 8h176a8 8 0 0 0 8-8V56a8 8 0 0 0-8-8m-104 96V80l48 32Z" opacity=".2"/><path d="m164.44 105.34l-48-32A8 8 0 0 0 104 80v64a8 8 0 0 0 12.44 6.66l48-32a8 8 0 0 0 0-13.32M120 129.05V95l25.58 17ZM216 40H40a16 16 0 0 0-16 16v112a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16m0 128H40V56h176zm16 40a8 8 0 0 1-8 8H32a8 8 0 0 1 0-16h192a8 8 0 0 1 8 8"/></g></svg>

                                <h6>Video Advertising</h6>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section id="tags" class="container py-5">

            <div class="row">

                <div class="col-12">

                    <div class="tag-box w-100 d-flex justify-content-center align-items-center flex-wrap ">

                        <a data-aos="fade-up" style="--clr:hsl(258, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">digital marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(0, 50%, 50%);"  href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">online marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(118, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">digital marketing agency</a>

                        <a data-aos="fade-up" style="--clr:hsl(46, 50%, 50%);"  href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">digital marketing company</a>

                        <a data-aos="fade-up" style="--clr:hsl(323, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">digital marketing services</a>

                        <a data-aos="fade-up" style="--clr:hsl(182, 42%, 45%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">social media marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(143, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">smm</a>

                        <a data-aos="fade-up" style="--clr:hsl(271, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">social media marketing agency</a>

                        <a data-aos="fade-up" style="--clr:hsl(219, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">social media marketing strategy</a>

                        <a data-aos="fade-up" style="--clr:hsl(258, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">social media advertising</a>

                        <a data-aos="fade-up" style="--clr:hsl(0, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">display advertising</a>

                        <a data-aos="fade-up" style="--clr:hsl(118, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">display ad</a>

                        <a data-aos="fade-up" style="--clr:hsl(46, 50%, 50%);"  href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">google display ads</a>

                        <a data-aos="fade-up" style="--clr:hsl(323, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">display marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(182, 42%, 45%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">digital display advertising</a>

                        <a data-aos="fade-up" style="--clr:hsl(143, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">online display advertising</a>

                        <a data-aos="fade-up" style="--clr:hsl(271, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">video ads in digital marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(219, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">digital marketing video ads</a>

                        <a data-aos="fade-up" style="--clr:hsl(258, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">online video advertising</a>

                        <a data-aos="fade-up" style="--clr:hsl(0, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">seo</a>

                        <a data-aos="fade-up" style="--clr:hsl(118, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">seo services</a>

                        <a data-aos="fade-up" style="--clr:hsl(46, 50%, 50%);"  href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">on page seo</a>

                        <a data-aos="fade-up" style="--clr:hsl(323, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">seo agency</a>

                        <a data-aos="fade-up" style="--clr:hsl(182, 42%, 45%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">seo search engine optimization</a>

                        <a data-aos="fade-up" style="--clr:hsl(143, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">seo digital marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(271, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">search engine optimization for</a>

                        <a data-aos="fade-up" style="--clr:hsl(219, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">search engine marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(0, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">seo marketing</a>

                        <a data-aos="fade-up" style="--clr:hsl(118, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">searchengine advertising</a>

                        <a data-aos="fade-up" style="--clr:hsl(46, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">business listing</a>

                        <a data-aos="fade-up" style="--clr:hsl(323, 50%, 50%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">business listing sites</a>

                        <a data-aos="fade-up" style="--clr:hsl(182, 42%, 45%);" href="#tags-pop-form" onclick="togglePopUpForm()" class="tags">business listing websites</a>

                    </div>

                </div>

            </div>

        </section>



        <section id="cta" class="container-fluid my-5 py-5">

            <div class="container p-0">

                <div class="row py-5 py-lg-0">

                    <div class="col-12 col-lg-5 order-2 order-lg-1">

                        <div class="d-flex flex-column justify-content-center w-100 h-100">

                            <h1 data-aos="fade-up" class="mb-2"><span style="color: #1c60c5;">Maximize Your Impact </span> <br> Take Action Today!</h1>

                            <p data-aos="fade-up" data-aos-delay="100">Revolutionize digital marketing with AI, AR, and blockchain. Act now!</p>

                            <div data-aos="fade-up" class="d-flex justify-content-start align-items-center mt-3" style="gap: 20px;">

                                <a class="theme-btn" href="#opoup-form" onclick="togglePopUpForm()" role="button">Get in Touch</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-7 order-1 order-lg-2 d-flex justify-content-center mb-3 mb-lg-0">

                        <div class="d-flex justify-content-center align-items-center w-100">

                            <img  class="w-100" data-image-src="assets/images/digital-marketing/cat.svg" alt="">

                        </div>

                    </div>

                </div>

            </div>

        </section>



    </main>

    <!-- footer start -->

    {{-- <footer class="container-xl">

        <div class="row pt-5">

            <div class="col-12 col-md-3 col-lg-3 mb-4 mb-lg-0">

                <div class="d-flex justify-content-center align-items-center w-100 h-100">

                    <a class="d-flex justify-content-center justify-content-md-start justify-content-lg-start"

                        href="https://biz15.com/"><img  class="w-50" data-image-src="assets/images/biz15-logo-f.png" alt="logo"></a>

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-6 mb-4 mb-lg-0">

                <div class="d-flex justify-content-center align-items-center text-center w-100 h-100">

                    <p class="m-0">JOIN US TO START YOUR BUSINESS GROWTH <a class="underline"

                            href="https://biz15.com/contact-us.html">CONTACT US</a></p>

                </div>

            </div>

            <div class="col-12 col-md-3 col-lg-3">

                <div

                    class="d-flex gap-3 footer-social-icons justify-content-lg-end justify-content-md-end justify-content-center align-items-center w-100 h-100">

                    <a target="_blank" href="https://www.facebook.com/biz15"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95"/></svg></a>

                    <a target="_blank" href="https://www.twitter.com/biz15digital"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.205 2.25h3.308l-7.227 8.26l8.502 11.24H16.13l-5.214-6.817L4.95 21.75H1.64l7.73-8.835L1.215 2.25H8.04l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg></a>

                    <a target="_blank" href="https://www.instagram.com/biz15digital/"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg></a>

                    <a target="_blank" href="https://in.linkedin.com/company/biz15"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32m-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43m264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z"/></svg></a>

                </div>

            </div>

        </div>

        <hr class="my-5 w-100">

        <div class="row">

            <div class="col-12 col-md-4 col-lg-2 mb-5 mb-lg-0">

                <div class="d-flex justify-content-start align-items-start flex-column w-100 h-100">

                    <h6 class="mb-4">Who We are</h6>

                    <a href="https://biz15.com/about-us.html">

                        <p class="mb-3">About Us</p>

                    </a>

                    <a href="https://biz15.com/career.html">

                        <p class="mb-3">Career</p>

                    </a>

                    <a href="https://biz15.com/contact-us.html">

                        <p class="mb-4">Contact Us</p>

                    </a>

                    <h6 class="mb-4">Legal Terms</h6>

                    <a href="https://biz15.com/terms-of-use.html">

                        <p class="mb-3">Terms of use</p>

                    </a>

                    <a href="https://biz15.com/terms-and-conditions.html">

                        <p class="mb-3">Terms & Conditions</p>

                    </a>

                    <a href="https://biz15.com/privacy-policy.html">

                        <p class="mb-4">Privacy Policy</p>

                    </a>



                </div>

            </div>

            <div class="col-12 col-md-4 col-lg-2 mb-5 mb-lg-0">

                <div class="d-flex justify-content-start align-items-start flex-column w-100 h-100">

                    <h6 class="mb-4"><a href="https://biz15.co/">BioWeb & Tools</a></h6>

                    <a href="https://biz15.co/biolink-pages">

                        <p class="mb-3">Biolink pages</p>

                    </a>

                    <a href="https://biz15.co/event-links">

                        <p class="mb-3">Event links</p>

                    </a>

                    <a href="https://biz15.co/file-links">

                        <p class="mb-3">File links</p>

                    </a>

                    <a href="https://biz15.co/qr-codes">

                        <p class="mb-3">QR codes</p>

                    </a>

                    <a href="https://biz15.co/shortened-links">

                        <p class="mb-3">Shortened links</p>

                    </a>

                    <a href="https://biz15.co/static-sites">

                        <p class="mb-3">Static sites</p>

                    </a>

                    <a href="https://biz15.co/vcard-links">

                        <p class="mb-3">Vcard links</p>

                    </a>

                    <a href="https://biz15.co/other-tools">

                        <p class="mb-4">Other Tools</p>

                    </a>

                    <h6 class="mb-4"><a href="https://biz15.co/promo-widgets">Promo Widgets</a></h6>

                    <a href="https://biz15.co/promo-widgets-sign-in">

                        <p class="mb-3">Sign In</p>

                    </a>

                    <a href="https://biz15.co/promo-widgets-sign-up">

                        <p class="m-0">Sign Up</p>

                    </a>

                </div>

            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-lg-0">

                <div class="d-flex justify-content-start align-items-start flex-column w-100 h-100">

                    <h6 class="mb-4"><a href="#">Digital Marketing</a></h6>

                    <a href="https://biz15.com/digital-marketing/search-engine-optimization.html">

                        <p class="mb-3">Search Engine Optimization</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/social-media-marketing.html">

                        <p class="mb-3">Social Media Marketing</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/search-engine-marketing.html">

                        <p class="mb-3">Search Engine Marketing</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/local-seo.html">

                        <p class="mb-3">Local SEO</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/video-advertising.html">

                        <p class="mb-3">Video Advertising</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/display-advertising.html">

                        <p class="mb-3">Display Advertising</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/shopping-advertising.html">

                        <p class="mb-3">Shopping Advertising</p>

                        </a>

                    <a href="https://biz15.com/digital-marketing/business-listings.html">

                        <p class="mb-3">Business Listing</p>

                        </a>

                    <a href="https://biz15.com/msg/" class="footer-msg mb-4 mt-5 w-100"><img class="w-100"

                            src="digital_marketing/assets/images/biz15-msg.png" alt="Biz15 Msg"></a>

                    <a href="https://biz15.com/msg/dashboard/authenticate/login">

                        <p class="mb-3">SMS & WhatsApp Marketing</p>

                    </a>

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">

                <div class="d-flex justify-content-start align-items-start flex-column w-100 h-100">

                    <h6 class="mb-4"><a href="#">Web Solutions</a></h6>

                    <h6 class="mb-4"><a href="https://biz15.com/web-site-designs/">Web & App</a></h6>

                    <a href="http://biz15.com/website-design">

                        <p class="mb-3">Website Design & Development</p>

                    </a>

                    <a href="https://biz15.com/ecommerce-website-design">

                        <p class="mb-3">Ecommerce Website Design</p>

                    </a>

                    <a href="https://biz15.com/app-design-and-development">

                        <p class="mb-3">App Design & Development</p>

                    </a>

                    <a href="https://biz15.com/webs/business-email">

                        <p class="mb-3">Business Email</p>

                    </a>

                    <a href="https://biz15.com/webs/ssl-certificates.html">

                        <p class="mb-4">SSL Certificates</p>

                    </a>

                    <h6 class="mb-4">Domains</h6>

                    <a href="https://biz15.com/webs/domain-registration">

                        <p class="mb-3">Domain Registration</p>

                    </a>

                    <a href="https://biz15.com/webs/domain-transferring.html">

                        <p class="mb-3">Domain Transferring</p>

                    </a>

                    <a href="https://biz15.com/webs/premium-domains">

                        <p class="m-0">Premium Domains</p>

                    </a>

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-2">

                <div class="d-flex justify-content-start align-items-start flex-column w-100 h-100">

                    <h6 class="mb-4 d-none d-md-block d-lg-block" style="pointer-events: none;">&nbsp;</h6>

                    <h6 class="mb-4"><a class="footer-msg w-100" href="https://themez.store/"><img class="w-100"

                                src="digital_marketing/assets/images/themez-store-logo-f.png" alt="THEMEZ"></a></h6>

                                <a href="https://www.themez.store/website-templates/">

                                    <p class="mb-3">Website Templates</p>

                                </a>

                                <a href="https://www.themez.store/biopage-templates/">

                                    <p class="mb-0">Biopage Templates</p>

                                </a>

                                <a href="https://www.themez.store/email-templates/">

                                    <p class="mb-3">Email Templates</p>

                                </a>

                                <a href="https://www.themez.store/landing-page-design/">

                                    <p class="mb-3">Landing Page Design</p>

                                </a>

                </div>

            </div>

        </div>

        <hr class="my-5 w-100">

        <div class="row pb-5">

            <div class="col-12 col-md-4 col-lg-3 order-3 order-md-1 order-lg-1 mt-3 mt-md-0 mt-lg-0">

                <div

                    class="d-flex justify-content-center justify-content-md-start justify-content-lg-start align-items-center w-100 h-100">

                    <div class="share42init">

                        <script type="text/javascript">/* share42.com | 22.08.2016 | (c) Dimox */

                            window.addEventListener('load', function () { var e = document.getElementsByTagName('div'); for (var k = 0; k < e.length; k++) { if (e[k].className.indexOf('share42init') != -1) { if (e[k].getAttribute('data-url') != -1) var u = e[k].getAttribute('data-url'); if (e[k].getAttribute('data-title') != -1) var t = e[k].getAttribute('data-title'); if (e[k].getAttribute('data-image') != -1) var i = e[k].getAttribute('data-image'); if (e[k].getAttribute('data-description') != -1) var d = e[k].getAttribute('data-description'); if (e[k].getAttribute('data-path') != -1) var f = e[k].getAttribute('data-path'); if (e[k].getAttribute('data-icons-file') != -1) var fn = e[k].getAttribute('data-icons-file'); if (!f) { function path(name) { var sc = document.getElementsByTagName('script'), sr = new RegExp('^(.*/|)(' + name + ')([#?]|$)'); for (var p = 0, scL = sc.length; p < scL; p++) { var m = String(sc[p].src).match(sr); if (m) { if (m[1].match(/^((https?|file)\:\/{2,}|\w:[\/\\])/)) return m[1]; if (m[1].indexOf("/") == 0) return m[1]; b = document.getElementsByTagName('base'); if (b[0] && b[0].href) return b[0].href + m[1]; else return document.location.pathname.match(/(.*[\/\\])/)[0] + m[1]; } } return null; } f = path('share42.js'); } if (!u) u = location.href; if (!t) t = document.title; if (!fn) fn = 'icons.png'; function desc() { var meta = document.getElementsByTagName('meta'); for (var m = 0; m < meta.length; m++) { if (meta[m].name.toLowerCase() == 'description') { return meta[m].content; } } return ''; } if (!d) d = desc(); u = encodeURIComponent(u); t = encodeURIComponent(t); t = t.replace(/\'/g, '%27'); i = encodeURIComponent(i); d = encodeURIComponent(d); d = d.replace(/\'/g, '%27'); var fbQuery = 'u=' + u; if (i != 'null' && i != '') fbQuery = 's=100&p[url]=' + u + '&p[title]=' + t + '&p[summary]=' + d + '&p[images][0]=' + i; var s = new Array('"#" onclick="window.open(\'//www.blogger.com/blog_this.pyra?t&u=' + u + '&n=' + t + '\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="BlogThis!"', '"#" data-count="fb" onclick="window.open(\'//www.facebook.com/sharer/sharer.php?u=' + u + '\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Facebook"', '"#" data-count="lnkd" onclick="window.open(\'//www.linkedin.com/shareArticle?mini=true&url=' + u + '&title=' + t + '\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=600, height=400, toolbar=0, status=0\');return false" title="Share on Linkedin"', '"#" data-count="pin" onclick="window.open(\'//pinterest.com/pin/create/button/?url=' + u + '&media=' + i + '&description=' + t + '\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=600, height=300, toolbar=0, status=0\');return false" title="Pin It"', '"#" data-count="twi" onclick="window.open(\'//twitter.com/intent/tweet?text=' + t + '&url=' + u + '\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Twitter"'); var l = ''; for (j = 0; j < s.length; j++)l += '<a rel="nofollow" style="display:inline-block;vertical-align:bottom;width:32px;height:32px;margin:0 6px 6px 0;padding:0;outline:none;background:url(https://biz15.com/' + f + fn + ') -' + 32 * j + 'px 0 no-repeat" href=' + s[j] + ' target="_blank"></a>'; e[k].innerHTML = '<span id="share42">' + l + '</span>'; } }; }, false);

                        </script>

                    </div>

                </div>

            </div>

            <div class="col-12 col-md-5 col-lg-6 order-1 order-md-1 order-lg-2">

                <div class="d-flex justify-content-center align-items-center text-center w-100 h-100">

                    <p class="m-0">Copyright Â© 2024. All Rights Reserved.</p>

                </div>

            </div>

            <div class="col-12 col-md-3 col-lg-3 order-2 order-md-1 order-lg-3">

                <div

                    class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center w-100 h-100">

                    <p class="m-0">Powered By: <a class="underline" href="https://www.biz15.com/">Biz15</a></p>

                </div>

            </div>

        </div>

    </footer> --}}



    <!-- go top -->

<div id="go_top">

    <button class="go_top_btn p-2" role="button"></button>

    </div>





    <!-- CWFCQ ICON BOTTOM MENU -->

    <script data-biz_bottom_menu_id="id_three" type="text/javascript">

    </script>

    <script src="assets/js/main-js/script.js"></script>
    <style>
        .fade-out-left {
            animation: fadeOutLeft 0.5s forwards;
        }

        .fade-in {
            display: none;
        }

        @keyframes fadeOutLeft {
            100% {
                opacity: 0;
                transform: translateX(-50%);
            }
        }
    </style>


    <!-- MSG WHATSAPP CHAT BOX -->

    <script>
        $(document).ready(function(){
            function changeImage(newImageUrl, width) {
                var currentImage = $('#digital_marketing_image_list img');
                var newImage;

                if (width) {
                    newImage = $('<img src="' + newImageUrl + '" alt="Digital Marketing Image" style="width: ' + width + 'px !important;" class="w-100 fade-in">');
                } else {
                    newImage = $('<img src="' + newImageUrl + '" alt="Digital Marketing Image" class="w-100 fade-in">');
                }

                currentImage.addClass('fade-out-left');

                currentImage.on('animationend', function() {
                    $(this).remove();
                    newImage.removeClass('fade-in').hide().appendTo('#digital_marketing_image_list').fadeIn();
                });
            }

            $('#smm_tab, #video_tab, #seo_tab, #sem_tab, #shopping_tab, #busniess_tab').click(function(){
                var newImageUrl = $(this).data('image-url');
                var width = $(this).data('image-width') || null;
                changeImage(newImageUrl, width);

                // Remove active class from all tabs and add to the clicked tab
                $('#smm_tab, #video_tab, #seo_tab, #sem_tab, #shopping_tab, #busniess_tab').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>




    <!-- Js -->

    <script>

        function googleTranslateElementInit() {



      new google.translate.TranslateElement(

        {

          pageLanguage: "en",

          includedLanguages: "ar,bn,en-GB,pt-BR,bg,ca,da,nl,en,et,fil,fi,fr,de,el,gu,iw,hi,hu,is,id,it,ja,kn,ko,lt,ms,ml,mr,no,pl,pt-PT,ro,ru,sr,zh-CN,sk,es,sv,ta,te,th,tr,ur,uk,vi,cy",

          layout: google.translate.TranslateElement.InlineLayout.SIMPLE,

          gaTrack: true,

          gaId: "UA-11307769-13"

        },

        "google_translate_element"

      );

    }



    setTimeout( function() {

      googleTranslateElementInit();

      }, 500);

    </script>

    {{-- <script src="assets/js/main-js/script.js"></script> --}}


    <script src="assets/js/advance-bottom-menu/script.js"></script>



    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/aos.js"></script>

    <script>

        AOS.init({

            delay: 100,

            duration: 600

        });

    </script>



</body>

</html>
@endsection
