@extends('layouts.app')
@section('content')


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital Marketing</title>

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Google Font Poppins -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    <!-- Css -->

    <link rel="stylesheet" href="assets/css/biz-msg-box/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/shape-shifting/style.css">
    <link rel="stylesheet" href="assets/css/why-choose-us.css">
    <link rel="stylesheet" href="assets/css/price.css ">
    <link rel="stylesheet" href="assets/css/faq.css ">
    <link rel="stylesheet" href="assets/css/cta.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/website-design/style.css">
    <link rel="stylesheet" href="assets/css/main-banner.css">
    <link rel="stylesheet" href="assets/css/biopage-features.css">
    <link rel="stylesheet" href="assets/css/benifits.css">
    <link rel="stylesheet" href="assets/css/marque.css">

</head>

<body>

    {{-- <header class="container-fluid py-3" id="header">

        <span onclick="toggleMenu()" class="close-side-menu"></span>

        <nav class="container-fluid px-0">

            <div class="row justify-content-between">

                <div class="col-5 col-md-2">

                    <div class="biz15-logo">

                        <div class="light-logo d-flex align-items-start justify-content-start">

                            <a href="https://biz15.com/"><img data-image-src="assets/images/website/biz15-logo.png" alt="BIZ15"></a>

                        </div>

                    </div>

                </div>

                <div class="col col-md-7 navigations d-flex align-items-center justify-content-center">

                    <div class="nav-links close-btn-inner w-100 mb-3 d-flex justify-content-between align-items-center">

                        <a href="https://biz15.com/"><img style="max-width: 150px;" src="assets/images/website/biz15-logo-f.png" alt="BIZ15"></a>

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

                                    <a href="#">Website Design & Development</a>

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

                        <a href="https://biz15.com/digital-marketing/">Digital Marketing</a>

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

                                        class="w-100" src="assets/images/website/biz15-msg.png" alt="Biz15 Msg"></a>

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

                                        <img  class="w-100" data-image-src="assets/images/website/theme-store-col-1.png" alt="">

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

                            <div class="drop-lang d-flex flex-column align-items-start justify-content-start">

                                <a class="active" href="index.html">English</a>

                                <a href="index-ta.html">à®¤à®®à®¿à®´à¯</a>

                            </div>

                        </div>

                        <div class="menu-btn"></div>

                    </div>

                </div>



            </div>

        </nav>

    </header> --}}



    <main>

        <section id="main-banner" class="container-fluid">

            <div class="container h-100">

                <div class="row h-100">

                    <div

                        class="h-75 text-white col-12 col-md-9 mx-auto d-flex flex-column justify-content-center align-items-center text-center">

                        <h1 data-aos="fade-up" data-aos-delay="0" class="main-title text-center">Next-Gen Web Solutions for Your Business</h1>

                        <p data-aos="fade-up" data-aos-delay="100" class="text-center main-para">specializes in crafting customized websites that reflect your brand and drive business growth.</p>

                    </div>

                </div>

            </div>

            <picture class="left" style="--x:0.25;--z:0.5;">

                <img style="--ani-delay:0;" class="w-100" src="assets/images/website/bizplus-home-1.jpg" alt="">

            </picture>

            <picture class="left" style="--x:1;--z:0.6;">

                <img style="--ani-delay:0;" class="w-100" src="assets/images/website/realpeak-home-1.jpg" alt="">

            </picture>

            <picture class="left" style="--x:2;--z:0.7;">

                <img style="--ani-delay:1;" class="w-100" src="assets/images/website/realpeak-home-2.jpg" alt="">

            </picture>

            <picture class="left" style="--x:3;--z:0.8;">

                <img style="--ani-delay:2;" class="w-100" src="assets/images/website/free-car.jpg" alt="">

            </picture>

            <picture class="left" style="--x:4;--z:0.9;">

                <img style="--ani-delay:3;" class="w-100" src="assets/images/website/free-furnitures.jpg" alt="">

            </picture>

            <picture class="left" style="--x:5;--z:1;">

                <img style="--ani-delay:4;" class="w-100" src="assets/images/website/free-policlinic.jpg" alt="">

            </picture>



            <picture class="right" style="--x:-0.25;--z:0.5;">

                <img style="--ani-delay:0;" class="w-100" src="assets/images/website/free=cloths.jpg" alt="">

            </picture>

            <picture class="right" style="--x:-1;--z:0.6;">

                <img style="--ani-delay:0;" class="w-100" src="assets/images/website/multiplus-bakery.jpg" alt="">

            </picture>

            <picture class="right" style="--x:-2;--z:0.7;">

                <img style="--ani-delay:1;" class="w-100" src="assets/images/website/multiplus-Beauty-and-spa.jpg" alt="">

            </picture>

            <picture class="right" style="--x:-3;--z:0.8;">

                <img style="--ani-delay:2;" class="w-100" src="assets/images/website/realestate-home.png" alt="">

            </picture>

            <picture class="right" style="--x:-4;--z:0.9;">

                <img style="--ani-delay:3;" class="w-100" src="assets/images/website/roofwin-home-1.jpg" alt="">

            </picture>

            <picture class="right" style="--x:-5;--z:1;">

                <img style="--ani-delay:4;" class="w-100" src="assets/images/website/roofwin-home-2.jpg" alt="">

            </picture>

        </section>



        <section id="main-intro" class="container my-5 py-5">

            <div class="row py-5">

                <div class="col-12 col-md-11 main-titles text-center d-flex flex-column mx-auto">

                    <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">Empower Your Business Growth</h6>

                    <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Web Solutions for Your Business</h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="m-0">Our team crafts custom websites to fit your business perfectly. We blend striking design with seamless functionality, ensuring your site reflects your brand and engages your audience. With our tailored approach, your website will drive growth and success.</p>

                </div>

            </div>

        </section>



        <section id="biopage-features" class="my-5">

            <div id="bioPageBlocks" class="container-fluid py-0 py-md-5 overflow-hidden">

                <div id="cursor-icon"></div>

                <div class="container my-0 mb-md-5 py-0 pb-md-5">

                    <div class="row pb-0 pt-5 pt-md-0 pb-md-5 mb-md-5 mb-0">

                        <div class="col-12 py-3 py-md-5 col-md-8 main-titles text-center d-flex flex-column mx-auto">

                            <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 text-white">Browse Your Website Styles</h6>

                            <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-0 mb-md-5 text-white">Find Your Digital Destination</h1>

                        </div>

                    </div>

                    <div class="row biopage-frame-box justify-content-center align-items-center">



                        <div class="col-12 mob-grid col-md-4 d-flex justify-content-center align-items-center">

                            <div data-aos="fade-up" data-aos-delay="0" class="responsive-sec d-flex justify-content-center align-items-center">

                                <a target="_blank" href="https://trvcashews.com/shop/" id="shape_shifting_shapes">

                                    <div>

                                        <div></div>

                                    </div>

                                </a>

                            </div>

                            <div data-aos="fade-up" data-aos-delay="0" class="change-titles">

                                <h2 class="text-center text-white w-100">E-commerce Websites</h2>

                                <p class="text-center d-none text-white w-100">Online platforms for browsing and buying products/services.</p>

                            </div>

                            <div data-src="https://trvcashews.com/shop/" style="--my:-225px;--clr:hsl(271, 98%, 45%);--bg: linear-gradient(135deg, hsl(303, 97%, 70%), hsl(271, 98%, 45%));--delay:0;--angle: 225deg;--distance: 495px;--distance-mob:310px;--angle-mob:255deg;" class="scroll-items  right-side active d-flex align-items-center justify-content-start flex-row-reverse">

                                <div class="items-titles pr">

                                    <h5>E-commerce Websites</h5>

                                    <p>Online platforms for browsing and buying products/services.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M491.52 391.168H190.464L179.2 349.184H425.984C430.08 349.184 434.176 346.112 435.2 343.04L501.76 176.128C502.784 173.056 502.784 168.96 500.736 166.912C498.688 163.84 495.616 162.816 492.544 162.816H446.464C440.32 89.088 379.904 31.744 306.176 31.744C232.448 31.744 306.176 31.744 305.152 31.744C233.472 31.744 171.008 87.04 165.888 162.816H128L93.1842 34.816C92.1602 29.696 88.0642 26.624 82.9442 26.624H20.4802C14.3362 26.624 10.2402 30.72 10.2402 36.864C10.2402 43.008 14.3362 47.104 20.4802 47.104H75.7762L173.056 403.456C174.08 407.552 178.176 410.624 183.296 410.624H203.776C198.656 417.792 195.584 427.008 195.584 437.248C195.584 462.848 217.088 484.352 242.688 484.352C268.288 484.352 289.792 462.848 289.792 437.248C289.792 427.008 286.72 418.816 281.6 410.624H393.216C388.096 417.792 385.024 427.008 385.024 437.248C385.024 462.848 406.528 484.352 432.128 484.352C457.728 484.352 479.232 462.848 479.232 437.248C479.232 427.008 476.16 418.816 471.04 410.624H491.52C497.664 410.624 501.76 406.528 501.76 400.384C501.76 394.24 496.64 391.168 491.52 391.168ZM424.96 161.792H381.952C381.952 151.552 380.928 140.288 378.88 131.072H417.792C421.888 140.288 423.936 151.552 424.96 161.792ZM378.88 212.992C380.928 202.752 381.952 192.512 381.952 182.272H424.96C423.936 193.536 421.888 203.776 417.792 212.992H378.88ZM408.576 233.472C396.288 254.976 376.832 271.36 354.304 281.6C363.52 268.288 370.688 251.904 374.784 233.472H408.576ZM408.576 110.592H374.784C369.664 91.136 362.496 74.752 354.304 62.464C376.832 71.68 396.288 89.088 408.576 110.592ZM316.416 54.272C331.776 60.416 346.112 80.896 354.304 110.592H316.416V54.272ZM316.416 131.072H358.4C360.448 140.288 361.472 150.528 361.472 161.792H315.392V131.072H316.416ZM316.416 182.272H362.496C362.496 193.536 360.448 203.776 359.424 212.992H317.44V182.272H316.416ZM316.416 233.472H354.304C346.112 263.168 331.776 283.648 316.416 289.792V233.472ZM295.936 54.272V110.592H258.048C266.24 80.896 280.576 60.416 295.936 54.272ZM252.928 212.992C250.88 203.776 249.856 192.512 249.856 182.272H295.936V212.992H252.928ZM295.936 233.472V289.792C280.576 283.648 266.24 263.168 258.048 233.472H295.936ZM236.544 233.472C241.664 252.928 248.832 269.312 257.024 281.6C234.496 271.36 215.04 253.952 202.752 233.472H236.544ZM193.536 212.992C190.464 202.752 187.392 192.512 186.368 182.272H229.376C229.376 192.512 230.4 203.776 232.448 212.992H193.536ZM249.856 161.792C249.856 150.528 251.904 140.288 252.928 131.072H294.912V161.792H249.856ZM257.024 61.44C247.808 74.752 240.64 91.136 236.544 109.568H202.752C215.04 89.088 234.496 71.68 257.024 61.44ZM193.536 131.072H232.448C230.4 141.312 230.4 151.552 229.376 161.792H186.368C187.392 151.552 189.44 140.288 193.536 131.072ZM173.056 328.704L133.12 182.272H165.888C171.008 257.024 233.472 312.32 305.152 313.344H306.176C377.856 313.344 440.32 257.024 445.44 182.272H476.16L417.792 328.704H173.056ZM241.664 464.896C227.328 464.896 215.04 452.608 215.04 438.272C215.04 423.936 227.328 411.648 241.664 411.648C256 411.648 268.288 423.936 268.288 438.272C268.288 452.608 256 464.896 241.664 464.896ZM430.08 464.896C415.744 464.896 403.456 452.608 403.456 438.272C403.456 423.936 415.744 411.648 430.08 411.648C444.416 411.648 456.704 423.936 456.704 438.272C456.704 452.608 445.44 464.896 430.08 464.896Z" fill="currentColor"/>

                                </svg>

                            </div>

                            <div data-src="https://biz15.com/themez-store/html-templates/previews/premium/bizplus-preview.html" style="--my:-225px;--clr:hsl(196, 93%, 30%);--bg: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);--delay:1;--angle: -45deg;--distance: 495px;--distance-mob:310px;--angle-mob:-75deg;" class="scroll-items  left-side d-flex align-items-center justify-content-start ">

                                <div class="items-titles">

                                    <h5>Educational Websites</h5>

                                    <p>Educational sites offering courses, tutorials, and resources.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">

                                   <path d="M495.999 465.475V390.526C501.335 388.649 505.834 384.945 508.699 380.068C511.564 375.191 512.61 369.458 511.651 363.884C510.693 358.31 507.792 353.255 503.463 349.615C499.133 345.976 493.655 343.987 487.999 344H446.525C447.474 341.438 447.972 338.732 447.999 336C447.984 331.053 446.438 326.232 443.573 322.199C440.708 318.166 436.665 315.118 431.999 313.475V296H457.445L443.452 212.067C446.969 208.689 449.535 204.446 450.895 199.763C452.255 195.081 452.36 190.123 451.2 185.386C450.04 180.65 447.656 176.302 444.286 172.778C440.916 169.253 436.679 166.677 431.999 165.306V130.484L411.168 122.549L477.539 96.0001L255.999 7.3833L34.4601 96.0001L127.999 133.417V232H95.9994C82.4553 231.986 69.2566 236.273 58.3064 244.244C47.3563 252.215 39.2205 263.457 35.0723 276.35C30.9242 289.244 30.978 303.121 35.2259 315.982C39.4739 328.842 47.6965 340.022 58.7081 347.907C39.5781 353.946 23.241 366.632 12.6524 383.67C2.06368 400.709 -2.07733 420.974 0.978464 440.801C4.03426 460.627 14.085 478.705 29.3126 491.764C44.5402 504.824 63.9388 512.002 83.9994 512H487.999C493.655 512.014 499.133 510.024 503.463 506.385C507.792 502.745 510.693 497.691 511.651 492.116C512.61 486.542 511.564 480.809 508.699 475.932C505.834 471.056 501.335 467.351 495.999 465.475ZM479.999 408H335.999V424H479.999V464H82.5817C73.034 464 63.8772 460.207 57.1259 453.456C50.3746 446.705 46.5817 437.548 46.5817 428C46.5817 418.452 50.3746 409.296 57.1259 402.544C63.8772 395.793 73.034 392 82.5817 392H479.999V408ZM415.999 312H95.9994C91.7559 312 87.6862 310.314 84.6856 307.314C81.6851 304.313 79.9994 300.244 79.9994 296C79.9994 291.757 81.6851 287.687 84.6856 284.686C87.6862 281.686 91.7559 280 95.9994 280H191.803C212.745 285.541 234.338 288.232 255.999 288C277.66 288.232 299.254 285.541 320.195 280H393.222L390.554 296H415.999V312ZM379.591 248H398.559L395.892 264H358.89C366.48 259.624 373.444 254.242 379.591 248ZM438.551 280H409.445L419.519 219.547C422.476 220.151 425.523 220.151 428.479 219.547L438.551 280ZM435.999 192C435.999 194.374 435.296 196.694 433.977 198.667C432.658 200.64 430.784 202.178 428.592 203.087C426.399 203.995 423.986 204.233 421.658 203.77C419.331 203.307 417.192 202.164 415.514 200.485C413.836 198.807 412.693 196.669 412.23 194.341C411.767 192.013 412.005 189.601 412.913 187.408C413.821 185.215 415.359 183.341 417.333 182.022C419.306 180.704 421.626 180 423.999 180C427.181 180.004 430.231 181.269 432.481 183.519C434.73 185.768 435.996 188.819 435.999 192ZM415.999 141.52V165.31C411.32 166.681 407.083 169.257 403.713 172.782C400.343 176.306 397.958 180.654 396.798 185.39C395.638 190.127 395.744 195.085 397.103 199.767C398.463 204.45 401.03 208.693 404.547 212.071L401.223 232H383.999V133.417L389.238 131.321L415.999 141.52ZM255.999 24.6169L434.46 96.0001L389.1 114.143L258.847 64.5233L253.151 79.4769L367.173 122.917L255.999 167.383L77.5386 96.0001L255.999 24.6169ZM255.999 184.617L367.999 139.817V236.969C360.831 244.4 329.242 272 255.999 272C182.679 272 151.101 244.336 143.999 236.977V139.817L255.999 184.617ZM47.9993 296C48.0133 283.274 53.0749 271.073 62.0737 262.074C71.0724 253.076 83.2732 248.014 95.9994 248H132.407C138.555 254.242 145.519 259.624 153.109 264H95.9994C87.5124 264 79.3731 267.372 73.3719 273.373C67.3708 279.374 63.9994 287.513 63.9994 296C63.9994 304.487 67.3708 312.626 73.3719 318.628C79.3731 324.629 87.5124 328 95.9994 328H423.999C426.121 328 428.156 328.843 429.656 330.343C431.157 331.844 431.999 333.878 431.999 336C431.999 338.122 431.157 340.157 429.656 341.657C428.156 343.157 426.121 344 423.999 344H95.9994C83.2732 343.986 71.0724 338.925 62.0737 329.926C53.0749 320.927 48.0133 308.726 47.9993 296ZM487.999 496H83.9994C65.9646 496 48.6686 488.836 35.9161 476.083C23.1636 463.331 15.9993 446.035 15.9993 428C15.9993 409.965 23.1636 392.669 35.9161 379.917C48.6686 367.164 65.9646 360 83.9994 360H487.999C490.121 360 492.156 360.843 493.656 362.343C495.157 363.844 495.999 365.878 495.999 368C495.999 370.122 495.157 372.157 493.656 373.657C492.156 375.157 490.121 376 487.999 376H82.5817C68.7905 376 55.5641 381.479 45.8122 391.231C36.0603 400.982 30.5817 414.209 30.5817 428C30.5817 441.791 36.0603 455.018 45.8122 464.77C55.5641 474.522 68.7905 480 82.5817 480H487.999C490.121 480 492.156 480.843 493.656 482.343C495.157 483.844 495.999 485.878 495.999 488C495.999 490.122 495.157 492.157 493.656 493.657C492.156 495.157 490.121 496 487.999 496Z" fill="currentColor"/>

                                   <path d="M304 432H80V448H304V432Z" fill="currentColor"/>

                                </svg>

                            </div>





                            <div data-src="https://biz15.com/themez-store/html-templates/previews/premium/roofwin-windows-preview.html"  style="--my:-150px;--clr:hsl(148, 100%, 20%);--bg: linear-gradient(45deg, #009245 0%, #FCEE21 100%);--delay:2;--angle: 210deg;--distance: 450px;--distance-mob:300px;--angle-mob:240deg;" class="scroll-items  right-side d-flex align-items-center justify-content-start flex-row-reverse">

                                <div class="items-titles text-end">

                                    <h5>Blogs</h5>

                                    <p>Chronological sites with casual, regular content.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 467 467" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M350.25 153.234C350.25 93.4 300.631 43.7812 240.797 43.7812H153.234C93.4 43.7812 43.7812 93.4 43.7812 153.234V189.719V218.906V313.766C43.7812 373.6 93.4 423.219 153.234 423.219H313.766C373.6 423.219 423.219 373.6 423.219 313.766V213.069C423.219 199.934 413.003 189.719 399.869 189.719H386.734C366.303 189.719 350.25 173.666 350.25 153.234Z" stroke="currentColor" stroke-width="15" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>

                                    <path d="M233.5 189.719H160.531C144.478 189.719 131.344 176.584 131.344 160.531C131.344 144.478 144.478 131.344 160.531 131.344H233.5C249.553 131.344 262.688 144.478 262.688 160.531C262.688 176.584 249.553 189.719 233.5 189.719Z" stroke="currentColor" stroke-width="15" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>

                                    <path d="M291.875 335.656H160.531C144.478 335.656 131.344 322.522 131.344 306.469C131.344 290.416 144.478 277.281 160.531 277.281H291.875C307.928 277.281 321.062 290.416 321.062 306.469C321.062 322.522 307.928 335.656 291.875 335.656Z" stroke="currentColor" stroke-width="15" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>

                                </svg>



                            </div>

                            <div data-src="https://biz15.com/themez-store/html-templates/previews/premium/realpeak-preview.html"  style="--my:-150px;--clr:hsl(276, 51%, 30%);--bg: linear-gradient(45deg, #662D8C 0%, #ED1E79 100%);--delay:3;--angle: -30deg;--distance: 450px;--distance-mob:300px;--angle-mob:-60deg;" class="scroll-items  left-side d-flex align-items-center justify-content-start">

                                <div class="items-titles">

                                    <h5>Corporate Websites</h5>

                                    <p>Business websites showcasing products, services, and company.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M480 376V288H464V376H416V344H400V376H352V96H464V272H480V88C480 85.8783 479.157 83.8434 477.657 82.3431C476.157 80.8429 474.122 80 472 80H464V56C464 53.8783 463.157 51.8434 461.657 50.3431C460.157 48.8429 458.122 48 456 48H416V16H400V48H360C357.878 48 355.843 48.8429 354.343 50.3431C352.843 51.8434 352 53.8783 352 56V80H344C341.878 80 339.843 80.8429 338.343 82.3431C336.843 83.8434 336 85.8783 336 88V136H296C294.949 136 293.909 136.207 292.939 136.609C291.968 137.011 291.086 137.6 290.343 138.343L226.343 202.343C225.6 203.086 225.011 203.968 224.609 204.939C224.207 205.909 224 206.949 224 208V254.606L181.206 217.926C179.756 216.683 177.91 216 176 216C174.09 216 172.244 216.683 170.794 217.926L114.794 265.926C113.917 266.677 113.214 267.609 112.732 268.657C112.25 269.706 112 270.846 112 272V305.87L84.1162 289.14C82.8729 288.394 81.4501 288 80 288C78.5499 288 77.1271 288.394 75.8838 289.14L35.8838 313.14C34.6993 313.851 33.719 314.856 33.0384 316.058C32.3578 317.261 32 318.619 32 320V376H16V392H58.2276C80.2898 424.072 109.821 450.297 144.275 468.415C178.729 486.533 217.073 496 256 496C294.927 496 333.271 486.533 367.725 468.415C402.179 450.297 431.71 424.072 453.772 392H496V376H480ZM368 64H448V80H368V64ZM344.28 392C337.255 405.986 329.081 419.365 319.844 432H192.156C182.919 419.365 174.745 405.986 167.72 392H344.28ZM240 211.314L299.314 152H336V376H296V344H280V376H240V211.314ZM128 275.68L176 234.537L224 275.68V376H184V344H168V376H128V275.68ZM48 324.53L80 305.33L112 324.53V376H88V344H72V376H48V324.53ZM77.99 392H149.93C156.458 405.893 164.041 419.266 172.612 432H117.366C102.619 420.366 89.3905 406.928 77.99 392ZM184.185 448C191.481 457.411 199.359 466.355 207.775 474.78C184.047 469.572 161.329 460.526 140.515 448H184.185ZM236.237 479.134C224.896 469.665 214.381 459.25 204.804 448H307.196C297.619 459.25 287.104 469.665 275.763 479.134C269.228 479.708 262.641 479.997 256 480C249.364 480 242.777 479.711 236.237 479.134ZM327.815 448H371.485C350.671 460.526 327.953 469.572 304.225 474.78C312.641 466.355 320.52 457.411 327.815 448ZM394.634 432H339.388C347.96 419.266 355.542 405.893 362.07 392H434.01C422.61 406.928 409.381 420.366 394.634 432Z" fill="currentColor"/>

                                    <path d="M144 288H160V328H144V288Z" fill="currentColor"/>

                                    <path d="M192 288H208V328H192V288Z" fill="currentColor"/>

                                    <path d="M256 288H272V328H256V288Z" fill="currentColor"/>

                                    <path d="M304 288H320V328H304V288Z" fill="currentColor"/>

                                    <path d="M256 232H272V272H256V232Z" fill="currentColor"/>

                                    <path d="M304 232H320V272H304V232Z" fill="currentColor"/>

                                    <path d="M368 232H384V272H368V232Z" fill="currentColor"/>

                                    <path d="M400 232H416V272H400V232Z" fill="currentColor"/>

                                    <path d="M368 176H384V216H368V176Z" fill="currentColor"/>

                                    <path d="M400 176H416V216H400V176Z" fill="currentColor"/>

                                    <path d="M368 120H384V160H368V120Z" fill="currentColor"/>

                                    <path d="M400 120H416V160H400V120Z" fill="currentColor"/>

                                    <path d="M432 232H448V272H432V232Z" fill="currentColor"/>

                                    <path d="M368 288H384V328H368V288Z" fill="currentColor"/>

                                    <path d="M400 288H416V328H400V288Z" fill="currentColor"/>

                                    <path d="M432 288H448V328H432V288Z" fill="currentColor"/>

                                    <path d="M432 176H448V216H432V176Z" fill="currentColor"/>

                                    <path d="M432 120H448V160H432V120Z" fill="currentColor"/>

                                    <path d="M304 176H320V216H304V176Z" fill="currentColor"/>

                                    <path d="M20.8115 271.337C22.2412 271.959 23.8211 272.148 25.3573 271.884C26.8934 271.62 28.3189 270.912 29.4585 269.849L144.3 162.664L186.879 198.146C188.455 199.459 190.475 200.117 192.522 199.983C194.57 199.849 196.487 198.933 197.879 197.426L289.246 98.445L307.563 110.656C308.711 111.422 310.038 111.877 311.415 111.978C312.792 112.079 314.171 111.822 315.419 111.232C316.667 110.642 317.741 109.74 318.537 108.612C319.333 107.484 319.823 106.169 319.961 104.796L327.961 24.7959C328.091 23.4879 327.898 22.1678 327.397 20.9524C326.896 19.737 326.104 18.6637 325.089 17.8274C324.075 16.9912 322.87 16.4178 321.582 16.1579C320.293 15.898 318.96 15.9597 317.701 16.3374L237.701 40.3374C236.247 40.7737 234.947 41.6148 233.953 42.7624C232.959 43.9099 232.313 45.3166 232.088 46.8181C231.864 48.3197 232.072 49.854 232.687 51.2419C233.302 52.6298 234.3 53.8141 235.563 54.6562L251.865 65.5249L191.206 132.924L149.122 97.8543C147.625 96.6069 145.724 95.9488 143.776 96.0035C141.828 96.0583 139.967 96.8221 138.542 98.1517L95.6849 138.152L106.602 149.849L144.3 114.664L186.879 150.146C188.468 151.47 190.509 152.127 192.573 151.979C194.636 151.831 196.562 150.889 197.947 149.352L269.947 69.3516C270.715 68.4982 271.29 67.4895 271.633 66.394C271.977 65.2985 272.081 64.1419 271.938 63.0028C271.794 61.8636 271.408 60.7686 270.804 59.7922C270.2 58.8157 269.393 57.9807 268.438 57.3438L258.587 50.7764L310.851 35.0972L305.364 89.9614L292.438 81.3438C290.853 80.2873 288.944 79.8307 287.053 80.0562C285.162 80.2816 283.413 81.1744 282.122 82.5738L191.28 180.986L149.122 145.854C147.624 144.606 145.723 143.948 143.775 144.003C141.827 144.058 139.966 144.822 138.542 146.151L32 245.59V219.477L93.4585 162.115L82.5415 150.418L18.5415 210.151C17.7395 210.9 17.1001 211.805 16.6629 212.812C16.2257 213.818 16 214.903 16 216V264C16.0001 265.559 16.4555 267.084 17.3103 268.387C18.165 269.691 19.3819 270.716 20.8115 271.337Z" fill="currentColor"/>

                                </svg>



                            </div>



                            <div data-src="https://srivaishnaviclinic.in/"  style="--my:-75px;--clr:hsl(10, 100%, 30%);--bg: linear-gradient(45deg, #FF512F 0%, hsl(333, 73%, 50%) 100%);--delay:4;--angle: 195deg;--distance: 450px;--distance-mob:250px;--angle-mob:230deg;" class="scroll-items  right-side d-flex align-items-center justify-content-start flex-row-reverse">

                                <div class="items-titles text-end">

                                    <h5>Health and Wellness Websites</h5>

                                    <p>Websites offering health, fitness, and nutrition guidance.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M196.069 263.953C198.699 263.953 201.138 262.575 202.494 260.321L216.025 237.846L233.955 266.338C235.357 268.567 237.807 269.89 240.46 269.842C243.093 269.787 245.504 268.355 246.812 266.069L275.677 215.633L314.445 286.283C315.739 288.641 318.197 290.126 320.887 290.174C320.931 290.174 320.976 290.175 321.02 290.175C323.659 290.175 326.109 288.786 327.463 286.513L351.616 245.967H409.858C414 245.967 417.358 242.609 417.358 238.467C417.358 234.325 414 230.967 409.858 230.967H347.354C344.711 230.967 342.263 232.358 340.911 234.629L321.287 267.571L282.39 196.685C281.084 194.306 278.596 192.818 275.882 192.793C275.859 192.793 275.837 192.793 275.814 192.793C273.126 192.793 270.642 194.232 269.305 196.567L239.997 247.777L222.231 219.546C220.857 217.363 218.46 216.041 215.883 216.041C215.859 216.041 215.834 216.041 215.809 216.041C213.205 216.066 210.801 217.441 209.458 219.672L191.83 248.953H149.205C145.063 248.953 141.705 252.311 141.705 256.453C141.705 260.595 145.063 263.953 149.205 263.953H196.069Z" fill="currentColor"/>

                                    <path d="M423.097 55.795C418.955 55.795 415.597 59.153 415.597 63.295V85.419H393.475C389.333 85.419 385.975 88.777 385.975 92.919C385.975 97.061 389.333 100.419 393.475 100.419H415.597V122.544C415.597 126.686 418.955 130.044 423.097 130.044C427.239 130.044 430.597 126.686 430.597 122.544V100.419H452.719C456.861 100.419 460.219 97.061 460.219 92.919C460.219 88.777 456.861 85.419 452.719 85.419H430.597V63.295C430.597 59.153 427.239 55.795 423.097 55.795Z" fill="currentColor"/>

                                    <path d="M449.56 312.76C486.099 273.697 496.571 214.628 476.486 163.988C498.039 147.744 512 121.933 512 92.919C512 43.894 472.118 4.01001 423.096 4.01001C402.959 4.01001 383.24 10.921 367.57 23.47C364.337 26.059 363.815 30.779 366.404 34.012C368.993 37.244 373.713 37.767 376.946 35.178C390.154 24.6 406.112 19.01 423.095 19.01C463.845 19.01 496.999 52.166 496.999 92.919C496.999 133.689 463.846 166.857 423.095 166.857C385.152 166.857 353.809 138.119 349.647 101.268C349.639 101.183 349.625 101.097 349.614 101.011C349.323 98.352 349.162 95.654 349.162 92.919C349.162 81.343 351.763 70.273 356.891 60.015C358.743 56.31 357.241 51.805 353.537 49.952C349.829 48.101 345.327 49.602 343.474 53.306C337.295 65.665 334.162 78.993 334.162 92.918C334.162 94.178 334.195 95.43 334.247 96.678C315.309 103.447 297.632 114.58 282.818 129.149L274.528 137.299C274.488 137.259 274.458 137.229 274.418 137.189L266.268 129.159C239.898 103.159 205.378 88.629 171.548 89.329C143.398 89.909 118.488 100.939 99.518 121.219C96.688 124.249 96.848 128.999 99.878 131.829C102.908 134.649 107.648 134.499 110.478 131.469C126.618 114.209 147.838 104.819 171.858 104.329C201.658 103.719 232.228 116.669 255.738 139.839L263.898 147.879C267.838 151.759 271.198 153.689 274.548 153.689C277.868 153.689 281.178 151.789 285.048 147.989L293.338 139.839C305.795 127.595 320.488 118.061 336.218 111.946C344.955 151.874 380.586 181.856 423.094 181.856C437.647 181.856 451.394 178.34 463.531 172.112C480.15 216.813 470.608 268.238 438.658 302.448L330.99 412.66L322.08 414.4C319.92 414.82 318.01 415.2 316.27 415.55C304.97 417.84 302.27 418.38 289.04 416.34L224.89 404.61C216.15 401.59 217.03 394.63 217.52 392.54C218.29 389.29 221.31 384.04 227.8 385.02C227.86 385.03 227.92 385.04 227.98 385.05C230.87 385.42 233.97 385.82 237.21 386.23C249.36 387.8 263.12 389.57 275.34 390.82C300.34 393.35 314.48 380.23 317.42 366.09C320.41 351.68 312.2 332.52 287.1 324.51C286.8 324.42 286.49 324.34 286.17 324.28L244.86 316.7C222.44 312.59 205 315.76 178.6 320.56C171.62 321.83 163.7 323.26 154.88 324.71L135.3 327.93L129.27 321.76L110.42 302.46C75.19 264.69 67.38 205.53 91.46 158.56C93.35 154.88 91.89 150.36 88.21 148.47C84.52 146.58 80 148.03 78.11 151.72C51.19 204.24 59.99 270.46 99.52 312.76C99.56 312.8 99.6 312.84 99.63 312.88L117.23 330.9L84.452 336.288V335.432C84.452 329.641 79.343 324.93 73.063 324.93H11.36C5.096 324.93 0 329.641 0 335.432V467.397C0 473.188 5.096 477.899 11.36 477.899H73.064C79.344 477.899 84.453 473.188 84.453 467.397V466.488L151.9 484.84L214.16 501.76C228.37 506.17 239.82 507.99 250.27 507.99C266.81 507.99 280.86 503.45 299.42 497.45C301.07 496.92 302.76 496.37 304.5 495.81L427.19 456.47C441.41 451.91 451.53 441.67 454.25 429.08C456.36 419.32 453.42 409.68 446.38 403.29C440.68 398.12 427.28 390.7 401.45 398.87L356.91 407.58L449.45 312.88C449.49 312.84 449.52 312.8 449.56 312.76ZM15 462.899V339.929H69.452V345.082C69.452 345.098 69.45 345.113 69.45 345.129V456.669C69.45 456.678 69.452 456.686 69.452 456.695V462.899H15ZM405.6 413.29C419.44 408.85 430.63 409.25 436.31 414.4C439.37 417.18 440.57 421.38 439.59 425.9C438.01 433.19 431.66 439.28 422.61 442.18L299.91 481.53C298.16 482.09 296.46 482.64 294.8 483.18C265.45 492.66 250.72 497.43 218.48 487.4C218.4 487.37 218.31 487.35 218.22 487.32L84.452 450.941V351.49L157.31 339.52C166.25 338.05 174.24 336.59 181.29 335.31C206.94 330.65 222.43 327.84 242.15 331.46L282.98 338.95C298.9 344.18 304.39 355.07 302.73 363.04C300.82 372.25 290.66 377.3 276.86 375.9C264.84 374.67 251.18 372.91 239.13 371.36C235.91 370.94 232.82 370.54 229.95 370.18C215.61 368.06 205.5 378.09 202.92 389.12C202.37 391.47 202.15 393.97 202.31 396.49C202.86 405.61 208.31 415.07 220.75 419.04C221.06 419.14 225.2 419.91 225.2 419.91L286.45 431.11C286.51 431.12 286.58 431.13 286.65 431.14C299.29 433.11 304.76 432.94 312.51 431.57C314.54 431.21 322.82 429.53 324.95 429.12L338.45 426.48C338.45 426.48 405.32 413.38 405.6 413.29Z" fill="currentColor"/>

                                </svg>



                            </div>

                            <div data-src="https://biz15.com/themez-store/html-templates/previews/premium/realestate-preview.html"  style="--my:-75px;--clr:hsl(175, 80%, 15%);--bg: linear-gradient(45deg, hsl(175, 80%, 25%)  0%, hsl(143, 85%, 58%) 100%);--delay:5;--angle: -15deg;--distance: 450px;--distance-mob:250px;--angle-mob:-50deg;" class="scroll-items  left-side d-flex align-items-center justify-content-start">

                                <div class="items-titles">

                                    <h5>Real Estate Websites</h5>

                                    <p>Real estate websites listing properties and market trends.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M501.682 388.451L500.739 387.508C489.605 376.375 473.111 373.291 459.001 378.962V219.999H497.16C501.206 219.999 504.853 217.561 506.4 213.823C507.947 210.085 507.089 205.782 504.226 202.924L303.969 2.92399C300.065 -0.975006 293.739 -0.974006 289.835 2.92499L234.857 57.849C230.95 61.752 230.946 68.084 234.85 71.991C238.754 75.899 245.086 75.902 248.992 71.998L296.904 24.134L472.995 199.999H437.586L303.968 66.553C300.064 62.654 293.739 62.654 289.835 66.553L156.218 199.999H120.808L193.279 127.622C197.187 123.719 197.191 117.388 193.288 113.48C189.385 109.572 183.054 109.568 179.146 113.471L89.578 202.924C86.715 205.783 85.857 210.085 87.404 213.823C88.951 217.561 92.598 219.999 96.644 219.999H135V305.134H120.25V300.291C120.25 282.209 105.54 267.499 87.458 267.499H10C4.477 267.499 0 271.977 0 277.499V501.999C0 507.521 4.477 511.999 10 511.999H87.458C105.539 511.999 120.25 497.289 120.25 479.207V475.08L146.525 490.994C169.215 504.736 195.229 512 221.755 512H366.974C395.34 512 423.101 502.168 445.144 484.313L498.944 440.737C506.689 434.464 511.43 425.157 511.951 415.203C512.472 405.249 508.729 395.499 501.682 388.451ZM100.25 479.207C100.25 486.261 94.512 491.999 87.458 491.999H20V287.499H87.458C94.511 287.499 100.25 293.237 100.25 300.291V479.207ZM155 219.999H160.356C163.006 219.999 165.547 218.947 167.422 217.075L296.902 87.762L426.381 217.075C428.256 218.948 430.798 219.999 433.447 219.999H439V391.251C439 391.616 439.022 391.975 439.06 392.329L417.931 408.219C416.564 401.641 413.45 395.486 408.749 390.785C403.082 385.119 395.549 381.999 387.536 381.999H362.902V238.999C362.902 233.476 358.425 228.999 352.902 228.999H240.902C235.379 228.999 230.902 233.476 230.902 238.999V315.368C221.074 308.715 209.497 305.134 197.366 305.134H155V219.999ZM342.902 248.999V381.999H307.118C301.776 381.999 296.754 379.919 292.993 376.157L250.827 333.794C250.872 333.408 250.902 333.018 250.902 332.62V248.999H342.902ZM491.979 414.157C491.75 418.523 489.753 422.443 486.356 425.195L432.556 468.771C414.063 483.75 390.772 491.999 366.974 491.999H221.755C198.882 491.999 176.45 485.735 156.886 473.886L120.25 451.697V325.134H197.366C208.05 325.134 218.095 329.295 225.634 336.834L278.834 390.283C286.39 397.838 296.434 401.999 307.118 401.999H387.536C390.207 401.999 392.719 403.039 394.607 404.928C399.192 409.513 399.563 417.066 397.583 421.844C396.992 423.271 396.296 424.29 395.576 425.031L395.065 425.415C395.097 425.421 395.125 425.426 395.157 425.432C393.421 426.948 391.633 426.957 390.876 426.957H271C264.089 426.957 257.375 424.966 251.583 421.198L219.492 400.326L219.375 400.25C214.75 397.233 208.554 398.532 205.535 403.158C202.516 407.783 203.818 413.979 208.443 416.998L240.678 437.964C249.723 443.847 260.208 446.957 271 446.957H390.875C397.586 446.957 403.635 444.616 408.393 440.416L462.961 399.379C470.358 394.38 480.271 395.322 486.596 401.65L487.54 402.593C490.631 405.684 492.208 409.791 491.979 414.157Z" fill="currentColor"/>

                                    <path d="M406 290.625C400.477 290.625 396 295.103 396 300.625V363.999C396 369.521 400.477 373.999 406 373.999C411.523 373.999 416 369.521 416 363.999V300.625C416 295.103 411.523 290.625 406 290.625Z" fill="currentColor"/>

                                    <path d="M413.07 255.499C411.21 253.629 408.63 252.569 406 252.569C403.37 252.569 400.79 253.629 398.93 255.499C397.07 257.358 396 259.929 396 262.568C396 265.199 397.07 267.779 398.93 269.638C400.79 271.499 403.37 272.568 406 272.568C408.63 272.568 411.21 271.499 413.07 269.638C414.93 267.779 416 265.199 416 262.568C416 259.928 414.93 257.358 413.07 255.499Z" fill="currentColor"/>

                                    <path d="M280.859 308.058C278.999 306.199 276.419 305.138 273.789 305.138C271.149 305.138 268.579 306.199 266.709 308.058C264.849 309.928 263.789 312.498 263.789 315.128C263.789 317.768 264.849 320.338 266.709 322.208C268.579 324.068 271.159 325.138 273.789 325.138C276.419 325.138 278.989 324.068 280.859 322.208C282.719 320.338 283.789 317.768 283.789 315.128C283.789 312.498 282.719 309.928 280.859 308.058Z" fill="currentColor"/>

                                    <path d="M221.138 85.661C217.233 81.756 210.901 81.756 206.995 85.661C203.09 89.566 203.09 95.898 206.995 99.804L206.997 99.805C208.95 101.758 211.508 102.733 214.067 102.733C216.626 102.733 219.186 101.756 221.138 99.804C225.043 95.899 225.042 89.566 221.138 85.661Z" fill="currentColor"/>

                                    <path d="M296.902 131.665C275.397 131.665 257.902 149.16 257.902 170.665C257.902 192.17 275.397 209.665 296.902 209.665C318.407 209.665 335.902 192.17 335.902 170.665C335.902 149.16 318.407 131.665 296.902 131.665ZM296.902 189.665C286.425 189.665 277.902 181.142 277.902 170.665C277.902 160.188 286.425 151.665 296.902 151.665C307.379 151.665 315.902 160.188 315.902 170.665C315.902 181.142 307.379 189.665 296.902 189.665Z" fill="currentColor"/>

                                    <path d="M67.1891 440.929C65.3291 439.068 62.7591 437.999 60.1191 437.999C57.4891 437.999 54.9191 439.068 53.0491 440.929C51.1891 442.789 50.1191 445.369 50.1191 447.999C50.1191 450.629 51.1891 453.209 53.0491 455.068C54.9191 456.928 57.4891 457.999 60.1191 457.999C62.7591 457.999 65.3291 456.929 67.1891 455.068C69.0591 453.209 70.1191 450.629 70.1191 447.999C70.1191 445.369 69.0591 442.789 67.1891 440.929Z" fill="currentColor"/>

                                </svg>



                            </div>



                            <div data-src="https://www.rathnaelectricals.com/"  style="--my:0px;--clr:hsl(343, 98%, 20%);--bg: linear-gradient(45deg, hsl(83, 100%, 50%)  0%, hsl(343, 98%, 50%) 100%);--delay:6;--angle: 180deg;--distance: 450px;--distance-mob:210px;--angle-mob:220deg;" class="scroll-items  right-side d-flex align-items-center justify-content-start flex-row-reverse">

                                <div class="items-titles text-end">

                                    <h5>Retail Websites</h5>

                                    <p>Online store selling products to consumers.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.5em" height="0.5em" viewBox="0 0 512 459" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M488.312 399.198H476.169V191.109C496.284 187.549 511.614 169.954 511.614 148.833V119.957C511.614 119.81 511.6 119.666 511.592 119.521C511.587 119.44 511.587 119.359 511.58 119.278C511.553 118.982 511.512 118.691 511.452 118.407C511.449 118.39 511.443 118.374 511.439 118.358C511.38 118.085 511.303 117.819 511.215 117.558C511.193 117.492 511.167 117.426 511.143 117.361C511.06 117.137 510.968 116.919 510.865 116.706C510.846 116.667 510.834 116.626 510.815 116.588L477.653 50.639V16.145C477.653 7.243 470.41 0 461.508 0H120.456C116.314 0 112.956 3.358 112.956 7.5C112.956 11.642 116.314 15 120.456 15H461.508C462.139 15 462.653 15.514 462.653 16.145V44.989H49.347V16.145C49.347 15.514 49.861 15 50.492 15H85.56C89.702 15 93.06 11.642 93.06 7.5C93.06 3.358 89.702 0 85.56 0H50.492C41.59 0 34.347 7.243 34.347 16.145V50.639L1.186 116.588C1.167 116.627 1.154 116.668 1.136 116.706C1.033 116.919 0.941 117.137 0.858 117.361C0.834 117.427 0.808 117.492 0.786 117.558C0.698 117.819 0.621 118.085 0.562 118.358C0.558 118.374 0.553 118.39 0.549 118.407C0.489 118.692 0.447 118.982 0.421 119.278C0.414 119.359 0.414 119.44 0.409 119.521C0.401 119.666 0.387 119.81 0.387 119.957V148.833C0.387 169.953 15.717 187.549 35.832 191.109V399.198H23.688C10.626 399.198 0 409.825 0 422.887V446.609C0 453.275 5.423 458.698 12.089 458.698H499.911C506.577 458.698 512 453.275 512 446.609V422.887C512 409.825 501.374 399.198 488.312 399.198ZM496.613 148.834C496.613 164.243 484.077 176.779 468.668 176.779C453.259 176.779 440.723 164.243 440.723 148.834V127.458H496.613V148.834ZM465.565 59.989L491.947 112.457H438.499L419.655 59.989H465.565ZM403.716 59.989L422.56 112.457H368.39L357.083 59.989H403.716ZM425.724 127.457V148.833C425.724 164.242 413.188 176.778 397.779 176.778C382.37 176.778 369.834 164.242 369.834 148.833V127.457H425.724ZM341.739 59.989L353.046 112.457H298.426L294.657 59.989H341.739ZM354.834 127.457V148.833C354.834 164.242 342.298 176.778 326.89 176.778C311.482 176.778 298.945 164.242 298.945 148.833V127.457H354.834ZM232.382 59.989H279.617L283.386 112.457H228.613L232.382 59.989ZM228.055 127.457H283.945V148.833C283.945 164.242 271.409 176.778 256 176.778C240.591 176.778 228.055 164.242 228.055 148.833V127.457ZM256 191.778C270.704 191.778 283.701 184.347 291.445 173.046C299.189 184.347 312.186 191.778 326.89 191.778C341.594 191.778 354.591 184.347 362.334 173.046C370.078 184.347 383.075 191.778 397.779 191.778C412.483 191.778 425.48 184.347 433.224 173.046C439.62 182.38 449.603 189.062 461.169 191.109V399.198H178.836V232.534C178.836 224.842 172.578 218.584 164.886 218.584H78.177C70.485 218.584 64.227 224.842 64.227 232.534V399.198H50.832V191.109C62.398 189.062 72.381 182.38 78.777 173.046C86.521 184.347 99.518 191.778 114.222 191.778C128.926 191.778 141.923 184.347 149.667 173.046C157.411 184.347 170.408 191.778 185.111 191.778C199.814 191.778 212.812 184.347 220.556 173.046C228.299 184.347 241.296 191.778 256 191.778ZM163.836 233.584V399.198H79.227V233.584H163.836ZM86.276 148.834V127.458H142.166V148.834C142.166 164.243 129.63 176.779 114.221 176.779C98.812 176.779 86.276 164.242 86.276 148.834ZM170.261 59.989H217.343L213.574 112.457H158.954L170.261 59.989ZM157.166 127.457H213.055V148.833C213.055 164.242 200.519 176.778 185.11 176.778C169.701 176.778 157.166 164.242 157.166 148.833V127.457ZM154.916 59.989L143.609 112.457H89.439L108.283 59.989H154.916ZM46.435 59.989H92.345L73.501 112.457H20.053L46.435 59.989ZM15.387 148.834V127.458H71.277V148.834C71.277 164.243 58.741 176.779 43.332 176.779C27.923 176.779 15.387 164.242 15.387 148.834ZM15 443.698V422.886C15 418.095 18.897 414.198 23.688 414.198H488.311C493.102 414.198 496.999 418.095 496.999 422.886V443.698H15Z" fill="currentColor"/>

                                </svg>



                            </div>

                            <div data-src="https://alqatariasteel.com/"  style="--my:0px;--clr:hsl(317, 100%, 30%);--bg: linear-gradient(45deg, hsl(317, 100%, 50%)  0%, hsl(267, 97%, 15%) 100%);--delay:7;--angle: 0deg;--distance: 450px;--distance-mob:210px;--angle-mob:-40deg;" class="scroll-items  left-side d-flex align-items-center justify-content-start">

                                <div class="items-titles">

                                    <h5>Industrial Websites</h5>

                                    <p>Showcase products, share industry news, connect professionals.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 553 553" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M31.9041 529.102H521.096C526.969 529.102 531.731 524.341 531.731 518.468V304.649C531.731 297.592 528.143 291.163 522.14 287.456C516.132 283.748 508.779 283.426 502.465 286.588L430.717 322.578L417.16 105.504C416.521 93.0519 406.26 83.3 393.793 83.3H342.453C329.99 83.3 319.729 93.0467 319.096 105.348L306.459 298.841L255.911 325.186L243.283 182.397C242.473 170.137 232.222 160.536 219.936 160.536H168.243C155.957 160.536 145.707 170.143 144.923 182.117L133.617 303.858L36.2712 353.938C27.0178 358.699 21.2695 368.119 21.2695 378.525V518.468C21.2695 524.341 26.0312 529.102 31.9041 529.102ZM42.5388 489.311H73.1392V507.833H42.5388V489.311ZM94.4085 507.833V429.283H194.29V507.833H94.4085ZM215.559 507.833V489.311H510.462V507.833H215.559ZM337.1 156.034H399.007L400.53 180.419H335.508L337.1 156.034ZM342.453 104.569H393.793C394.93 104.569 395.859 105.457 395.927 106.714L397.679 134.765H338.489L340.329 106.584C340.386 105.452 341.321 104.569 342.453 104.569ZM334.119 201.688H401.858L410.055 332.942L370.488 352.79V298.786C370.488 283.551 354.333 273.892 340.936 280.871L328.526 287.339L334.119 201.688ZM168.243 181.805H219.936C221.053 181.805 221.982 182.678 222.076 184.028L223.722 202.638H164.375L166.125 183.794C166.197 182.678 167.127 181.805 168.243 181.805ZM162.4 223.908H225.602L235.5 335.825C234.427 336.384 206.274 351.052 208.05 350.127V298.682C208.05 291.579 204.431 285.134 198.366 281.432C192.306 277.74 184.917 277.47 178.603 280.715L156.047 292.319L162.4 223.908ZM46.0023 372.849L186.781 300.427V367.631C186.781 375.59 195.274 380.706 202.318 377.071C220.986 367.345 330.549 310.267 349.219 300.541V370.019C349.219 378.436 358.14 382.754 364.62 379.527C549.454 286.103 325.628 399.236 510.462 305.812V468.042H215.559V427.154C215.559 416.603 206.97 408.014 196.414 408.014H92.2847C81.7279 408.014 73.1392 416.603 73.1392 427.154V468.042H42.5388V378.525C42.5388 376.126 43.8681 373.95 46.0023 372.849Z" fill="currentColor"/>

                                    <path d="M265.207 446.793C271.08 446.793 275.841 442.031 275.841 436.158V411.867C275.841 405.994 271.08 401.232 265.207 401.232C259.334 401.232 254.572 405.994 254.572 411.867V436.158C254.572 442.031 259.334 446.793 265.207 446.793Z" fill="currentColor"/>

                                    <path d="M312.615 446.793C318.488 446.793 323.25 442.031 323.25 436.158V411.867C323.25 405.994 318.488 401.232 312.615 401.232C306.742 401.232 301.98 405.994 301.98 411.867V436.158C301.98 442.031 306.742 446.793 312.615 446.793Z" fill="currentColor"/>

                                    <path d="M360.019 446.793C365.892 446.793 370.654 442.031 370.654 436.158V411.867C370.654 405.994 365.892 401.232 360.019 401.232C354.146 401.232 349.385 405.994 349.385 411.867V436.158C349.385 442.031 354.146 446.793 360.019 446.793Z" fill="currentColor"/>

                                    <path d="M407.424 446.793C413.297 446.793 418.058 442.031 418.058 436.158V411.867C418.058 405.994 413.297 401.232 407.424 401.232C401.551 401.232 396.789 405.994 396.789 411.867V436.158C396.789 442.031 401.551 446.793 407.424 446.793Z" fill="currentColor"/>

                                    <path d="M454.828 446.793C460.701 446.793 465.463 442.031 465.463 436.158V411.867C465.463 405.994 460.701 401.232 454.828 401.232C448.955 401.232 444.193 405.994 444.193 411.867V436.158C444.193 442.031 448.955 446.793 454.828 446.793Z" fill="currentColor"/>

                                    <path d="M146.112 47.5224C137.004 39.5413 123.602 36.5867 111.96 40.045C98.7083 26.2999 79.1423 20.6919 59.9501 25.708C42.3366 30.3087 27.9061 44.6457 23.1859 62.2491C18.8033 78.5955 22.0643 95.4977 32.1381 108.63C42.2067 121.752 57.4525 129.281 73.9652 129.281H160.709C165.886 129.281 170.793 131.249 174.532 134.827L183.899 143.784C186.97 146.729 191.506 147.551 195.427 145.877C199.343 144.205 201.882 140.357 201.882 136.099V78.1541C201.882 58.1467 185.603 41.8676 165.59 41.8676C158.518 41.8676 151.824 43.8564 146.112 47.5224ZM180.613 78.1541V113.116C174.579 109.783 167.761 108.012 160.709 108.012H73.9652C64.1199 108.012 55.0275 103.515 49.0144 95.6794C42.9129 87.7242 41.0332 77.8062 43.7282 67.7531C46.5011 57.4145 54.9756 48.9868 65.3142 46.2918C68.3934 45.4869 71.3273 45.1286 74.1106 45.1286C86.0382 45.1286 95.1202 51.7908 100.11 59.0502C103.351 63.7652 109.738 65.0737 114.572 61.9996C116.784 60.5924 119.531 59.8187 122.309 59.8187C127.922 59.8187 132.892 62.8616 135.608 67.966C137.326 71.1959 140.587 73.3197 144.243 73.5793C147.878 73.839 151.43 72.2033 153.585 69.2434C156.42 65.3645 160.792 63.1368 165.59 63.1368C173.872 63.1368 180.613 69.8718 180.613 78.1541Z" fill="currentColor"/>

                                </svg>

                            </div>



                            <div data-src="https://www.narasimhainteriordecorators.com/"  style="--my:75px;--clr:hsl(185, 99%, 20%);--bg: linear-gradient(45deg, hsl(185, 99%, 50%)  0%, hsl(308, 93%, 60%) 100%);--delay:8;--angle: 165deg;--distance: 450px;--distance-mob:175px;--angle-mob:205deg;" class="scroll-items  right-side d-flex align-items-center justify-content-start flex-row-reverse">

                                <div class="items-titles text-end">

                                    <h5>Service Websites</h5>

                                    <p>Offer services, showcase expertise, facilitate client interactions.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M495.12 244.4L463.12 180.4C462.472 179.067 461.459 177.946 460.199 177.167C458.938 176.388 457.482 175.983 456 176H449.92L441.92 168H456C458.122 168 460.157 167.157 461.657 165.657C463.157 164.157 464 162.122 464 160V128C464 125.878 463.157 123.843 461.657 122.343C460.157 120.843 458.122 120 456 120H441.92L451.92 110.08C453.419 108.57 454.26 106.528 454.26 104.4C454.26 102.272 453.419 100.23 451.92 98.72L429.28 76.08C427.77 74.5812 425.728 73.7401 423.6 73.7401C421.472 73.7401 419.43 74.5812 417.92 76.08L408 86.08V72C408 69.8783 407.157 67.8434 405.657 66.3432C404.157 64.8429 402.122 64 400 64H368C365.878 64 363.843 64.8429 362.343 66.3432C360.843 67.8434 360 69.8783 360 72V86.08L350.08 76.08C348.57 74.5812 346.528 73.7401 344.4 73.7401C342.272 73.7401 340.23 74.5812 338.72 76.08L316.08 98.72C314.581 100.23 313.74 102.272 313.74 104.4C313.74 106.528 314.581 108.57 316.08 110.08L326.08 120H312C309.878 120 307.843 120.843 306.343 122.343C304.843 123.843 304 125.878 304 128V160C304 162.122 304.843 164.157 306.343 165.657C307.843 167.157 309.878 168 312 168H326.08L318.08 176H272V159.44C271.989 156.107 272.681 152.81 274.032 149.763C275.383 146.716 277.362 143.989 279.84 141.76C288.996 133.625 295.926 123.288 299.973 111.727C304.02 100.167 305.051 87.7654 302.969 75.6953C300.886 63.6253 295.759 52.2861 288.072 42.7502C280.385 33.2143 270.393 25.797 259.04 21.2C257.822 20.6995 256.499 20.5075 255.189 20.6411C253.878 20.7747 252.621 21.2297 251.529 21.9657C250.437 22.7018 249.543 23.6961 248.928 24.8604C248.312 26.0247 247.993 27.323 248 28.64V83.68L232 94.4L216 83.68V28.64C216.007 27.323 215.688 26.0247 215.072 24.8604C214.457 23.6961 213.563 22.7018 212.471 21.9657C211.379 21.2297 210.122 20.7747 208.811 20.6411C207.501 20.5075 206.178 20.6995 204.96 21.2C193.607 25.797 183.615 33.2143 175.928 42.7502C168.241 52.2861 163.114 63.6253 161.031 75.6953C158.949 87.7654 159.98 100.167 164.027 111.727C168.074 123.288 175.004 133.625 184.16 141.76C186.638 143.989 188.617 146.716 189.968 149.763C191.319 152.81 192.011 156.107 192 159.44V176H184C182.518 175.983 181.062 176.388 179.801 177.167C178.541 177.946 177.528 179.067 176.88 180.4L144.88 244.4C144.266 245.618 143.974 246.972 144.031 248.335C144.088 249.697 144.493 251.023 145.206 252.185C145.919 253.347 146.918 254.308 148.107 254.975C149.296 255.643 150.636 255.996 152 256H176V353.76L160 357.76V344C160 341.878 159.157 339.843 157.657 338.343C156.157 336.843 154.122 336 152 336H88C85.8783 336 83.8434 336.843 82.3431 338.343C80.8429 339.843 80 341.878 80 344V352H24C21.8783 352 19.8434 352.843 18.3431 354.343C16.8429 355.843 16 357.878 16 360V472C16 474.122 16.8429 476.157 18.3431 477.657C19.8434 479.157 21.8783 480 24 480H80V488C80 490.122 80.8429 492.157 82.3431 493.657C83.8434 495.157 85.8783 496 88 496H152C154.122 496 156.157 495.157 157.657 493.657C159.157 492.157 160 490.122 160 488V476.96L170.32 482.08C178.1 485.953 186.669 487.979 195.36 488H315.12C324.955 488.021 334.619 485.426 343.12 480.48L477.52 402.88C483.431 399.47 488.094 394.257 490.827 388.005C493.56 381.752 494.219 374.789 492.708 368.135C491.196 361.48 487.593 355.485 482.427 351.027C477.262 346.569 470.804 343.882 464 343.36V256H488C489.364 255.996 490.704 255.643 491.893 254.975C493.082 254.308 494.081 253.347 494.794 252.185C495.507 251.023 495.912 249.697 495.969 248.335C496.026 246.972 495.734 245.618 495.12 244.4ZM80 464H32V368H80V464ZM144 480H96V352H144V480ZM320 152V136H338.8C340.518 135.995 342.19 135.441 343.572 134.42C344.953 133.398 345.972 131.961 346.48 130.32C346.83 129.187 347.285 128.088 347.84 127.04C348.628 125.53 348.913 123.808 348.654 122.124C348.395 120.441 347.605 118.884 346.4 117.68L333.04 104.4L344.4 93.04L357.68 106.4C358.884 107.605 360.441 108.395 362.124 108.654C363.808 108.913 365.53 108.628 367.04 107.84C368.088 107.285 369.187 106.83 370.32 106.48C371.961 105.972 373.398 104.953 374.419 103.572C375.441 102.19 375.995 100.518 376 98.8V80H392V98.8C392.005 100.518 392.559 102.19 393.581 103.572C394.602 104.953 396.039 105.972 397.68 106.48C398.813 106.83 399.912 107.285 400.96 107.84C402.47 108.628 404.192 108.913 405.876 108.654C407.559 108.395 409.116 107.605 410.32 106.4L423.6 93.04L434.96 104.4L421.6 117.68C420.395 118.884 419.605 120.441 419.346 122.124C419.087 123.808 419.372 125.53 420.16 127.04C420.715 128.088 421.17 129.187 421.52 130.32C422.028 131.961 423.047 133.398 424.428 134.42C425.81 135.441 427.482 135.995 429.2 136H448V152H429.2C427.482 152.005 425.81 152.559 424.428 153.58C423.047 154.602 422.028 156.039 421.52 157.68C421.17 158.813 420.715 159.912 420.16 160.96C419.372 162.47 419.087 164.192 419.346 165.876C419.605 167.559 420.395 169.116 421.6 170.32L427.36 176H340.64L346.4 170.32C347.605 169.116 348.395 167.559 348.654 165.876C348.913 164.192 348.628 162.47 347.84 160.96C347.285 159.912 346.83 158.813 346.48 157.68C345.972 156.039 344.953 154.602 343.572 153.58C342.19 152.559 340.518 152.005 338.8 152H320ZM328 217.92L344.88 251.6C345.528 252.933 346.541 254.054 347.801 254.833C349.062 255.612 350.518 256.017 352 256H448V346.24C447.2 346.64 446.32 347.04 445.52 347.44L367.52 392.48C363.26 386.098 356.84 381.467 349.44 379.44L328 373.76V217.92ZM176 88C175.98 78.9629 178.154 70.0559 182.334 62.0438C186.514 54.0316 192.576 47.1535 200 42V88C200.007 89.3177 200.339 90.6132 200.967 91.7716C201.595 92.93 202.5 93.9153 203.6 94.64L227.6 110.64C228.891 111.538 230.427 112.02 232 112.02C233.573 112.02 235.109 111.538 236.4 110.64L260.4 94.64C261.5 93.9153 262.405 92.93 263.033 91.7716C263.661 90.6132 263.993 89.3177 264 88V42C270.945 46.8333 276.704 53.1774 280.845 60.5557C284.986 67.934 287.401 76.1547 287.909 84.6004C288.417 93.046 287.005 101.497 283.778 109.319C280.552 117.14 275.595 124.129 269.28 129.76C265.079 133.475 261.722 138.045 259.431 143.164C257.141 148.283 255.971 153.832 256 159.44V176H240V152C240 149.878 239.157 147.843 237.657 146.343C236.157 144.843 234.122 144 232 144C229.878 144 227.843 144.843 226.343 146.343C224.843 147.843 224 149.878 224 152V176H208V159.44C208.026 153.84 206.862 148.299 204.587 143.183C202.311 138.066 198.975 133.491 194.8 129.76C188.883 124.531 184.147 118.103 180.906 110.903C177.664 103.703 175.992 95.896 176 88ZM164.96 240L188.96 192H307.04L283.04 240H164.96ZM312 217.92V369.44L230.08 347.52C220.894 345.042 211.227 344.959 202 347.28L192 349.76V256H288C289.482 256.017 290.938 255.612 292.199 254.833C293.459 254.054 294.472 252.933 295.12 251.6L312 217.92ZM475.28 367.2C477.405 370.862 477.991 375.216 476.912 379.31C475.832 383.403 473.174 386.902 469.52 389.04L335.12 466.64C329.042 470.157 322.142 472.007 315.12 472H195.36C189.137 472.013 182.998 470.56 177.44 467.76L160 459.04V374.24L205.84 362.8C212.437 361.132 219.351 361.187 225.92 362.96L345.28 394.96C348.351 395.757 351.114 397.454 353.214 399.831C355.315 402.209 356.657 405.16 357.07 408.306C357.482 411.451 356.946 414.649 355.53 417.488C354.113 420.327 351.881 422.678 349.12 424.24C347.317 425.304 345.318 425.993 343.243 426.268C341.167 426.543 339.058 426.397 337.04 425.84L241.6 400.24C239.542 399.688 237.349 399.977 235.504 401.042C233.658 402.107 232.312 403.862 231.76 405.92C231.208 407.978 231.497 410.171 232.562 412.016C233.627 413.862 235.382 415.208 237.44 415.76L332.88 441.28C335.593 442.011 338.39 442.387 341.2 442.4C346.797 442.408 352.295 440.916 357.12 438.08C360.776 435.992 363.982 433.198 366.55 429.861C369.118 426.523 370.998 422.709 372.08 418.64C372.967 415.113 373.265 411.464 372.96 407.84L453.52 361.36C457.196 359.32 461.521 358.788 465.581 359.878C469.642 360.968 473.12 363.593 475.28 367.2ZM356.96 240L332.96 192H451.04L475.04 240H356.96Z" fill="currentColor"/>

                                    <path d="M416 144C416 137.671 414.123 131.484 410.607 126.222C407.091 120.959 402.093 116.858 396.246 114.436C390.399 112.014 383.965 111.38 377.757 112.615C371.55 113.85 365.848 116.897 361.373 121.373C356.897 125.848 353.85 131.55 352.615 137.757C351.38 143.965 352.014 150.399 354.436 156.246C356.858 162.093 360.959 167.091 366.222 170.607C371.484 174.123 377.671 176 384 176C392.487 176 400.626 172.629 406.627 166.627C412.629 160.626 416 152.487 416 144ZM384 160C380.836 160 377.742 159.062 375.111 157.304C372.48 155.545 370.429 153.047 369.218 150.123C368.007 147.199 367.69 143.982 368.307 140.879C368.925 137.775 370.449 134.924 372.686 132.686C374.924 130.449 377.775 128.925 380.879 128.307C383.982 127.69 387.199 128.007 390.123 129.218C393.047 130.429 395.545 132.48 397.304 135.111C399.062 137.742 400 140.836 400 144C400 148.243 398.314 152.313 395.314 155.314C392.313 158.314 388.243 160 384 160Z" fill="currentColor"/>

                                </svg>



                            </div>

                            <div data-src="https://cmaster-sa.com/"  style="--my:75px;--clr:hsl(265, 80%, 30%);--bg: linear-gradient(45deg, hsl(265, 80%, 50%)  0%, hsl(42, 100%, 60%) 100%);--delay:9;--angle: 15deg;--distance: 450px;--distance-mob:175px;--angle-mob:-25deg;" class="scroll-items  left-side d-flex align-items-center justify-content-start">

                                <div class="items-titles">

                                    <h5>Export Websites</h5>

                                    <p>Facilitate international trade, showcase products, connect exporters.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.95em" height="0.95em" viewBox="0 0 532 532" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M410.453 467.175C343.446 467.175 288.906 412.635 288.906 345.629C288.906 278.622 343.446 224.082 410.453 224.082C477.459 224.082 531.999 278.622 531.999 345.629C531.999 412.635 477.459 467.175 410.453 467.175ZM410.453 236.548C350.303 236.548 301.373 285.479 301.373 345.629C301.373 405.779 350.303 454.709 410.453 454.709C470.603 454.709 519.533 405.779 519.533 345.629C519.533 285.479 470.603 236.548 410.453 236.548Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M518.91 391.131H301.996C299.191 391.131 297.009 389.572 296.074 387.079C286.413 360.277 286.413 330.981 296.074 304.178C297.009 301.685 299.191 300.127 301.996 300.127H518.91C521.403 300.127 523.896 301.685 524.519 304.178C534.181 330.981 534.181 360.277 524.519 387.079C523.896 389.572 521.403 391.131 518.91 391.131ZM306.359 378.664H514.235C521.091 357.16 521.091 334.097 514.235 312.593H306.359C299.502 334.097 299.502 357.16 306.359 378.664Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M410.453 467.175C376.171 467.175 349.68 413.882 349.68 345.629C349.68 277.376 376.171 224.082 410.453 224.082C444.424 224.082 471.226 277.376 471.226 345.629C471.226 413.882 444.424 467.175 410.453 467.175ZM410.453 236.548C384.274 236.548 362.146 286.414 362.146 345.629C362.146 404.844 384.274 454.709 410.453 454.709C436.632 454.709 458.76 404.844 458.76 345.629C458.76 286.414 436.632 236.548 410.453 236.548Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M232.185 472.162L4.36321 398.61C1.86995 397.987 0 395.494 0 392.689V148.661C0 144.298 4.05155 141.493 8.10311 142.739L234.367 215.979C236.86 216.602 238.418 219.096 238.418 221.9V465.929C238.418 469.357 235.613 472.162 232.185 472.162ZM12.4663 388.326L225.952 457.514V226.264L12.4663 157.076V388.326Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M232.186 228.134L4.36411 154.582C-1.55739 152.712 -1.24574 144.298 4.36411 142.739L212.863 81.3427C214.11 81.0311 215.356 80.7194 216.291 81.0311L364.017 118.43C372.12 120.3 369.004 132.455 361.212 130.585L215.045 93.4974L27.4268 148.972L232.186 215.356L379.6 167.672C387.392 165.179 391.443 177.022 383.652 179.515L232.186 228.134ZM439.127 161.127C432.582 161.127 430.4 152.401 436.322 149.284C429.777 145.856 433.517 135.883 440.685 137.753C452.528 140.869 464.371 141.493 464.683 148.349C464.683 151.154 462.813 153.647 460.32 154.582L439.127 161.127Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M149.907 273.012C148.349 273.012 146.791 272.389 145.544 271.142C113.755 239.042 122.17 239.353 93.8087 267.402C89.7571 271.766 83.2123 268.337 82.9007 263.039L82.2773 175.463C82.2773 171.1 86.3289 167.984 90.3804 169.23L152.089 189.176C154.582 190.111 156.14 192.605 156.14 195.098V266.779C156.14 270.207 153.335 273.012 149.907 273.012ZM118.118 234.367C129.026 234.367 134.948 243.093 143.674 251.82V199.773L94.7437 183.878L95.367 248.391C102.535 241.223 107.522 234.367 118.118 234.367Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M232.184 472.162C228.756 472.162 225.951 469.357 225.951 465.929V221.9C225.951 219.096 227.821 216.602 230.314 215.979L379.599 167.672C387.702 165.179 391.442 177.022 383.65 179.515L238.417 226.264V457.514L332.85 426.971C340.953 424.478 344.693 436.321 336.901 438.814L232.184 472.162ZM458.448 247.145C455.02 247.145 452.215 244.34 452.215 240.912V157.076C444.735 159.569 435.697 164.555 433.204 156.764C430.399 148.349 444.112 146.791 456.578 142.739C460.318 141.493 464.681 144.298 464.681 148.661V240.912C464.681 244.34 461.876 247.145 458.448 247.145Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M149.908 201.331L86.6418 181.073C81.032 179.515 80.7203 171.412 86.3302 169.542L283.921 99.4189C285.168 98.7956 286.415 98.7956 287.661 99.1072L356.226 116.56C362.147 118.118 362.771 126.221 356.849 128.403L149.908 201.331ZM107.835 174.84L149.908 188.553L333.475 123.417L286.415 111.574L107.835 174.84Z" fill="currentColor"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M439.127 240.288C431.958 240.288 414.506 232.185 383.028 239.977C379.288 240.912 375.548 238.107 375.548 234.055V137.129C365.264 137.129 355.291 138.999 352.486 133.701C351.551 131.52 351.551 129.026 353.109 127.156L393.936 68.8764C402.663 56.4101 418.246 56.4101 426.972 68.8764L467.176 126.533C471.227 131.52 467.488 137.129 462.501 137.129H445.36V234.055C445.36 237.483 442.555 240.288 439.127 240.288ZM410.454 224.082C417.934 224.082 425.414 224.705 432.893 226.264V130.896C432.893 122.793 442.867 124.663 450.658 124.663L416.687 76.0445C412.947 71.058 407.649 71.058 404.221 76.0445L370.25 124.663C377.73 124.663 388.015 122.793 388.015 130.896V226.264C395.183 224.705 402.663 224.082 410.454 224.082Z" fill="currentColor"/>

                                </svg>



                            </div>



                            <div data-src="https://biz15.com/themez-store/html-templates/previews/premium/roofwin-windows-preview.html"  style="--my:150px;--clr:#0226c4;--bg: linear-gradient(45deg, #00f4ff  0%, #0226c4 100%);--delay:10;--angle: 150deg;--distance: 450px;--distance-mob:160px;--angle-mob:185deg;" class="scroll-items  right-side d-flex align-items-center justify-content-start flex-row-reverse">

                                <div class="items-titles text-end">

                                    <h5>Presentation Website</h5>

                                    <p>Visually showcase information, products, or services.</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.75em" height="0.75em" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M96 320H136C141.523 320 146 315.523 146 310C146 304.477 141.523 300 136 300H96C90.478 300 86 304.477 86 310C86 315.523 90.478 320 96 320Z" fill="currentColor"/>

                                    <path d="M96 360H166C171.523 360 176 355.523 176 350C176 344.477 171.523 340 166 340H96C90.478 340 86 344.477 86 350C86 355.523 90.478 360 96 360Z" fill="currentColor"/>

                                    <path d="M416 120H380C374.478 120 370 124.477 370 130C370 135.523 374.478 140 380 140H416C421.522 140 426 135.523 426 130C426 124.477 421.522 120 416 120Z" fill="currentColor"/>

                                    <path d="M346 100H416C421.522 100 426 95.523 426 90C426 84.477 421.522 80 416 80H346C340.478 80 336 84.477 336 90C336 95.523 340.478 100 346 100Z" fill="currentColor"/>

                                    <path d="M476 0H36C30.478 0 26 4.477 26 10V50C26 55.523 30.478 60 36 60H46V390C46 395.523 50.478 400 56 400H246V443.463C231.56 447.777 221 461.175 221 477C221 496.299 236.701 512 256 512C275.299 512 291 496.299 291 477C291 461.176 280.44 447.777 266 443.463V400H456C461.522 400 466 395.523 466 390V60H476C481.522 60 486 55.523 486 50V10C486 4.477 481.522 0 476 0ZM271 477C271 485.271 264.272 492 256 492C247.729 492 241 485.271 241 477C241 468.729 247.729 462 256 462C264.272 462 271 468.729 271 477ZM446 380H66V60H446V380ZM466 40H46V20H466V40Z" fill="currentColor"/>

                                    <path d="M171.146 294.853C171.42 295.127 171.71 295.378 172.006 295.613C193.668 316.869 223.327 330 256 330C322.168 330 376 276.168 376 210C376 143.832 322.168 90 256 90C189.832 90 136 143.832 136 210C136 242.672 149.131 272.331 170.385 293.992C170.622 294.289 170.872 294.578 171.146 294.853ZM256 310C232.023 310 209.993 301.515 192.748 287.395L214.102 266.041C225.791 274.803 240.3 280 256 280C291.202 280 320.406 253.876 325.274 220H355.501C350.468 270.462 307.766 310 256 310ZM266 110.498C313.173 115.203 350.796 152.827 355.501 200H325.274C320.875 169.392 296.608 145.124 266 140.726V110.498ZM306 210C306 237.57 283.57 260 256 260C228.43 260 206 237.57 206 210C206 182.43 228.43 160 256 160C283.57 160 306 182.43 306 210ZM246 110.498V140.725C212.124 145.594 186 174.797 186 209.999C186 225.699 191.197 240.207 199.958 251.897L178.604 273.251C164.485 256.006 156 233.976 156 210C156 158.235 195.537 115.532 246 110.498Z" fill="currentColor"/>

                                </svg>



                            </div>

                            <div data-src="https://yesdeeracks.com/"  style="--my:150px;--clr:hsl(340, 100%, 40%);--bg: linear-gradient(45deg, #febe93  0%, #ff1665 100%);--delay:11;--angle: 30deg;--distance: 450px;--distance-mob:160px;--angle-mob:-5deg;" class="scroll-items  left-side d-flex align-items-center justify-content-start">

                                <div class="items-titles">

                                    <h5>Manufacturer Website</h5>

                                    <p>Manufacturer factory, Sale product, Wholesaler</p>

                                </div>

                                <span class="color-line"></span>

                                <svg width="0.65em" height="0.65em" fill="currentColor" id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m311.465 111.847 7.335 1.445 5.066 12.229-4.164 6.209c-2.866 4.272-2.307 10.014 1.332 13.651l14.432 14.432c3.636 3.637 9.376 4.198 13.649 1.333l6.212-4.165 12.228 5.065 1.446 7.34c.997 5.045 5.453 8.707 10.595 8.707h3.204v28.721l-33.107 20.827c-2.565 1.613-3.801 4.695-3.061 7.635l6.552 26.015c.944 3.748 4.747 6.023 8.498 5.078 3.748-.944 6.022-4.749 5.078-8.498l-5.311-21.086 21.351-13.431v8.127c0 3.866 3.134 7 7 7s7-3.134 7-7v-8.127l21.352 13.432-5.311 21.086c-.944 3.749 1.33 7.554 5.078 8.498.574.145 1.149.214 1.715.214 3.132 0 5.983-2.117 6.783-5.292l6.552-26.015c.74-2.939-.495-6.021-3.061-7.635l-33.108-20.827v-28.721h3.205c5.142 0 9.598-3.662 10.596-8.711l1.445-7.336 12.228-5.065 6.213 4.166c4.272 2.862 10.012 2.305 13.648-1.334l14.432-14.432c3.639-3.638 4.198-9.379 1.333-13.649l-4.165-6.211 5.066-12.229 7.34-1.446c5.045-.998 8.706-5.453 8.706-10.595v-20.41c0-5.144-3.664-9.6-8.71-10.594l-7.336-1.447-5.066-12.228 4.165-6.211c2.865-4.272 2.305-10.013-1.333-13.65l-14.433-14.433c-3.637-3.635-9.376-4.197-13.648-1.332l-6.212 4.165-12.228-5.065-1.446-7.341c-.998-5.044-5.453-8.706-10.595-8.706h-20.409c-5.142 0-9.597 3.661-10.596 8.71l-1.445 7.336-12.228 5.065-6.213-4.166c-4.273-2.863-10.013-2.302-13.648 1.333l-14.432 14.432c-3.639 3.639-4.199 9.38-1.333 13.65l4.165 6.211-5.066 12.228-7.335 1.447c-5.047.995-8.711 5.45-8.711 10.594v20.41c0 5.142 3.662 9.598 8.711 10.596zm5.289-28.374 8.433-1.663c2.297-.453 4.216-2.025 5.112-4.188l7.936-19.155c.896-2.164.651-4.632-.653-6.578l-4.787-7.14 10.71-10.71 7.14 4.788c1.944 1.305 4.414 1.549 6.577.653l19.155-7.936c2.164-.896 3.736-2.815 4.189-5.113l1.661-8.432h15.147l1.661 8.432c.453 2.298 2.025 4.217 4.189 5.113l19.155 7.936c2.161.896 4.632.651 6.577-.653l7.14-4.788 10.71 10.71-4.787 7.14c-1.305 1.945-1.55 4.414-.653 6.578l7.936 19.155c.896 2.164 2.815 3.735 5.112 4.188l8.433 1.663v15.147l-8.432 1.661c-2.298.453-4.217 2.025-5.113 4.189l-7.936 19.155c-.896 2.163-.651 4.632.653 6.577l4.787 7.14-10.71 10.71-7.14-4.788c-1.944-1.306-4.415-1.55-6.577-.653l-19.155 7.936c-2.164.896-3.736 2.815-4.189 5.113l-1.661 8.433h-15.147l-1.661-8.433c-.453-2.298-2.025-4.217-4.189-5.113l-19.155-7.936c-2.163-.897-4.634-.652-6.577.653l-7.14 4.788-10.71-10.71 4.787-7.14c1.305-1.945 1.55-4.414.653-6.577l-7.936-19.155c-.896-2.164-2.815-3.736-5.113-4.189l-8.432-1.661zm73.046 55.623c26.495 0 48.051-21.555 48.051-48.05s-21.556-48.05-48.051-48.05-48.05 21.555-48.05 48.05 21.555 48.05 48.05 48.05zm0-82.1c18.775 0 34.051 15.274 34.051 34.05s-15.275 34.05-34.051 34.05-34.05-15.274-34.05-34.05 15.274-34.05 34.05-34.05zm53.638 321.88h-.179v-78.691c0-7.844-6.382-14.226-14.226-14.226h-78.466c-7.844 0-14.226 6.382-14.226 14.226v78.691h-16.969v-13.052c0-.21-.01-.419-.028-.628-2.889-32.065-17.584-61.767-41.38-83.631-15.552-14.291-34.129-24.406-54.155-29.745 19.093-11.42 31.908-32.295 31.908-56.113 0-1.307-.05-2.615-.127-3.92 1.325-.477 2.65-.955 4.014-1.459 2.746-1.017 4.57-3.636 4.57-6.564v-8.316c0-2.367-1.178-4.455-2.976-5.722v-.756c0-31.11-20.859-58.778-50.306-67.764-.348-2.912-2.466-5.331-5.364-5.995-9.937-2.273-20.378-2.273-30.311 0-2.899.664-5.017 3.083-5.365 5.995-29.447 8.986-50.306 36.654-50.306 67.764v.756c-1.798 1.267-2.976 3.355-2.976 5.722v8.316c0 2.929 1.823 5.548 4.57 6.564 1.364.505 2.688.982 4.013 1.459-.078 1.306-.128 2.615-.128 3.921 0 23.818 12.816 44.693 31.909 56.113-20.026 5.339-38.602 15.454-54.155 29.745-23.796 21.864-38.492 51.565-41.381 83.631-.019.209-.028.418-.028.628v13.462c-32.227 3.588-57.373 30.983-57.373 64.151 0 35.6 28.963 64.562 64.562 64.562h374.875c35.6 0 64.562-28.963 64.562-64.562s-28.963-64.562-64.562-64.562zm-62.584-78.917h17.894v16.023h-17.894zm-30.512.226c0-.114.111-.226.226-.226h16.286v23.023c0 3.866 3.134 7 7 7h31.894c3.866 0 7-3.134 7-7v-23.023h16.286c.114 0 .226.111.226.226v78.691h-78.917v-78.691zm-44.969 65.959v12.732h-28.155v-78.424c15.581 17.715 25.81 40.379 28.155 65.692zm-187.844-79.117c7.64-6.177 16.086-11.387 25.162-15.456v34.903c0 6.933 5.64 12.572 12.572 12.572h70.219c6.933 0 12.572-5.64 12.572-12.572v-34.903c9.076 4.07 17.523 9.28 25.163 15.457v91.849h-145.688zm39.162-20.664c10.657-3.198 21.965-4.916 33.682-4.916s23.024 1.718 33.682 4.916v38.683h-67.363v-38.683zm12.556-150.11-1.163 31.33c-.144 3.863 2.872 7.111 6.735 7.255 3.896.138 7.111-2.872 7.255-6.735l1.491-40.172c4.516-.576 9.099-.576 13.614 0l1.491 40.172c.141 3.774 3.244 6.74 6.99 6.74.088 0 .176-.002.265-.005 3.863-.144 6.879-3.392 6.735-7.255l-1.163-31.33c20.977 8.493 35.472 29.126 35.688 52.195h-113.628c.217-23.069 14.711-43.702 35.688-52.195zm70.482 66.195c-19.717 6.423-34.696 9.192-49.355 9.306-14.66-.113-29.64-2.883-49.356-9.306h98.712zm-100.681 14.062c20.037 6.359 35.702 9.13 51.275 9.244h.102c15.572-.114 31.236-2.885 51.273-9.244-.432 27.942-23.281 50.542-51.323 50.542s-50.894-22.601-51.325-50.543zm-35.519 103.943v78.424h-28.156v-12.732c2.346-25.313 12.575-47.977 28.156-65.692zm339.908 193.549h-374.875c-27.88 0-50.562-22.682-50.562-50.562s22.683-50.562 50.562-50.562h374.875c27.88 0 50.562 22.682 50.562 50.562s-22.683 50.562-50.562 50.562zm0-86.688c-19.92 0-36.126 16.206-36.126 36.126s16.206 36.127 36.126 36.127 36.127-16.207 36.127-36.127-16.207-36.126-36.127-36.126zm0 58.253c-12.2 0-22.126-9.926-22.126-22.127s9.926-22.126 22.126-22.126 22.127 9.926 22.127 22.126-9.926 22.127-22.127 22.127zm-124.958-58.253c-19.92 0-36.126 16.206-36.126 36.126s16.206 36.127 36.126 36.127 36.126-16.207 36.126-36.127-16.206-36.126-36.126-36.126zm0 58.253c-12.2 0-22.126-9.926-22.126-22.127s9.926-22.126 22.126-22.126 22.126 9.926 22.126 22.126-9.926 22.127-22.126 22.127zm59.129 4.632c0 3.866-3.134 7-7 7h-10.29c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.29c3.866 0 7 3.134 7 7zm0-53.517c0 3.866-3.134 7-7 7h-10.29c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.29c3.866 0 7 3.134 7 7zm30.991 53.517c0 3.866-3.134 7-7 7h-10.29c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.29c3.866 0 7 3.134 7 7zm-24.29-53.517c0-3.866 3.134-7 7-7h10.29c3.866 0 7 3.134 7 7s-3.134 7-7 7h-10.29c-3.866 0-7-3.134-7-7zm-131.659 53.517c0 3.866-3.134 7-7 7h-10.291c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.291c3.866 0 7 3.134 7 7zm6.7-53.517c0-3.866 3.134-7 7-7h10.291c3.866 0 7 3.134 7 7s-3.134 7-7 7h-10.291c-3.866 0-7-3.134-7-7zm-6.7 0c0 3.866-3.134 7-7 7h-10.291c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.291c3.866 0 7 3.134 7 7zm30.991 53.517c0 3.866-3.134 7-7 7h-10.291c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.291c3.866 0 7 3.134 7 7zm-90.121-62.885c-19.92 0-36.126 16.206-36.126 36.126s16.206 36.127 36.126 36.127 36.127-16.207 36.127-36.127-16.207-36.126-36.127-36.126zm0 58.253c-12.2 0-22.126-9.926-22.126-22.127s9.926-22.126 22.126-22.126 22.127 9.926 22.127 22.126-9.926 22.127-22.127 22.127zm-124.958-58.253c-19.92 0-36.126 16.206-36.126 36.126s16.206 36.127 36.126 36.127 36.126-16.207 36.126-36.127-16.206-36.126-36.126-36.126zm0 58.253c-12.2 0-22.126-9.926-22.126-22.127s9.926-22.126 22.126-22.126 22.126 9.926 22.126 22.126-9.926 22.127-22.126 22.127zm59.129-48.885c0 3.866-3.134 7-7 7h-10.29c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.29c3.866 0 7 3.134 7 7zm30.991 53.517c0 3.866-3.134 7-7 7h-10.291c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.291c3.866 0 7 3.134 7 7zm-24.291-53.517c0-3.866 3.134-7 7-7h10.291c3.866 0 7 3.134 7 7s-3.134 7-7 7h-10.291c-3.866 0-7-3.134-7-7zm-6.7 53.517c0 3.866-3.134 7-7 7h-10.29c-3.866 0-7-3.134-7-7s3.134-7 7-7h10.29c3.866 0 7 3.134 7 7z"/></svg>

                            </div>











                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section id="featured-section" class="container overflow-hidden mb-5 py-5">

            <div class="row py-md-5 mb-md-5">

                <div class="col-12 col-md-8 main-titles text-center d-flex flex-column mx-auto">

                    <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">Customize Your Page with</h6>

                    <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Feature & Benefits</h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="m-0">Customize your page effortlessly with our versatile features and enjoy the benefits of tailored online presence.</p>

                </div>

            </div>

            <input type="checkbox" id="feature-tab" class="d-none">

            <div class="row py-5 my-md-5">

                <div class="col-12 d-flex justify-content-center align-items-center">

                    <label for="feature-tab" class="f-tab-switch">

                        <div class="f-tab-1 f-tabs px-md-3 px-0 text-center">Essential Features</div>

                        <div class="f-tab-2 f-tabs px-md-3 px-0 text-center">Advanced Features</div>

                    </label>

                </div>

            </div>

            <div class="row fb-content justify-content-center p-3 p-md-0 mb-5">

                <div data-aos="fade-up" data-aos-delay="100" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(258, 42%, 45%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 480 320" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M24 -0.00976562C10.8424 -0.00976562 0 10.8321 0 23.9897V247.989C0 261.147 10.8424 271.99 24 271.99H136.141C135.956 273.511 135.653 275.247 135.125 277.272C133.252 284.432 128.669 294.025 117.047 303.975H103.969C93.2995 303.975 93.2995 319.975 103.969 319.975H200C210.669 319.975 210.669 303.975 200 303.975H139.172C145.411 295.898 148.863 287.999 150.609 281.318C151.523 277.823 151.875 274.764 152.062 271.99H200C210.818 272.141 210.818 255.838 200 255.99H24C19.4298 255.99 16 252.56 16 247.989V207.99H200C210.818 208.141 210.818 191.838 200 191.99H16V23.9897C16 19.4192 19.4298 15.9905 24 15.9905H328C332.57 15.9905 336 19.4192 336 23.9897C335.852 34.8034 352.148 34.8034 352 23.9897C352 10.8321 341.158 -0.00976562 328 -0.00976562H24ZM248 47.9587C234.842 47.9587 223.969 58.8488 223.969 72.0061V296.006C223.969 309.163 234.842 319.975 248 319.975H343.969C354.638 319.975 354.638 303.975 343.969 303.975H248C243.43 303.975 239.969 300.577 239.969 296.006V256.021H343.969C354.638 256.021 354.638 240.021 343.969 240.021H239.969V95.9742H400.016V120.021C400.016 130.69 416.016 130.69 416.016 120.021V72.0061C416.016 58.8485 405.142 47.9587 391.984 47.9587H248ZM39.8906 63.8491C35.4474 63.9096 31.9014 67.5632 31.9844 72.0061V88.0054C31.9844 98.6749 47.9844 98.6749 47.9844 88.0054V72.0061C48.0685 67.4939 44.4033 63.7974 39.8906 63.8491ZM248 63.97H391.984C396.555 63.97 400.016 67.431 400.016 72.0015V79.9702H239.969V72.0015C239.969 67.4307 243.43 63.97 248 63.97ZM39.8906 111.861C35.4474 111.921 31.9014 115.574 31.9844 120.017V167.955C31.9844 178.624 47.9844 178.624 47.9844 167.955V120.017C48.0685 115.505 44.4033 111.81 39.8906 111.861ZM263.891 111.861C259.447 111.921 255.901 115.575 255.984 120.017V136.017C255.984 146.686 271.984 146.686 271.984 136.017V120.017C272.069 115.505 268.403 111.81 263.891 111.861ZM391.984 143.986C378.827 143.986 368 154.797 368 167.955V296.001C368 309.159 378.827 319.97 391.984 319.97H456C469.158 319.97 479.969 309.159 479.969 296.001V167.955C479.969 154.797 469.158 143.986 456 143.986H391.984ZM263.891 159.876C259.471 159.937 255.935 163.535 255.984 167.955V215.97C255.984 226.64 271.984 226.64 271.984 215.97V167.955C272.033 163.466 268.38 159.826 263.891 159.876ZM391.984 159.997H456C460.57 159.997 463.969 163.396 463.969 167.966V176.006H384.016V167.959C384.016 163.388 387.414 159.997 391.984 159.997ZM384.016 192.013H463.969V271.967H384.016V192.013ZM167.984 240.029H184C194.669 240.029 194.669 224.013 184 224.013H167.602C156.549 224.524 157.315 240.541 167.984 240.029ZM312.031 271.967C301.362 271.967 301.362 287.966 312.031 287.966H328.031C338.701 287.966 338.701 271.967 328.031 271.967H312.031ZM384.016 287.966H463.969V296.013C463.969 300.584 460.57 303.982 456 303.982H391.984C387.414 303.982 384.016 300.584 384.016 296.013V287.966Z" fill="var(--clr)"/>

                            </svg>

                        <h3 class="text-center title">Responsive Design</h3>

                        <p class="text-center para">Ensures the website looks good and functions well on all devices, including desktops, tablets, and smartphones.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                    <div style="--clr:hsl(336, 56%, 46%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 471 471" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M424.779 0.918945H46.2227C20.7343 0.918945 0 21.6568 0 47.1524V293.369C0 319.087 20.9247 340.012 46.6431 340.012H147.084L137.795 378.922H118.451C98.353 378.922 82.0027 395.272 82.0027 415.371V427.933C82.0027 431.796 85.1326 434.93 88.9956 434.93H157.433L154.379 463.566C154.167 465.539 154.806 467.512 156.132 468.985C157.458 470.462 159.348 471.306 161.332 471.306L440.914 471.303C442.894 471.303 444.784 470.465 446.11 468.992C447.436 467.522 448.076 465.557 447.871 463.588L442.538 412.269C442.139 408.428 438.711 405.632 434.859 406.035C431.017 406.434 428.225 409.873 428.624 413.714L433.156 457.313H330.444L314.579 308.684C314.201 305.127 311.201 302.432 307.625 302.432H230.52L236.759 242.417H266.433V257.801C266.433 261.664 269.567 264.797 273.43 264.797C277.293 264.797 280.426 261.664 280.426 257.801V242.417H367.158V257.801C367.158 261.664 370.288 264.797 374.155 264.797C378.018 264.797 381.147 261.664 381.147 257.801V242.417H410.822L426.163 390.044C426.536 393.641 429.573 396.314 433.112 396.314C433.353 396.314 433.598 396.304 433.842 396.278C437.687 395.88 440.475 392.441 440.077 388.596L434.902 338.798C455.633 333.968 470.998 315.246 470.998 293.369V47.1524C471.002 21.6568 450.264 0.918945 424.779 0.918945ZM161.465 340.012H167.563L163.413 378.922H152.176L161.465 340.012ZM95.9921 420.94V415.371C95.9921 402.987 106.065 392.911 118.451 392.911H161.918L158.928 420.94H95.9921ZM316.372 457.313H169.115L184.154 316.421H301.333L316.372 457.313ZM280.426 228.424V211.639C280.426 187.729 299.878 168.274 323.792 168.274C347.703 168.274 367.158 187.729 367.158 211.639V228.424H280.426ZM381.151 228.424V211.639C381.151 180.013 355.418 154.284 323.792 154.284C292.166 154.284 266.437 180.013 266.437 211.639V228.424H230.456C226.873 228.424 223.869 231.134 223.499 234.699L218.612 281.701H98.0511C94.1882 281.701 91.0583 284.831 91.0583 288.694C91.0583 292.557 94.1882 295.69 98.0511 295.69H217.156L216.456 302.432H177.865C174.29 302.432 171.289 305.127 170.909 308.684L169.058 326.023H46.6431C29.4232 326.023 15.2794 312.616 14.0828 295.694H74.7332C78.5961 295.694 81.726 292.564 81.726 288.701C81.726 284.838 78.5961 281.705 74.7332 281.705H13.9893V47.1524C13.9893 29.372 28.4494 14.9083 46.2227 14.9083H424.779C442.552 14.9083 457.013 29.372 457.013 47.1524V281.701H428.973L424.089 234.699C423.719 231.134 420.715 228.424 417.132 228.424H381.151ZM433.443 324.729L430.425 295.69H456.919C455.938 309.403 446.362 320.967 433.443 324.729Z" fill="var(--clr)"/>

                            <path d="M221.709 87.701H165.169V66.7152C165.169 54.1165 154.917 43.8644 142.319 43.8644C129.72 43.8644 119.468 54.1165 119.468 66.7152V87.701H62.9282C53.7326 87.701 46.251 95.1826 46.251 104.375V115.791C46.251 123.168 51.0734 129.432 57.7249 131.627L67.3051 204.629C69.1629 218.79 81.3339 229.467 95.6143 229.467H189.023C203.303 229.467 215.471 218.79 217.332 204.629L226.912 131.627C233.564 129.435 238.386 123.168 238.386 115.791V104.375C238.382 95.1826 230.901 87.701 221.709 87.701ZM221.709 101.69C223.189 101.69 224.393 102.894 224.393 104.375V115.791C224.393 117.272 223.189 118.479 221.709 118.479H165.169V101.69H221.709ZM133.457 66.7152C133.457 61.8281 137.431 57.8537 142.319 57.8537C147.202 57.8537 151.176 61.8281 151.176 66.7152V142.26C151.176 147.148 147.202 151.122 142.319 151.122C137.431 151.122 133.457 147.148 133.457 142.26V66.7152ZM60.2403 104.375C60.2403 102.894 61.4477 101.69 62.9282 101.69H119.468V118.479H62.9282C61.4477 118.479 60.2403 117.272 60.2403 115.791V104.375ZM203.458 202.81C202.513 210.03 196.303 215.477 189.023 215.477H95.6143C88.3304 215.477 82.1245 210.03 81.1758 202.81L71.9478 132.468H119.468V142.26C119.468 154.863 129.72 165.111 142.319 165.111C154.921 165.111 165.169 154.863 165.169 142.26V132.468H212.693L203.458 202.81Z" fill="var(--clr)"/>

                            <path d="M219.661 367.746V337.669C219.661 333.806 216.531 330.676 212.668 330.676C208.805 330.676 205.672 333.806 205.672 337.669V367.746C205.672 388.19 222.302 404.82 242.746 404.82C263.185 404.82 279.816 388.19 279.816 367.746V337.669C279.816 333.806 276.686 330.676 272.823 330.676C268.96 330.676 265.826 333.806 265.826 337.669V367.746C265.826 380.474 255.474 390.831 242.746 390.831C230.018 390.831 219.661 380.474 219.661 367.746Z" fill="var(--clr)"/>

                            <path d="M301.623 71.9761H271.776C267.913 71.9761 264.783 75.1096 264.783 78.9725C264.783 82.8355 267.913 85.9654 271.776 85.9654H301.623C305.486 85.9654 308.616 82.8355 308.616 78.9725C308.616 75.1096 305.486 71.9761 301.623 71.9761Z" fill="var(--clr)"/>

                            <path d="M332.403 85.9654H429.401C433.264 85.9654 436.394 82.8355 436.394 78.9725C436.394 75.1096 433.264 71.9761 429.401 71.9761H332.403C328.536 71.9761 325.406 75.1096 325.406 78.9725C325.406 82.8355 328.536 85.9654 332.403 85.9654Z" fill="var(--clr)"/>

                            <path d="M301.623 104.623H271.776C267.913 104.623 264.783 107.753 264.783 111.616C264.783 115.479 267.913 118.612 271.776 118.612H301.623C305.486 118.612 308.616 115.479 308.616 111.616C308.616 107.753 305.486 104.623 301.623 104.623Z" fill="var(--clr)"/>

                            <path d="M436.394 111.616C436.394 107.753 433.264 104.623 429.401 104.623H332.403C328.536 104.623 325.406 107.753 325.406 111.616C325.406 115.479 328.536 118.612 332.403 118.612H429.401C433.264 118.612 436.394 115.479 436.394 111.616Z" fill="var(--clr)"/>

                            </svg>



                        <h3 class="text-center title">E-Commerce Capabilities</h3>

                        <p class="text-center para">For online stores, including shopping cart, checkout, payment gateway, and inventory management.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(13, 83%, 55%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 434 390" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M157.813 313.968H26.3318C22.3006 314.095 18.2974 313.256 14.6564 311.521C11.0154 309.786 7.84209 307.205 5.40127 303.995C3.05781 300.561 1.56928 296.617 1.05983 292.492C0.550375 288.366 1.03478 284.179 2.47263 280.279L27.2534 205.486C28.1062 202.906 29.9489 200.77 32.3763 199.549C34.8036 198.327 37.6168 198.12 40.1968 198.973C42.7768 199.826 44.9124 201.669 46.1338 204.096C47.3551 206.523 47.5622 209.336 46.7094 211.916L21.9286 286.709C21.5387 287.532 21.3365 288.431 21.3365 289.341C21.3365 290.251 21.5387 291.15 21.9286 291.973C22.4931 292.534 23.1761 292.961 23.9275 293.223C24.6788 293.486 25.4794 293.576 26.2704 293.488H157.813C160.529 293.488 163.134 294.567 165.054 296.487C166.975 298.408 168.053 301.012 168.053 303.728C168.053 306.444 166.975 309.049 165.054 310.969C163.134 312.889 160.529 313.968 157.813 313.968Z" fill="var(--clr)"/>

                            <path d="M369.166 200.509C368.074 200.508 366.989 200.335 365.951 199.997C363.374 199.141 361.242 197.297 360.024 194.87C358.807 192.443 358.603 189.631 359.459 187.054L412.072 27.5145C413.649 22.7222 411.928 20.6947 407.669 20.6947L123.181 20.4899C119.283 20.797 115.551 22.2029 112.419 24.5446C109.287 26.8862 106.883 30.0676 105.486 33.72L85.211 95.3648C84.8042 96.6578 84.1447 97.8571 83.2708 98.8933C82.3969 99.9295 81.3259 100.782 80.1201 101.401C78.9142 102.02 77.5974 102.394 76.2461 102.5C74.8948 102.606 73.5358 102.443 72.248 102.02C70.9602 101.597 69.7691 100.923 68.744 100.036C67.7188 99.1492 66.8799 98.0677 66.2759 96.8542C65.6719 95.6407 65.3148 94.3194 65.2254 92.9668C65.136 91.6143 65.316 90.2574 65.755 88.975L86.0302 27.3302C88.8059 19.5956 93.8253 12.8645 100.447 7.99781C107.068 3.13111 114.991 0.349925 123.201 0.0098877L407.689 0.214687C411.716 0.0945646 415.714 0.936764 419.351 2.67138C422.988 4.40599 426.158 6.98298 428.599 10.1884C430.943 13.6255 432.431 17.5728 432.941 21.7016C433.45 25.8304 432.966 30.0211 431.528 33.9248L378.894 193.484C378.218 195.53 376.913 197.31 375.167 198.571C373.42 199.832 371.321 200.51 369.166 200.509Z" fill="var(--clr)"/>

                            <path d="M50.4989 177.981C48.8796 177.979 47.2839 177.592 45.8429 176.854C44.4019 176.115 43.1565 175.046 42.2091 173.732C41.2617 172.419 40.6392 170.9 40.3927 169.3C40.1463 167.699 40.2829 166.063 40.7914 164.526L52.2601 129.915C52.6532 128.603 53.3053 127.384 54.1779 126.329C55.0504 125.273 56.1257 124.404 57.3401 123.772C58.5546 123.139 59.8835 122.757 61.2482 122.647C62.613 122.538 63.9859 122.703 65.2857 123.133C66.5856 123.563 67.786 124.249 68.8159 125.151C69.8459 126.053 70.6845 127.153 71.2821 128.385C71.8797 129.617 72.2242 130.956 72.2953 132.323C72.3663 133.69 72.1624 135.058 71.6957 136.345L60.2269 170.956C59.5504 173.002 58.2461 174.782 56.4996 176.043C54.753 177.304 52.6532 177.982 50.4989 177.981Z" fill="var(--clr)"/>

                            <path d="M407.629 83.6912L81.6697 83.5274C78.9539 83.5274 76.3493 82.4485 74.4289 80.5281C72.5085 78.6078 71.4297 76.0032 71.4297 73.2874C71.4297 70.5715 72.5085 67.967 74.4289 66.0466C76.3493 64.1262 78.9539 63.0474 81.6697 63.0474L407.609 63.2112C410.325 63.2112 412.929 64.2901 414.85 66.2104C416.77 68.1308 417.849 70.7354 417.849 73.4512C417.849 76.167 416.77 78.7716 414.85 80.692C412.929 82.6123 410.325 83.6912 407.609 83.6912H407.629Z" fill="var(--clr)"/>

                            <path d="M323.509 49.0228C328.722 44.9293 330.552 38.5604 327.597 34.7974C324.642 31.0345 318.021 31.3024 312.808 35.396C307.595 39.4895 305.765 45.8585 308.719 49.6214C311.674 53.3843 318.296 53.1163 323.509 49.0228Z" fill="var(--clr)"/>

                            <path d="M323.509 49.0228C328.722 44.9293 330.552 38.5604 327.597 34.7974C324.642 31.0345 318.021 31.3024 312.808 35.396C307.595 39.4895 305.765 45.8585 308.719 49.6214C311.674 53.3843 318.296 53.1163 323.509 49.0228Z" fill="var(--clr)"/>

                            <path d="M355.3 49.0284C360.513 44.9349 362.343 38.5659 359.388 34.803C356.433 31.0401 349.812 31.3081 344.599 35.4016C339.386 39.4951 337.556 45.8641 340.51 49.627C343.465 53.3899 350.087 53.1219 355.3 49.0284Z" fill="var(--clr)"/>

                            <path d="M387.056 49.0178C392.268 44.9243 394.099 38.5553 391.144 34.7924C388.189 31.0294 381.568 31.2974 376.355 35.391C371.142 39.4845 369.311 45.8534 372.266 49.6164C375.221 53.3793 381.843 53.1113 387.056 49.0178Z" fill="var(--clr)"/>

                            <path d="M414.96 351.59H165.452C163.358 351.59 161.315 350.947 159.598 349.75C157.88 348.553 156.571 346.857 155.847 344.893C150.184 329.467 147.313 313.156 147.368 296.724C147.368 258.828 162.422 222.483 189.219 195.686C216.016 168.89 252.36 153.835 290.257 153.835C328.153 153.835 364.498 168.89 391.295 195.686C418.092 222.483 433.146 258.828 433.146 296.724C433.176 313.158 430.291 329.467 424.626 344.893C423.898 346.867 422.58 348.569 420.85 349.768C419.12 350.966 417.064 351.602 414.96 351.59ZM172.804 331.11H407.587C410.935 319.956 412.625 308.37 412.604 296.724C412.604 264.259 399.708 233.124 376.752 210.168C353.796 187.212 322.66 174.315 290.195 174.315C257.731 174.315 226.595 187.212 203.639 210.168C180.683 233.124 167.787 264.259 167.787 296.724C167.775 308.369 169.465 319.954 172.804 331.11Z" fill="var(--clr)"/>

                            <path d="M290.197 190.617C287.481 190.617 284.877 189.538 282.956 187.618C281.036 185.698 279.957 183.093 279.957 180.377V163.993C279.957 161.277 281.036 158.673 282.956 156.752C284.877 154.832 287.481 153.753 290.197 153.753C292.913 153.753 295.517 154.832 297.438 156.752C299.358 158.673 300.437 161.277 300.437 163.993V180.377C300.437 183.093 299.358 185.698 297.438 187.618C295.517 189.538 292.913 190.617 290.197 190.617Z" fill="var(--clr)"/>

                            <path d="M372.423 224.675C370.4 224.675 368.421 224.075 366.738 222.951C365.056 221.827 363.743 220.23 362.968 218.361C362.192 216.491 361.987 214.434 362.38 212.449C362.773 210.464 363.745 208.639 365.173 207.206L376.724 195.676C378.655 193.81 381.242 192.778 383.927 192.802C386.612 192.825 389.18 193.902 391.079 195.801C392.977 197.699 394.054 200.267 394.078 202.952C394.101 205.637 393.069 208.224 391.204 210.155L379.653 221.685C377.734 223.6 375.134 224.675 372.423 224.675Z" fill="var(--clr)"/>

                            <path d="M422.804 306.923H406.42C403.704 306.923 401.099 305.844 399.179 303.924C397.259 302.004 396.18 299.399 396.18 296.683C396.18 293.967 397.259 291.363 399.179 289.442C401.099 287.522 403.704 286.443 406.42 286.443H422.804C425.519 286.443 428.124 287.522 430.044 289.442C431.965 291.363 433.044 293.967 433.044 296.683C433.044 299.399 431.965 302.004 430.044 303.924C428.124 305.844 425.519 306.923 422.804 306.923Z" fill="var(--clr)"/>

                            <path d="M173.993 306.923H157.609C154.893 306.923 152.289 305.844 150.368 303.924C148.448 302.004 147.369 299.399 147.369 296.683C147.369 293.967 148.448 291.363 150.368 289.442C152.289 287.522 154.893 286.443 157.609 286.443H173.993C176.709 286.443 179.314 287.522 181.234 289.442C183.154 291.363 184.233 293.967 184.233 296.683C184.233 299.399 183.154 302.004 181.234 303.924C179.314 305.844 176.709 306.923 173.993 306.923Z" fill="var(--clr)"/>

                            <path d="M207.949 224.675C205.238 224.675 202.638 223.6 200.719 221.685L189.189 210.155C187.324 208.224 186.292 205.637 186.315 202.952C186.338 200.267 187.415 197.699 189.314 195.801C191.212 193.902 193.781 192.825 196.465 192.802C199.15 192.778 201.737 193.81 203.668 195.676L215.199 207.206C216.627 208.639 217.599 210.464 217.992 212.449C218.385 214.434 218.18 216.491 217.404 218.361C216.629 220.23 215.316 221.827 213.634 222.951C211.951 224.075 209.972 224.675 207.949 224.675Z" fill="var(--clr)"/>

                            <path d="M290.196 323.225C284.931 323.225 279.783 321.664 275.405 318.738C271.026 315.813 267.614 311.655 265.599 306.79C263.584 301.925 263.057 296.572 264.084 291.407C265.111 286.243 267.647 281.499 271.37 277.775C275.094 274.052 279.838 271.516 285.002 270.489C290.167 269.462 295.52 269.989 300.385 272.004C305.25 274.019 309.408 277.431 312.333 281.81C315.259 286.188 316.82 291.336 316.82 296.601C316.82 303.662 314.015 310.434 309.022 315.427C304.029 320.42 297.257 323.225 290.196 323.225ZM290.196 290.601C288.981 290.601 287.793 290.961 286.783 291.636C285.772 292.311 284.985 293.271 284.52 294.393C284.055 295.516 283.933 296.751 284.17 297.943C284.407 299.135 284.993 300.23 285.852 301.089C286.711 301.948 287.806 302.534 288.998 302.771C290.189 303.008 291.425 302.886 292.547 302.421C293.67 301.956 294.63 301.168 295.305 300.158C295.98 299.148 296.34 297.96 296.34 296.745C296.34 295.938 296.181 295.139 295.873 294.393C295.564 293.648 295.111 292.971 294.541 292.4C293.97 291.83 293.293 291.377 292.547 291.068C291.802 290.76 291.003 290.601 290.196 290.601Z" fill="var(--clr)"/>

                            <path d="M303.897 298.342C301.672 298.346 299.506 297.626 297.727 296.289C295.947 294.953 294.652 293.073 294.036 290.935C293.421 288.796 293.518 286.516 294.315 284.438C295.111 282.36 296.563 280.598 298.45 279.418L357.842 242.145C358.982 241.429 360.252 240.946 361.579 240.721C362.907 240.497 364.265 240.536 365.577 240.836C366.89 241.137 368.13 241.693 369.227 242.472C370.324 243.252 371.257 244.24 371.973 245.381C372.688 246.521 373.172 247.791 373.397 249.118C373.621 250.446 373.582 251.804 373.282 253.116C372.981 254.429 372.425 255.669 371.645 256.766C370.866 257.864 369.877 258.797 368.737 259.512L309.243 296.786C307.636 297.781 305.787 298.319 303.897 298.342Z" fill="var(--clr)"/>

                            <path d="M111.406 218.9H12.2009C9.48512 218.9 6.88054 217.821 4.96017 215.901C3.03979 213.981 1.96094 211.376 1.96094 208.66C1.96094 205.944 3.03979 203.34 4.96017 201.419C6.88054 199.499 9.48512 198.42 12.2009 198.42H111.406C114.122 198.42 116.726 199.499 118.647 201.419C120.567 203.34 121.646 205.944 121.646 208.66C121.646 211.376 120.567 213.981 118.647 215.901C116.726 217.821 114.122 218.9 111.406 218.9Z" fill="var(--clr)"/>

                            <path d="M202.173 143.37H11.156C8.4402 143.37 5.83561 142.291 3.91524 140.371C1.99487 138.45 0.916016 135.846 0.916016 133.13C0.916016 130.414 1.99487 127.809 3.91524 125.889C5.83561 123.969 8.4402 122.89 11.156 122.89H202.173C204.889 122.89 207.493 123.969 209.414 125.889C211.334 127.809 212.413 130.414 212.413 133.13C212.413 135.846 211.334 138.45 209.414 140.371C207.493 142.291 204.889 143.37 202.173 143.37Z" fill="var(--clr)"/>

                            <path d="M111.407 351.59H32.6814C29.9656 351.59 27.361 350.511 25.4406 348.591C23.5203 346.671 22.4414 344.066 22.4414 341.35C22.4414 338.634 23.5203 336.03 25.4406 334.109C27.361 332.189 29.9656 331.11 32.6814 331.11H111.407C114.122 331.11 116.727 332.189 118.647 334.109C120.568 336.03 121.647 338.634 121.647 341.35C121.647 344.066 120.568 346.671 118.647 348.591C116.727 350.511 114.122 351.59 111.407 351.59Z" fill="var(--clr)"/>

                            <path d="M273.874 389.99H258.166C255.45 389.99 252.845 388.911 250.925 386.991C249.005 385.07 247.926 382.466 247.926 379.75C247.926 377.034 249.005 374.43 250.925 372.509C252.845 370.589 255.45 369.51 258.166 369.51H273.874C276.59 369.51 279.194 370.589 281.115 372.509C283.035 374.43 284.114 377.034 284.114 379.75C284.114 382.466 283.035 385.07 281.115 386.991C279.194 388.911 276.59 389.99 273.874 389.99Z" fill="var(--clr)"/>

                            <path d="M222.06 389.99H140.365C137.649 389.99 135.045 388.911 133.124 386.991C131.204 385.07 130.125 382.466 130.125 379.75C130.125 377.034 131.204 374.43 133.124 372.509C135.045 370.589 137.649 369.51 140.365 369.51H222.06C224.776 369.51 227.38 370.589 229.3 372.509C231.221 374.43 232.3 377.034 232.3 379.75C232.3 382.466 231.221 385.07 229.3 386.991C227.38 388.911 224.776 389.99 222.06 389.99Z" fill="var(--clr)"/>

                            </svg>



                        <h3 class="text-center title">Fast Loading Speed</h3>

                        <p class="text-center para">Optimized for quick loading to improve user experience and SEO rankings.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                    <div style="--clr:hsl(96, 56%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 468 521" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M434.257 175.6C427.162 175.626 420.266 177.946 414.598 182.214C408.93 186.481 404.794 192.467 402.807 199.278H337.245C335.872 188.734 332.13 178.637 326.298 169.746L388.609 107.343C397.247 112.766 407.579 114.819 417.634 113.111C427.689 111.402 436.764 106.052 443.126 98.0803C449.488 90.1089 452.693 80.0742 452.129 69.8907C451.565 59.7073 447.272 50.0878 440.069 42.8674C432.865 35.647 423.256 31.3312 413.074 30.7432C402.892 30.1553 392.85 33.3363 384.863 39.6796C376.877 46.0228 371.505 55.0843 369.773 65.1352C368.04 75.1861 370.069 85.5229 375.471 94.1737L314.068 155.664C302.048 145.092 286.809 138.89 270.822 138.064C254.836 137.237 239.038 141.835 225.992 151.111L169.301 94.4154C172.907 87.2129 170.532 39.6045 171.17 31.237C171.16 23.0042 167.885 15.1115 162.063 9.29057C156.241 3.46962 148.347 0.195841 140.115 0.1875H122.824C120.38 0.220364 118.047 1.21433 116.33 2.95426C114.614 4.6942 113.651 7.04014 113.651 9.48437C113.651 11.9286 114.614 14.2745 116.331 16.0143C118.047 17.7542 120.38 18.748 122.824 18.7807H140.115C143.418 18.7828 146.586 20.0956 148.922 22.4311C151.258 24.7665 152.572 27.9336 152.576 31.237V83.949C152.579 85.5862 152.259 87.2079 151.634 88.721C151.009 90.2342 150.091 91.6089 148.933 92.7664C147.775 93.9238 146.4 94.8411 144.887 95.4656C143.374 96.0901 141.752 96.4095 140.115 96.4054H31.1589C27.8562 96.4024 24.6896 95.089 22.3543 92.7536C20.0189 90.4183 18.7056 87.2517 18.7026 83.949V31.237C18.7056 27.9343 20.019 24.7678 22.3543 22.4324C24.6897 20.0971 27.8562 18.7837 31.1589 18.7807H85.6368C88.0785 18.7444 90.408 17.7489 92.1218 16.0094C93.8357 14.2698 94.7963 11.9258 94.7962 9.48382C94.7962 7.04182 93.8354 4.69789 92.1214 2.95843C90.4075 1.21897 88.078 0.223645 85.6363 0.1875H31.1589C22.9267 0.196187 15.0342 3.47026 9.21316 9.29129C3.39213 15.1123 0.118062 23.0048 0.109375 31.237V83.949C0.118038 92.1812 3.3921 100.074 9.21313 105.895C15.0342 111.716 22.9267 114.99 31.1589 114.999H140.115C146.468 114.937 152.649 112.921 157.816 109.223L212.387 163.797C205.745 171.88 200.996 181.347 198.489 191.504C195.982 201.661 195.78 212.25 197.898 222.495L148.665 252.831C143.521 247.571 137.378 243.392 130.596 240.539C123.814 237.687 116.531 236.218 109.174 236.22C35.9209 238.78 35.7898 344.422 109.175 347.027C118.468 346.951 127.594 344.549 135.72 340.04C143.847 335.531 150.714 329.058 155.696 321.213C160.678 313.368 163.616 304.4 164.242 295.128C164.868 285.856 163.161 276.574 159.278 268.131L204.086 240.521C210.356 252.832 220.077 263.049 232.061 269.924V397.025L204.116 369.08C198.099 363.04 189.969 359.575 181.445 359.418C172.92 359.26 164.668 362.422 158.432 368.235C152.195 374.049 148.463 382.059 148.022 390.574C147.582 399.088 150.468 407.441 156.072 413.867L177.451 438.415C179.087 440.218 181.365 441.308 183.795 441.451C186.226 441.593 188.615 440.777 190.451 439.177C192.286 437.577 193.421 435.321 193.611 432.894C193.801 430.466 193.032 428.061 191.468 426.195L170.061 401.619C167.687 398.821 166.482 395.217 166.696 391.555C166.909 387.893 168.524 384.453 171.206 381.95C173.888 379.447 177.431 378.073 181.099 378.112C184.767 378.152 188.28 379.603 190.907 382.163L229.959 421.22C231.666 422.876 233.82 423.996 236.156 424.444C238.491 424.892 240.907 424.647 243.106 423.741C245.304 422.834 247.19 421.305 248.531 419.341C249.872 417.376 250.61 415.063 250.654 412.686L250.654 224.517C250.712 220.709 252.266 217.076 254.979 214.404C257.693 211.731 261.349 210.233 265.158 210.233C268.967 210.233 272.623 211.731 275.336 214.404C278.05 217.077 279.603 220.71 279.661 224.518V320.372C279.677 321.903 279.997 323.415 280.603 324.821C281.209 326.226 282.088 327.498 283.19 328.56C284.292 329.623 285.594 330.456 287.02 331.011C288.447 331.566 289.97 331.832 291.5 331.793C300.669 331.612 347.516 331.575 363.758 362.924C365.556 366.602 366.431 370.663 366.31 374.754V474.141C366.284 481.58 363.317 488.706 358.056 493.965C352.795 499.225 345.667 502.189 338.228 502.212H273.243C268.418 502.209 263.65 501.172 259.261 499.171C254.871 497.169 250.961 494.25 247.795 490.61L216.005 454.258C215.201 453.339 214.224 452.587 213.13 452.045C212.036 451.503 210.846 451.182 209.628 451.101C208.409 451.019 207.187 451.178 206.03 451.569C204.874 451.959 203.805 452.574 202.886 453.378C201.967 454.181 201.215 455.158 200.673 456.252C200.131 457.346 199.81 458.536 199.729 459.755C199.647 460.973 199.806 462.195 200.197 463.352C200.587 464.509 201.202 465.577 202.005 466.496L233.79 502.839C238.701 508.479 244.763 513.001 251.568 516.1C258.374 519.199 265.765 520.804 273.243 520.806H338.23C350.591 520.753 362.431 515.82 371.172 507.08C379.913 498.34 384.849 486.501 384.904 474.14L384.904 374.754C384.756 327.371 322.399 312.364 298.255 313.237L298.256 271.846C308.672 266.728 317.671 259.13 324.462 249.718C331.252 240.306 335.625 229.37 337.197 217.871H402.831C404.566 223.738 407.9 229.006 412.46 233.084C417.021 237.162 422.627 239.889 428.65 240.96C434.674 242.03 440.876 241.402 446.563 239.145C452.249 236.889 457.194 233.093 460.844 228.183C464.494 223.273 466.705 217.444 467.227 211.349C467.75 205.253 466.565 199.133 463.805 193.673C461.044 188.214 456.818 183.631 451.599 180.439C446.38 177.246 440.374 175.571 434.257 175.6ZM410.615 49.2679C416.662 49.3346 422.439 51.7836 426.691 56.0831C430.943 60.3827 433.328 66.186 433.328 72.2332C433.328 78.2804 430.943 84.0835 426.691 88.383C422.438 92.6825 416.661 95.1313 410.615 95.1978C404.568 95.1311 398.791 92.6822 394.539 88.3826C390.287 84.0831 387.902 78.2798 387.902 72.2326C387.902 66.1854 390.287 60.3822 394.539 56.0828C398.792 51.7833 404.568 49.3345 410.615 49.2679ZM109.174 328.434C99.4687 328.347 90.1905 324.43 83.3584 317.536C76.5263 310.642 72.6933 301.329 72.6934 291.623C72.6935 281.918 76.5266 272.604 83.3588 265.711C90.191 258.817 99.4692 254.9 109.175 254.813C118.88 254.901 128.158 258.817 134.99 265.711C141.822 272.605 145.655 281.918 145.655 291.624C145.655 301.33 141.822 310.643 134.99 317.536C128.158 324.43 118.88 328.347 109.174 328.434ZM298.255 250.286V224.517C298.255 215.739 294.768 207.321 288.561 201.114C282.354 194.907 273.936 191.42 265.158 191.42C256.38 191.42 247.962 194.907 241.755 201.114C235.548 207.321 232.061 215.739 232.061 224.517V246.783C196.683 215.955 220.37 155.793 267.143 156.399C278.06 156.467 288.681 159.956 297.512 166.375C306.343 172.794 312.94 181.82 316.374 192.183C319.808 202.547 319.907 213.726 316.657 224.148C313.407 234.571 306.971 243.712 298.255 250.286ZM434.257 222.874C430.489 222.82 426.894 221.285 424.249 218.601C421.604 215.918 420.122 212.301 420.122 208.534C420.122 204.766 421.605 201.149 424.25 198.466C426.895 195.783 430.49 194.248 434.257 194.194C438.025 194.248 441.619 195.783 444.264 198.466C446.909 201.15 448.392 204.766 448.392 208.534C448.392 212.302 446.909 215.918 444.264 218.602C441.619 221.285 438.024 222.82 434.257 222.874Z" fill="var(--clr)"/>

                            </svg>

                        <h3 class="text-center title">Interactive Elements</h3>

                        <p class="text-center para">Such as sliders, hover effects, or interactive infographics to engage users.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(32, 88%, 50%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 512 366" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M18.2879 292.7H182.875C200.309 315.889 223.12 334.798 249.405 347.563H18.2879V292.7ZM18.2879 155.544H148.299C146.971 164.493 146.251 173.637 146.251 182.976C146.251 192.314 146.971 201.458 148.299 210.407H18.2879V155.544ZM329.077 18.3885C420.088 18.3885 493.713 91.9651 493.713 182.976C493.713 273.986 420.088 347.563 329.077 347.563C238.067 347.563 164.539 273.986 164.539 182.976C164.539 91.9651 238.067 18.3885 329.077 18.3885ZM18.2879 18.3885H249.405C223.071 31.1532 200.26 50.1112 182.826 73.2509H18.2879V18.3885ZM9.09539 0.101074C4.09682 0.101074 0.000430945 4.19747 0.000430945 9.19604V82.3946C-0.0483356 87.442 4.04805 91.5384 9.09539 91.5871H170.732C162.539 105.729 156.2 121.066 152.018 137.257H9.09539C4.09682 137.257 0.000430945 141.353 0.000430945 146.352V219.551C-0.0483356 224.598 4.04805 228.694 9.09539 228.743H152.018C156.2 244.934 162.588 260.271 170.732 274.413H9.09539C4.09682 274.413 0.000430945 278.509 0.000430945 283.508V356.706C-0.0483356 361.754 4.04805 365.85 9.09539 365.899H329.077C429.987 365.899 512 283.849 512 182.976C512 82.0654 429.987 0.101074 329.077 0.101074H9.09539Z" fill="var(--clr)"/>

                            <path d="M385.841 126.211L338.269 245.263V182.976C338.269 177.928 334.124 173.832 329.076 173.832H266.789L385.841 126.211ZM398.898 101.353L215.987 174.454C206.416 178.123 209.172 192.363 219.413 192.119H319.994V292.7C320.091 302.697 333.855 305.367 337.61 296.077L410.76 113.239C413.759 105.778 406.371 98.4022 398.898 101.353Z" fill="var(--clr)"/>

                            </svg>

                        <h3 class="text-center title">Easy Navigation</h3>

                        <p class="text-center para">Intuitive and simple navigation structure, including a clear menu, to help users find information quickly.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                    <div style="--clr:hsl(298, 90%, 45%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 466 464" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M372.172 268.616C376.516 267.762 379.697 263.884 379.697 259.462V204.538C379.697 200.039 376.516 196.238 372.172 195.384L361.001 193.212C358.441 184.679 355.028 176.378 350.761 168.465L357.122 158.924C359.605 155.2 359.139 150.235 355.959 147.055L317.404 108.267C314.223 105.086 309.336 104.621 305.612 107.103L296.148 113.542C288.313 109.275 280.012 105.862 271.556 103.302L269.384 92.0533C268.531 87.6315 264.73 84.5284 260.23 84.5284H205.695C201.273 84.5284 197.394 87.7091 196.541 92.0533L194.369 103.302C185.835 105.862 177.612 109.353 169.777 113.619L160.313 107.181C156.589 104.698 151.702 105.164 148.521 108.344L109.966 147.132C106.863 150.313 106.32 155.278 108.803 159.001L115.164 168.543C110.897 176.456 107.484 184.756 104.924 193.29L93.6752 195.462C89.331 196.315 86.1504 200.194 86.1504 204.616V259.539C86.1504 264.039 89.331 267.84 93.6752 268.693L104.924 270.865C107.484 279.399 110.897 287.699 115.164 295.612L108.803 305.154C106.32 308.878 106.786 313.842 109.966 316.945L148.521 355.733C151.624 358.914 156.589 359.379 160.313 356.897L169.777 350.458C177.612 354.725 185.913 358.138 194.369 360.776L196.541 372.024C197.394 376.446 201.195 379.549 205.695 379.549H260.23C264.652 379.549 268.531 376.368 269.384 372.024L271.556 360.776C280.09 358.216 288.313 354.725 296.148 350.536L305.612 356.975C309.336 359.457 314.223 358.991 317.404 355.811L355.959 317.023C359.062 313.842 359.605 308.878 357.122 305.231L350.761 295.69C355.028 287.777 358.441 279.476 361.001 270.943L372.172 268.616ZM344.555 260.47C341.84 271.253 337.573 281.648 331.91 291.268C330.049 294.371 330.204 298.25 332.143 301.275L337.496 309.265L309.724 337.193L301.811 331.84C298.786 329.823 294.907 329.745 291.881 331.53C282.339 337.27 272.022 341.537 261.316 344.252C257.826 345.105 255.188 347.976 254.49 351.544L252.628 360.931H213.375L211.513 351.544C210.815 347.976 208.177 345.183 204.686 344.252C193.981 341.537 183.663 337.27 174.121 331.53C171.018 329.668 167.139 329.745 164.192 331.84L156.279 337.193L128.507 309.265L133.859 301.275C135.876 298.25 135.954 294.371 134.092 291.268C128.429 281.648 124.085 271.331 121.447 260.47C120.594 256.979 117.724 254.264 114.233 253.566L104.924 251.704V212.218L114.233 210.356C117.801 209.658 120.594 206.943 121.447 203.452C124.163 192.669 128.429 182.274 134.092 172.655C135.954 169.551 135.799 165.673 133.859 162.647L128.507 154.657L156.279 126.73L164.192 132.082C167.139 134.099 171.018 134.177 174.121 132.393C183.663 126.652 193.981 122.385 204.686 119.67C208.177 118.817 210.815 115.947 211.513 112.378L213.375 102.991H252.628L254.49 112.378C255.188 115.947 257.826 118.739 261.316 119.67C272.022 122.385 282.339 126.73 291.881 132.393C294.984 134.255 298.863 134.099 301.811 132.082L309.724 126.73L337.496 154.657L332.143 162.647C330.126 165.673 330.049 169.551 331.91 172.655C337.573 182.274 341.918 192.591 344.555 203.452C345.409 206.943 348.279 209.658 351.77 210.356L361.079 212.218V251.704L351.77 253.566C348.279 254.264 345.409 256.979 344.555 260.47Z" fill="var(--clr)"/>

                            <path d="M233.001 139.995C182.577 139.995 141.539 181.265 141.539 232C141.539 282.735 182.577 324.005 233.001 324.005C283.425 324.005 324.463 282.735 324.463 232C324.463 181.265 283.425 139.995 233.001 139.995ZM233.001 305.309C192.817 305.309 160.157 272.417 160.157 232C160.157 191.583 192.817 158.691 233.001 158.691C273.185 158.691 305.845 191.583 305.845 232C305.845 272.417 273.185 305.309 233.001 305.309Z" fill="var(--clr)"/>

                            <path d="M17.3395 277.537C17.805 277.537 18.348 277.459 18.8135 277.382C23.8559 276.528 27.3468 271.719 26.4935 266.676C24.7092 255.273 23.7008 243.636 23.7008 232C23.7008 114.628 118.576 19.2097 235.172 19.2097C280.942 19.2097 323.997 33.6388 360.457 60.7903C356.113 68.6254 353.708 77.7018 353.708 87.2436C353.708 117.576 378.222 142.245 408.321 142.245C438.421 142.245 462.935 117.576 462.935 87.2436C462.935 56.9115 438.421 32.2424 408.321 32.2424C394.435 32.2424 381.713 37.5176 372.094 46.206C332.685 16.8048 284.433 0.513916 235.172 0.513916C108.336 0.513916 5.16016 104.31 5.16016 232C5.16016 244.645 6.16864 257.29 8.18561 269.702C8.96137 274.279 12.8402 277.537 17.3395 277.537ZM408.399 50.9382C428.258 50.9382 444.472 67.2291 444.472 87.2436C444.472 107.258 428.258 123.549 408.399 123.549C388.54 123.549 372.326 107.258 372.326 87.2436C372.326 67.2291 388.54 50.9382 408.399 50.9382Z" fill="var(--clr)"/>

                            <path d="M463.013 199.108C462.315 193.988 457.582 190.497 452.54 191.195C447.42 191.893 443.929 196.626 444.627 201.746C446.024 211.675 446.722 221.915 446.722 232C446.722 349.372 351.847 444.79 235.25 444.79C186.843 444.79 140.142 427.956 102.673 397.469C107.328 389.401 110.043 380.015 110.043 370.007C110.043 339.675 85.5291 315.006 55.4297 315.006C25.3303 315.006 0.816406 339.675 0.816406 370.007C0.816406 400.339 25.3303 425.009 55.4297 425.009C68.9279 425.009 81.2625 420.044 90.8043 411.821C131.687 445.023 182.499 463.486 235.328 463.486C362.164 463.486 465.418 359.612 465.418 232C465.262 220.984 464.487 209.891 463.013 199.108ZM19.2794 370.007C19.2794 349.993 35.4928 333.702 55.3522 333.702C75.2116 333.702 91.4249 349.993 91.4249 370.007C91.4249 390.022 75.2116 406.313 55.3522 406.313C35.4928 406.313 19.2794 390.022 19.2794 370.007Z" fill="var(--clr)"/>

                            <path d="M272.1 214.08L236.492 189.333C229.821 184.756 221.288 184.213 214.151 188.015C207.014 191.816 202.592 199.185 202.592 207.253V256.669C202.592 264.737 207.014 272.107 214.151 275.908C217.331 277.615 220.745 278.39 224.235 278.39C228.502 278.39 232.769 277.072 236.492 274.512L272.1 249.765C277.918 245.731 281.409 238.982 281.409 231.845C281.409 224.863 277.918 218.192 272.1 214.08ZM261.549 234.482L225.942 259.229C224.623 260.16 223.46 259.772 222.839 259.384C222.218 259.074 221.21 258.298 221.21 256.669V207.253C221.21 205.624 222.218 204.926 222.839 204.538C223.149 204.383 223.692 204.15 224.235 204.15C224.778 204.15 225.321 204.305 225.942 204.693L261.549 229.44C262.713 230.216 262.868 231.302 262.868 231.922C262.868 232.621 262.713 233.707 261.549 234.482Z" fill="var(--clr)"/>

                            </svg>

                        <h3 class="text-center title">Multimedia Integration</h3>

                        <p class="text-center para">Incorporating videos, podcasts, and audio clips.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="400" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                     <div style="--clr:hsl(175, 100%, 30%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3rem" height="3rem" viewBox="0 0 410 410" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M138.695 277.192C166.514 277.192 193.053 269.085 215.581 253.896L238.194 276.509L237.682 277.021C234.354 280.349 234.354 285.725 237.682 289.053L347.677 399.048C354.759 406.131 364.061 409.715 373.362 409.715C382.663 409.715 391.965 406.131 399.047 399.048C413.213 384.883 413.213 361.757 399.047 347.592L289.138 237.683C285.895 234.44 280.263 234.44 277.106 237.683L276.594 238.195L253.981 215.581C269.085 192.968 277.277 166.515 277.277 138.696C277.277 101.661 262.855 66.9306 236.743 40.7333C210.631 14.536 175.73 0.199951 138.695 0.199951C101.661 0.199951 66.9299 14.6213 40.7326 40.7333C14.5352 66.8453 0.199219 101.747 0.199219 138.696C0.199219 175.645 14.6206 210.461 40.7326 236.659C66.8446 262.856 101.746 277.192 138.695 277.192ZM387.101 359.795C394.61 367.304 394.61 379.592 387.101 387.101C379.591 394.611 367.303 394.611 359.794 387.101L255.773 283.08L283.079 255.773L387.101 359.795ZM264.477 250.312L250.311 264.477L229.234 243.4C231.794 241.181 234.269 239.048 236.658 236.659C239.047 234.269 241.266 231.709 243.399 229.235L264.477 250.312ZM52.8499 52.8506C75.8046 29.896 106.269 17.2666 138.695 17.2666C171.122 17.2666 201.586 29.896 224.541 52.8506C247.495 75.8053 260.125 106.269 260.125 138.696C260.125 171.123 247.495 201.587 224.541 224.541C201.586 247.496 171.122 260.125 138.695 260.125C106.269 260.125 75.7192 247.496 52.8499 224.541C29.8952 201.672 17.2659 171.123 17.2659 138.696C17.2659 106.269 29.8952 75.8053 52.8499 52.8506Z" fill="var(--clr)"/>

                            <path d="M68.7226 169.928L61.1279 185.885C59.5919 189.128 60.2746 193.053 62.8346 195.613L77.9386 210.717C80.4986 213.277 84.3386 213.96 87.6666 212.424L103.624 204.829L112.157 208.413L118.045 225.053C119.24 228.467 122.483 230.771 126.067 230.771H147.485C151.069 230.771 154.312 228.467 155.507 225.053L161.395 208.413L169.928 204.829L185.885 212.424C189.128 213.96 193.053 213.277 195.613 210.717L210.717 195.613C213.277 193.053 213.96 189.213 212.424 185.885L204.829 170.013L208.413 161.48L225.053 155.592C228.467 154.397 230.771 151.155 230.771 147.571V126.152C230.771 122.568 228.467 119.325 225.053 118.131L208.413 112.243L204.829 103.709L212.424 87.8374C213.96 84.5947 213.277 80.6694 210.717 78.1094L195.613 63.0054C193.053 60.4454 189.213 59.7627 185.885 61.2987L169.928 68.8934L161.395 65.3094L155.507 48.6694C154.312 45.256 151.069 42.952 147.485 42.952H126.067C122.483 42.952 119.24 45.256 118.045 48.6694L112.157 65.3094L103.624 68.8934L87.6666 61.2987C84.4239 59.7627 80.4986 60.4454 77.9386 63.0054L62.8346 78.1094C60.2746 80.6694 59.5919 84.5094 61.1279 87.8374L68.7226 103.795L65.1386 112.328L48.4986 118.216C45.0853 119.411 42.7812 122.653 42.7812 126.237V147.656C42.7812 151.24 45.0853 154.483 48.4986 155.677L65.1386 161.565L68.7226 169.928ZM59.9333 132.04L74.4399 126.92C76.7439 126.067 78.5359 124.36 79.4746 122.141L85.9599 106.611C86.8986 104.392 86.8133 101.832 85.7893 99.6987L79.2186 85.7894L85.7893 79.2187L99.6986 85.7894C101.917 86.8134 104.392 86.8987 106.611 85.96L122.141 79.4747C124.36 78.536 126.067 76.744 126.92 74.44L132.04 59.9334H141.341L146.461 74.44C147.229 76.744 149.021 78.536 151.24 79.4747L166.771 85.96C168.989 86.8987 171.549 86.8134 173.683 85.7894L187.592 79.2187L194.163 85.7894L187.507 99.6987C186.483 101.917 186.397 104.392 187.336 106.611L193.821 122.141C194.76 124.36 196.552 126.067 198.856 126.92L213.363 132.04V141.341L198.856 146.461C196.552 147.229 194.76 149.021 193.821 151.24L187.336 166.771C186.397 168.989 186.483 171.549 187.507 173.683L194.163 187.592L187.592 194.163L173.683 187.592C171.464 186.568 168.989 186.483 166.771 187.421L151.24 193.821C149.021 194.76 147.229 196.552 146.461 198.856L141.341 213.363H132.04L126.92 198.856C126.152 196.552 124.36 194.76 122.141 193.821L106.611 187.336C104.392 186.397 101.832 186.483 99.6986 187.507L85.7893 194.077L79.2186 187.507L85.7893 173.597C86.8133 171.379 86.8986 168.904 85.9599 166.685L79.4746 151.155C78.5359 148.936 76.7439 147.229 74.4399 146.376L59.9333 141.256V132.04Z" fill="var(--clr)"/>

                            <path d="M136.733 179.4C160.285 179.4 179.4 160.285 179.4 136.733C179.4 113.181 160.285 94.0667 136.733 94.0667C113.181 94.0667 94.0664 113.181 94.0664 136.733C94.0664 160.285 113.181 179.4 136.733 179.4ZM136.733 111.133C150.813 111.133 162.333 122.653 162.333 136.733C162.333 150.813 150.813 162.333 136.733 162.333C122.653 162.333 111.133 150.813 111.133 136.733C111.133 122.653 122.653 111.133 136.733 111.133Z" fill="var(--clr)"/>

                            </svg>



                        <h3 class="text-center title">Search Functionality</h3>

                        <p class="text-center para">Allows users to search for specific content on the site.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                     <div style="--clr:hsl(54, 100%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 475 411" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M434.052 0.758667H40.9483C18.3427 0.786659 0.027992 19.1014 0 41.7069V369.293C0.027992 391.899 18.3427 410.213 40.9483 410.241H434.052C456.657 410.213 474.972 391.899 475 369.293V41.7069C474.972 19.1014 456.657 0.786659 434.052 0.758667ZM40.9483 17.138H434.052C447.62 17.138 458.621 28.1388 458.621 41.7069V66.2759H16.3793V41.7069C16.3793 28.1388 27.3802 17.138 40.9483 17.138ZM434.052 393.862H40.9483C27.3802 393.862 16.3793 382.861 16.3793 369.293V82.6552H458.621V369.293C458.621 382.861 447.62 393.862 434.052 393.862Z" fill="var(--clr)"/>

                            <path d="M49.2171 41.7069C49.2171 46.2536 45.5342 49.9366 40.9875 49.9366C36.4448 49.9366 32.7578 46.2536 32.7578 41.7069C32.7578 37.1602 36.4448 33.4773 40.9875 33.4773C45.5342 33.4773 49.2171 37.1602 49.2171 41.7069Z" fill="var(--clr)"/>

                            <path d="M81.9359 41.7469C81.9359 46.2936 78.2529 49.9765 73.7062 49.9765C69.1595 49.9765 65.4766 46.2936 65.4766 41.7469C65.4766 37.2042 69.1595 33.5172 73.7062 33.5172C78.2529 33.5172 81.9359 37.2042 81.9359 41.7469Z" fill="var(--clr)"/>

                            <path d="M114.78 41.7469C114.78 46.2936 111.093 49.9765 106.546 49.9765C102.003 49.9765 98.3164 46.2936 98.3164 41.7469C98.3164 37.2042 102.003 33.5172 106.546 33.5172C111.093 33.5172 114.78 37.2042 114.78 41.7469Z" fill="var(--clr)"/>

                            <path d="M49.1371 180.931H98.2751C107.32 180.931 114.654 173.597 114.654 164.552V115.414C114.654 106.368 107.32 99.0344 98.2751 99.0344H49.1371C40.0917 99.0344 32.7578 106.368 32.7578 115.414V164.552C32.7578 173.597 40.0917 180.931 49.1371 180.931ZM49.1371 115.414H98.2751V164.552H49.1371V115.414Z" fill="var(--clr)"/>

                            <path d="M49.1371 279.207H98.2751C107.32 279.207 114.654 271.873 114.654 262.828V213.69C114.654 204.644 107.32 197.31 98.2751 197.31H49.1371C40.0917 197.31 32.7578 204.644 32.7578 213.69V262.828C32.7578 271.873 40.0917 279.207 49.1371 279.207ZM49.1371 213.69H98.2751V262.828H49.1371V213.69Z" fill="var(--clr)"/>

                            <path d="M425.861 295.586H49.1371C40.0917 295.586 32.7578 302.92 32.7578 311.965V361.103C32.7578 370.149 40.0917 377.483 49.1371 377.483H425.861C434.907 377.483 442.241 370.149 442.241 361.103V311.965C442.241 302.92 434.907 295.586 425.861 295.586ZM425.861 361.103H49.1371V311.965H425.861V361.103Z" fill="var(--clr)"/>

                            <path d="M139.225 164.552H229.311C233.834 164.552 237.501 160.885 237.501 156.362C237.501 151.839 233.834 148.172 229.311 148.172H139.225C134.702 148.172 131.035 151.839 131.035 156.362C131.035 160.885 134.702 164.552 139.225 164.552Z" fill="var(--clr)"/>

                            <path d="M434.051 115.414H360.344C355.821 115.414 352.154 119.081 352.154 123.603C352.154 128.126 355.821 131.793 360.344 131.793H434.051C438.574 131.793 442.241 128.126 442.241 123.603C442.241 119.081 438.574 115.414 434.051 115.414Z" fill="var(--clr)"/>

                            <path d="M139.225 131.793H180.173C184.696 131.793 188.363 128.126 188.363 123.603C188.363 119.081 184.696 115.414 180.173 115.414H139.225C134.702 115.414 131.035 119.081 131.035 123.603C131.035 128.126 134.702 131.793 139.225 131.793Z" fill="var(--clr)"/>

                            <path d="M212.932 131.793H327.587C332.11 131.793 335.777 128.126 335.777 123.603C335.777 119.081 332.11 115.414 327.587 115.414H212.932C208.409 115.414 204.742 119.081 204.742 123.603C204.742 128.126 208.409 131.793 212.932 131.793Z" fill="var(--clr)"/>

                            <path d="M434.051 148.172H262.069C257.546 148.172 253.879 151.839 253.879 156.362C253.879 160.885 257.546 164.552 262.069 164.552H434.051C438.574 164.552 442.241 160.885 442.241 156.362C442.241 151.839 438.574 148.172 434.051 148.172Z" fill="var(--clr)"/>

                            <path d="M139.225 262.828H229.311C233.834 262.828 237.501 259.161 237.501 254.638C237.501 250.115 233.834 246.448 229.311 246.448H139.225C134.702 246.448 131.035 250.115 131.035 254.638C131.035 259.161 134.702 262.828 139.225 262.828Z" fill="var(--clr)"/>

                            <path d="M434.051 213.69H360.344C355.821 213.69 352.154 217.357 352.154 221.879C352.154 226.402 355.821 230.069 360.344 230.069H434.051C438.574 230.069 442.241 226.402 442.241 221.879C442.241 217.357 438.574 213.69 434.051 213.69Z" fill="var(--clr)"/>

                            <path d="M139.225 230.069H180.173C184.696 230.069 188.363 226.402 188.363 221.879C188.363 217.357 184.696 213.69 180.173 213.69H139.225C134.702 213.69 131.035 217.357 131.035 221.879C131.035 226.402 134.702 230.069 139.225 230.069Z" fill="var(--clr)"/>

                            <path d="M204.742 221.879C204.742 226.402 208.409 230.069 212.932 230.069H327.587C332.11 230.069 335.777 226.402 335.777 221.879C335.777 217.357 332.11 213.69 327.587 213.69H212.932C208.409 213.69 204.742 217.357 204.742 221.879Z" fill="var(--clr)"/>

                            <path d="M434.051 246.448H262.069C257.546 246.448 253.879 250.115 253.879 254.638C253.879 259.161 257.546 262.828 262.069 262.828H434.051C438.574 262.828 442.241 259.161 442.241 254.638C442.241 250.115 438.574 246.448 434.051 246.448Z" fill="var(--clr)"/>

                            </svg>



                        <h3 class="text-center title">Blog Section</h3>

                        <p class="text-center para">For regular posts, updates, or articles.</p>

                        <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                        </svg>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(337, 85%, 48%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 382 412" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M218.979 396.938H65.3484C51.9532 396.923 39.1108 391.595 29.6389 382.123C20.167 372.651 14.8391 359.809 14.8242 346.414V65.5869C14.839 52.1916 20.1668 39.3491 29.6387 29.8771C39.1106 20.4052 51.9531 15.0773 65.3484 15.0625H198.784C202.851 15.1183 206.897 15.6741 210.829 16.7172V65.5508C210.846 80.6402 216.847 95.1067 227.517 105.776C238.187 116.446 252.654 122.448 267.743 122.465H305.398C305.687 124.595 305.84 126.741 305.857 128.891V215.108C305.857 217.056 306.63 218.924 308.008 220.301C309.385 221.678 311.253 222.452 313.2 222.452C315.148 222.452 317.016 221.678 318.393 220.301C319.77 218.924 320.544 217.056 320.544 215.108V128.891C320.561 112.887 314.666 97.4406 303.992 85.5166L247.429 22.1198C241.28 15.3103 233.777 9.85906 225.401 6.11476C217.024 2.37047 207.959 0.415535 198.784 0.375H65.3484C48.0591 0.394282 31.4834 7.271 19.258 19.4964C7.0326 31.7219 0.155943 48.2976 0.136719 65.5869V346.414C0.156098 363.703 7.03283 380.278 19.2582 392.504C31.4836 404.729 48.0592 411.606 65.3484 411.625H218.979C220.904 411.591 222.738 410.802 224.088 409.428C225.437 408.055 226.193 406.206 226.193 404.281C226.193 402.356 225.437 400.508 224.088 399.134C222.738 397.761 220.904 396.972 218.979 396.938ZM225.516 22.8422C229.583 25.338 233.277 28.3951 236.489 31.9233L293.041 95.3062C296.364 99.0342 299.111 103.238 301.191 107.777H267.743C256.548 107.765 245.814 103.312 237.898 95.3957C229.982 87.4794 225.529 76.7461 225.516 65.5508V22.8422Z" fill="var(--clr)"/>

                            <path d="M218.977 250.062C220.906 250.034 222.746 249.247 224.1 247.873C225.454 246.499 226.213 244.648 226.213 242.719C226.213 240.789 225.454 238.938 224.1 237.564C222.746 236.19 220.906 235.404 218.977 235.375H42.8027C41.8383 235.375 40.8832 235.565 39.9921 235.933C39.101 236.302 38.2913 236.843 37.6093 237.525C36.9274 238.207 36.3864 239.017 36.0175 239.908C35.6485 240.799 35.4587 241.754 35.459 242.719V294.125C35.4587 295.089 35.6485 296.045 36.0175 296.936C36.3865 297.827 36.9274 298.636 37.6094 299.318C38.2913 300 39.101 300.541 39.9921 300.91C40.8832 301.279 41.8383 301.469 42.8027 301.469H187.548C189.47 301.431 191.302 300.641 192.649 299.268C193.995 297.895 194.75 296.048 194.75 294.125C194.75 292.202 193.995 290.355 192.649 288.982C191.302 287.609 189.47 286.819 187.548 286.781H50.1465V250.062H218.977Z" fill="var(--clr)"/>

                            <path d="M42.8036 323.5C40.8813 323.539 39.0508 324.329 37.705 325.702C36.3592 327.075 35.6054 328.921 35.6055 330.844C35.6055 332.767 36.3594 334.613 37.7053 335.986C39.0512 337.359 40.8818 338.149 42.804 338.188H183.877C185.799 338.149 187.629 337.358 188.975 335.985C190.321 334.612 191.075 332.766 191.075 330.844C191.075 328.921 190.321 327.075 188.975 325.702C187.629 324.329 185.799 323.538 183.877 323.5H42.8036Z" fill="var(--clr)"/>

                            <path d="M35.4961 181.523V197.294C35.501 201.549 37.1936 205.628 40.2024 208.637C43.2112 211.646 47.2907 213.339 51.5459 213.344H173.467C177.722 213.339 181.802 211.646 184.811 208.637C187.819 205.628 189.512 201.549 189.517 197.294V181.523C189.524 173.584 187.029 165.844 182.387 159.403C177.744 152.962 171.19 148.148 163.656 145.644L138.923 137.394C146.179 131.866 151.518 124.202 154.188 115.48C156.858 106.758 156.726 97.4182 153.808 88.7759C150.891 80.1335 145.336 72.624 137.926 67.305C130.516 61.9859 121.624 59.1252 112.502 59.1259C103.381 59.1265 94.4895 61.9883 87.0802 67.3084C79.6709 72.6285 74.117 80.1388 71.2008 88.7815C68.2846 97.4243 68.153 106.764 70.8245 115.486C73.4959 124.207 78.8359 131.871 86.0924 137.398L61.3561 145.644C53.8219 148.148 47.2683 152.962 42.6261 159.403C37.9839 165.844 35.4891 173.584 35.4961 181.523ZM112.505 73.8125C120.135 73.8813 127.43 76.9608 132.801 82.3809C138.173 87.801 141.186 95.1231 141.186 102.754C141.186 110.385 138.172 117.707 132.801 123.127C127.429 128.547 120.135 131.626 112.504 131.695C104.874 131.626 97.5792 128.546 92.2078 123.126C86.8365 117.706 83.8229 110.384 83.823 102.753C83.823 95.1226 86.8367 87.8006 92.2082 82.3806C97.5796 76.9606 104.874 73.8812 112.505 73.8125ZM99.0005 148.577C116.421 141.234 142.425 154.921 159.009 159.571C163.618 161.105 167.626 164.051 170.466 167.992C173.305 171.932 174.832 176.666 174.83 181.523V197.294C174.83 197.473 174.795 197.65 174.726 197.815C174.658 197.981 174.557 198.131 174.431 198.257C174.304 198.384 174.154 198.484 173.989 198.553C173.823 198.621 173.646 198.656 173.467 198.656H51.5459C51.3669 198.656 51.1897 198.621 51.0243 198.553C50.859 198.484 50.7087 198.384 50.5822 198.257C50.4556 198.131 50.3553 197.981 50.2868 197.815C50.2184 197.65 50.1832 197.473 50.1832 197.294V181.523C50.1808 176.666 51.7077 171.932 54.5474 167.991C57.3872 164.051 61.3955 161.105 66.0039 159.571L99.0005 148.577Z" fill="var(--clr)"/>

                            <path d="M277.84 169.281C279.763 169.244 281.595 168.454 282.941 167.08C284.288 165.707 285.042 163.861 285.042 161.938C285.042 160.014 284.288 158.168 282.941 156.795C281.595 155.421 279.763 154.631 277.84 154.594H219.09C217.168 154.631 215.336 155.422 213.989 156.795C212.643 158.168 211.889 160.014 211.889 161.938C211.889 163.861 212.643 165.707 213.99 167.081C215.336 168.454 217.168 169.244 219.091 169.281H277.84Z" fill="var(--clr)"/>

                            <path d="M285.184 206C285.184 205.036 284.994 204.08 284.625 203.189C284.256 202.298 283.715 201.489 283.033 200.807C282.351 200.125 281.542 199.584 280.65 199.215C279.759 198.846 278.804 198.656 277.84 198.656H219.09C217.142 198.656 215.274 199.43 213.897 200.807C212.52 202.184 211.746 204.052 211.746 206C211.746 207.948 212.52 209.816 213.897 211.193C215.274 212.57 217.142 213.344 219.09 213.344H277.84C278.804 213.344 279.759 213.154 280.65 212.785C281.542 212.416 282.351 211.875 283.033 211.193C283.715 210.511 284.256 209.702 284.625 208.811C284.994 207.92 285.184 206.964 285.184 206Z" fill="var(--clr)"/>

                            <path d="M293.738 235.375C270.372 235.394 247.968 244.684 231.445 261.207C214.922 277.729 205.632 300.133 205.613 323.5C210.46 440.413 377.016 440.413 381.863 323.5C381.845 300.133 372.554 277.729 356.032 261.207C339.509 244.684 317.105 235.393 293.738 235.375ZM293.738 396.938C274.271 396.906 255.611 389.158 241.845 375.393C228.08 361.628 220.333 342.967 220.301 323.5C224.34 226.048 363.137 226.122 367.176 323.5C367.144 342.967 359.396 361.628 345.631 375.393C331.866 389.158 313.205 396.906 293.738 396.938Z" fill="var(--clr)"/>

                            <path d="M304.314 360.219H301.083V310.391C301.083 309.426 300.893 308.471 300.524 307.58C300.155 306.689 299.614 305.879 298.932 305.197C298.251 304.515 297.441 303.974 296.55 303.605C295.659 303.236 294.704 303.047 293.739 303.047H283.164C281.241 303.083 279.409 303.873 278.061 305.246C276.714 306.62 275.959 308.467 275.959 310.391C275.959 312.315 276.714 314.162 278.061 315.535C279.409 316.908 281.241 317.698 283.165 317.734H286.395V360.219H283.165C281.242 360.256 279.41 361.046 278.064 362.42C276.717 363.793 275.963 365.639 275.963 367.563C275.963 369.486 276.717 371.332 278.064 372.706C279.411 374.079 281.242 374.869 283.165 374.906H304.314C306.237 374.869 308.068 374.079 309.415 372.705C310.761 371.332 311.516 369.486 311.516 367.562C311.516 365.639 310.761 363.793 309.415 362.42C308.068 361.046 306.237 360.256 304.314 360.219Z" fill="var(--clr)"/>

                            <path d="M291.976 293.831C294.833 293.793 297.561 292.632 299.568 290.597C301.576 288.563 302.701 285.82 302.701 282.962C302.701 280.105 301.576 277.362 299.568 275.328C297.561 273.293 294.833 272.132 291.976 272.094C289.118 272.132 286.39 273.293 284.383 275.328C282.376 277.362 281.25 280.105 281.25 282.962C281.25 285.82 282.376 288.563 284.383 290.597C286.39 292.632 289.118 293.793 291.976 293.831Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Contact Information</h3>

                       <p class="text-center para">Easily accessible contact details or a contact form for inquiries.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

                    <div style="--clr:hsl(261, 88%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 432 460" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M195.167 132.778H236.834C242.357 132.772 247.653 130.575 251.559 126.669C255.464 122.764 257.661 117.468 257.667 111.944V70.2778C257.661 64.7543 255.464 59.4588 251.559 55.5531C247.653 51.6474 242.357 49.4505 236.834 49.4445H229.89C228.048 49.4433 226.283 48.7112 224.98 47.4091C223.678 46.1071 222.946 44.3414 222.945 42.5V36.5322C222.941 33.1017 223.786 29.7236 225.405 26.6991C227.024 23.6746 229.366 21.0976 232.222 19.1982L240.686 13.5558C241.926 12.729 242.867 11.5252 243.37 10.1223C243.874 8.71945 243.912 7.19189 243.48 5.76544C243.048 4.33899 242.169 3.08933 240.972 2.20116C239.775 1.31299 238.324 0.833435 236.834 0.833374H209.056C199.851 0.844181 191.025 4.50588 184.516 11.0152C178.006 17.5246 174.345 26.35 174.334 35.5556V111.944C174.34 117.468 176.537 122.764 180.443 126.669C184.348 130.575 189.644 132.772 195.167 132.778ZM188.223 35.5556C188.229 30.0321 190.426 24.7366 194.331 20.8309C198.237 16.9252 203.533 14.7283 209.056 14.7223H216.753C211.766 20.8961 209.048 28.5952 209.056 36.5322V42.5C209.062 48.0235 211.259 53.3191 215.165 57.2248C219.071 61.1305 224.366 63.3273 229.89 63.3334H236.834C238.675 63.3346 240.441 64.0666 241.743 65.3687C243.045 66.6708 243.777 68.4364 243.778 70.2778V111.944C243.777 113.786 243.045 115.552 241.743 116.854C240.441 118.156 238.675 118.888 236.834 118.889H195.167C193.326 118.887 191.561 118.155 190.259 116.853C188.957 115.551 188.225 113.786 188.223 111.944V35.5556Z" fill="var(--clr)"/>

                            <path d="M97.9447 132.778H139.611C145.135 132.772 150.43 130.575 154.336 126.669C158.242 122.764 160.439 117.468 160.445 111.944V70.2778C160.439 64.7543 158.242 59.4588 154.336 55.5531C150.43 51.6474 145.135 49.4505 139.611 49.4445H132.667C130.826 49.4426 129.06 48.7104 127.758 47.4085C126.457 46.1065 125.724 44.3413 125.722 42.5V36.5322C125.719 33.1019 126.565 29.724 128.183 26.6996C129.802 23.6752 132.144 21.0982 135 19.1982L143.463 13.5558C144.703 12.729 145.645 11.5252 146.148 10.1223C146.651 8.71945 146.689 7.19189 146.258 5.76544C145.826 4.33899 144.946 3.08933 143.749 2.20116C142.553 1.31299 141.102 0.833435 139.611 0.833374H111.834C102.628 0.844181 93.8025 4.50588 87.2932 11.0152C80.7838 17.5246 77.1221 26.35 77.1113 35.5556V111.944C77.1174 117.468 79.3142 122.764 83.2199 126.669C87.1256 130.575 92.4212 132.772 97.9447 132.778ZM91.0002 35.5556C91.0062 30.0321 93.2031 24.7366 97.1088 20.8309C101.015 16.9252 106.31 14.7283 111.834 14.7223H119.531C114.543 20.8961 111.826 28.5952 111.834 36.5322V42.5C111.84 48.0235 114.036 53.3191 117.942 57.2248C121.848 61.1305 127.143 63.3273 132.667 63.3334H139.611C141.453 63.3352 143.218 64.0674 144.52 65.3694C145.822 66.6713 146.554 68.4366 146.556 70.2778V111.944C146.554 113.786 145.822 115.551 144.52 116.853C143.218 118.155 141.453 118.887 139.611 118.889H97.9447C96.1034 118.887 94.3382 118.155 93.0362 116.853C91.7343 115.551 91.0021 113.786 91.0002 111.944V35.5556Z" fill="var(--clr)"/>

                            <path d="M375.722 278.611C368.855 278.611 362.142 280.648 356.432 284.463C350.722 288.278 346.271 293.701 343.643 300.046C341.015 306.39 340.327 313.372 341.667 320.107C343.007 326.843 346.314 333.03 351.17 337.886C356.026 342.742 362.213 346.049 368.948 347.388C375.684 348.728 382.665 348.04 389.01 345.412C395.355 342.784 400.777 338.334 404.593 332.624C408.408 326.914 410.444 320.201 410.444 313.333C410.434 304.128 406.772 295.302 400.263 288.793C393.753 282.284 384.928 278.622 375.722 278.611ZM375.722 334.167C371.602 334.167 367.574 332.945 364.148 330.656C360.722 328.366 358.052 325.113 356.475 321.306C354.898 317.499 354.485 313.31 355.289 309.269C356.093 305.228 358.077 301.516 360.991 298.602C363.904 295.688 367.617 293.704 371.658 292.9C375.699 292.096 379.888 292.509 383.695 294.086C387.502 295.663 390.755 298.333 393.045 301.759C395.334 305.185 396.556 309.213 396.556 313.333C396.55 318.857 394.353 324.152 390.447 328.058C386.541 331.964 381.246 334.161 375.722 334.167Z" fill="var(--clr)"/>

                            <path d="M375.724 361.945C360.994 361.961 346.873 367.82 336.458 378.235C326.043 388.65 320.185 402.771 320.168 417.5V452.222C320.167 453.134 320.347 454.038 320.696 454.881C321.044 455.723 321.556 456.489 322.201 457.134C322.846 457.779 323.612 458.29 324.454 458.639C325.297 458.988 326.2 459.167 327.112 459.167H424.335C425.247 459.167 426.15 458.988 426.993 458.639C427.836 458.29 428.601 457.779 429.246 457.134C429.891 456.489 430.403 455.723 430.752 454.881C431.1 454.038 431.28 453.134 431.279 452.222V417.5C431.262 402.771 425.404 388.65 414.989 378.235C404.574 367.82 390.453 361.961 375.724 361.945ZM417.39 445.278H334.057V417.5C334.057 406.449 338.447 395.851 346.261 388.037C354.075 380.223 364.673 375.833 375.724 375.833C386.774 375.833 397.372 380.223 405.186 388.037C413 395.851 417.39 406.449 417.39 417.5V445.278Z" fill="var(--clr)"/>

                            <path d="M403.5 230V118.889C403.49 109.683 399.828 100.858 393.319 94.3486C386.809 87.8392 377.984 84.1776 368.778 84.1667H278.5C276.659 84.1667 274.892 84.8984 273.59 86.2007C272.288 87.5031 271.556 89.2694 271.556 91.1112C271.556 92.953 272.288 94.7193 273.59 96.0217C274.892 97.324 276.659 98.0556 278.5 98.0556H368.778C374.302 98.0617 379.597 100.259 383.503 104.164C387.409 108.07 389.605 113.365 389.612 118.889V230C389.605 235.524 387.409 240.819 383.503 244.725C379.597 248.631 374.302 250.827 368.778 250.833H285.445C284.533 250.833 283.63 251.012 282.787 251.361C281.944 251.71 281.178 252.221 280.533 252.866C279.888 253.511 279.377 254.277 279.028 255.12C278.679 255.962 278.5 256.866 278.5 257.778V340.27C278.5 341.81 278.043 343.315 277.188 344.595C276.332 345.876 275.116 346.873 273.693 347.463C272.271 348.052 270.706 348.207 269.195 347.907C267.685 347.607 266.298 346.866 265.208 345.777L172.299 252.868C170.997 251.566 169.231 250.834 167.389 250.833H35.4449C29.9214 250.827 24.6258 248.631 20.7201 244.725C16.8144 240.819 14.6176 235.524 14.6115 230V118.889C14.6176 113.365 16.8144 108.07 20.7201 104.164C24.6258 100.259 29.9214 98.0617 35.4449 98.0556H56.2782C58.12 98.0556 59.8863 97.324 61.1887 96.0217C62.491 94.7193 63.2227 92.953 63.2227 91.1112C63.2227 89.2694 62.491 87.5031 61.1887 86.2007C59.8863 84.8984 58.12 84.1667 56.2782 84.1667H35.4449C26.2393 84.1776 17.4138 87.8392 10.9045 94.3486C4.39516 100.858 0.733463 109.683 0.722656 118.889V230C0.733463 239.206 4.39516 248.031 10.9045 254.54C17.4138 261.05 26.2393 264.711 35.4449 264.722H164.514L255.388 355.597C258.42 358.628 262.282 360.692 266.486 361.528C270.691 362.364 275.049 361.935 279.009 360.295C282.97 358.654 286.355 355.876 288.736 352.312C291.118 348.747 292.389 344.557 292.389 340.27V264.722H368.778C377.984 264.711 386.809 261.05 393.319 254.54C399.828 248.031 403.49 239.206 403.5 230Z" fill="var(--clr)"/>

                            <path d="M354.889 153.611H97.9444C96.1027 153.611 94.3363 154.343 93.034 155.645C91.7316 156.947 91 158.714 91 160.556C91 162.397 91.7316 164.164 93.034 165.466C94.3363 166.768 96.1027 167.5 97.9444 167.5H354.889C356.731 167.5 358.497 166.768 359.799 165.466C361.102 164.164 361.833 162.397 361.833 160.556C361.833 158.714 361.102 156.947 359.799 155.645C358.497 154.343 356.731 153.611 354.889 153.611Z" fill="var(--clr)"/>

                            <path d="M354.889 181.389H49.3331C47.4913 181.389 45.725 182.121 44.4227 183.423C43.1203 184.725 42.3887 186.492 42.3887 188.333C42.3887 190.175 43.1203 191.941 44.4227 193.244C45.725 194.546 47.4913 195.278 49.3331 195.278H354.889C356.73 195.278 358.497 194.546 359.799 193.244C361.102 191.941 361.833 190.175 361.833 188.333C361.833 186.492 361.102 184.725 359.799 183.423C358.497 182.121 356.73 181.389 354.889 181.389Z" fill="var(--clr)"/>

                            <path d="M354.889 209.167H49.3331C47.4913 209.167 45.725 209.898 44.4227 211.201C43.1203 212.503 42.3887 214.269 42.3887 216.111C42.3887 217.953 43.1203 219.719 44.4227 221.022C45.725 222.324 47.4913 223.056 49.3331 223.056H354.889C356.73 223.056 358.497 222.324 359.799 221.022C361.102 219.719 361.833 217.953 361.833 216.111C361.833 214.269 361.102 212.503 359.799 211.201C358.497 209.898 356.73 209.167 354.889 209.167Z" fill="var(--clr)"/>

                            </svg>



                       <h3 class="text-center title">Customer Testimonials / Reviews</h3>

                       <p class="text-center para">Showcasing customer experiences to build trust.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

               </div>

                <div data-aos="fade-up" data-aos-delay="300" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(298, 90%, 45%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 512 458" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M200.17 310.435C200.17 312.017 199.701 313.564 198.822 314.88C197.943 316.195 196.693 317.221 195.231 317.826C193.77 318.432 192.161 318.59 190.609 318.281C189.057 317.973 187.632 317.211 186.513 316.092C185.394 314.973 184.632 313.548 184.324 311.996C184.015 310.444 184.173 308.835 184.779 307.374C185.384 305.912 186.41 304.662 187.725 303.783C189.041 302.904 190.588 302.435 192.17 302.435C194.292 302.435 196.327 303.278 197.827 304.778C199.327 306.278 200.17 308.313 200.17 310.435ZM506.834 414.035C510.142 417.35 512 421.842 512 426.526C512 431.21 510.142 435.702 506.834 439.017L493.767 452.085C490.451 455.392 485.959 457.25 481.276 457.25C476.592 457.25 472.1 455.392 468.784 452.085L418.9 402.2C415.592 398.885 413.734 394.393 413.734 389.709C413.734 385.026 415.592 380.534 418.9 377.219L420.021 376.098L417.567 373.644C405.265 384.254 390.686 391.89 374.959 395.961C359.232 400.031 342.778 400.427 326.874 397.117C310.969 393.808 296.04 386.882 283.242 376.876C270.444 366.869 260.121 354.052 253.072 339.415H226.872C232.659 353.111 241.573 365.261 252.9 374.893C255.218 376.769 257.085 379.14 258.366 381.833C259.646 384.525 260.307 387.47 260.3 390.452V405.559C260.3 407.681 259.457 409.716 257.957 411.216C256.457 412.716 254.422 413.559 252.3 413.559H132.034C129.912 413.559 127.877 412.716 126.377 411.216C124.877 409.716 124.034 407.681 124.034 405.559V390.452C124.028 387.469 124.69 384.523 125.973 381.831C127.255 379.138 129.124 376.766 131.443 374.891C142.77 365.26 151.683 353.11 157.469 339.414H23.463C17.2425 339.407 11.2788 336.933 6.88011 332.535C2.48146 328.136 0.00714649 322.172 0 315.952L0 92.91C0.00714599 86.6894 2.48143 80.7256 6.88005 76.327C11.2787 71.9284 17.2424 69.4541 23.463 69.447H244.669V59.147H237.069C235.566 59.1469 234.094 58.7236 232.821 57.9257C231.548 57.1277 230.525 55.9873 229.87 54.635C229.215 53.2828 228.954 51.7734 229.117 50.2796C229.279 48.7859 229.86 47.3682 230.791 46.189L264.276 3.78896C265.025 2.84065 265.979 2.0743 267.066 1.54742C268.154 1.02054 269.346 0.746826 270.555 0.746826C271.763 0.746826 272.955 1.02054 274.043 1.54742C275.13 2.0743 276.084 2.84065 276.833 3.78896L310.317 46.189C311.248 47.3682 311.829 48.7859 311.991 50.2796C312.154 51.7734 311.893 53.2828 311.238 54.635C310.583 55.9873 309.56 57.1277 308.287 57.9257C307.014 58.7236 305.542 59.1469 304.039 59.147H296.439V69.447H360.867C367.088 69.4541 373.051 71.9284 377.45 76.327C381.849 80.7256 384.323 86.6894 384.33 92.91V194.2C400.404 200.013 414.829 209.636 426.371 222.244C437.913 234.851 446.227 250.068 450.601 266.592C454.975 283.116 455.28 300.453 451.488 317.12C447.697 333.787 439.922 349.287 428.83 362.292L431.322 364.784L431.957 364.148C435.272 360.84 439.764 358.983 444.448 358.983C449.131 358.983 453.623 360.84 456.938 364.148L506.834 414.035ZM296.446 85.447V95.439H350.346C352.468 95.439 354.503 96.2818 356.003 97.7821C357.503 99.2824 358.346 101.317 358.346 103.439V188.431C361.712 188.742 365.042 189.21 368.337 189.837V92.91C368.335 90.9314 367.548 89.0345 366.148 87.6355C364.749 86.2364 362.853 85.4493 360.874 85.447H296.446ZM296.446 201.577C310.507 193.624 326.216 189.027 342.346 188.146V111.439H296.446V201.577ZM253.546 43.194C255.504 43.4101 257.313 44.341 258.627 45.8083C259.941 47.2756 260.668 49.1762 260.668 51.146V231.131H263.181C266.37 226.807 269.88 222.729 273.681 218.931C275.863 216.749 278.123 214.677 280.461 212.716C280.461 212.648 280.45 212.582 280.45 212.516V51.146C280.45 49.1764 281.176 47.2759 282.49 45.8086C283.804 44.3414 285.613 43.4104 287.571 43.194L270.558 21.656L253.546 43.194ZM253.462 247.131H59.122C57.0003 247.131 54.9654 246.288 53.4651 244.788C51.9649 243.288 51.122 241.253 51.122 239.131C51.122 237.009 51.9649 234.974 53.4651 233.474C54.9654 231.974 57.0003 231.131 59.122 231.131H69.027V200.875C69.027 198.753 69.8699 196.718 71.3701 195.218C72.8704 193.718 74.9053 192.875 77.027 192.875H112.806C114.928 192.875 116.963 193.718 118.463 195.218C119.963 196.718 120.806 198.753 120.806 200.875V231.131H127.574V166.25C127.574 164.128 128.417 162.093 129.917 160.593C131.417 159.093 133.452 158.25 135.574 158.25H171.353C173.475 158.25 175.51 159.093 177.01 160.593C178.51 162.093 179.353 164.128 179.353 166.25V231.131H186.121V125.266C186.121 123.144 186.964 121.109 188.464 119.609C189.964 118.109 191.999 117.266 194.121 117.266H229.9C232.022 117.266 234.057 118.109 235.557 119.609C237.057 121.109 237.9 123.144 237.9 125.266V231.131H244.67V111.439H41.991V281.457H243.417C244.773 269.524 248.17 257.912 253.462 247.131ZM221.9 133.266H202.121V231.131H221.9V133.266ZM163.353 174.25H143.574V231.131H163.353V174.25ZM104.806 208.875H85.027V231.131H104.806V208.875ZM244.3 390.452C244.302 389.845 244.167 389.245 243.904 388.698C243.642 388.151 243.259 387.67 242.785 387.291C242.728 387.245 242.672 387.199 242.616 387.151C242.335 386.913 242.066 386.664 241.789 386.423H142.549C142.271 386.664 142.003 386.913 141.723 387.15C141.667 387.198 141.61 387.244 141.553 387.29C141.078 387.669 140.694 388.15 140.431 388.697C140.167 389.245 140.031 389.844 140.031 390.452V397.559H244.3V390.452ZM209.706 339.414H174.637C170.683 350.585 164.971 361.053 157.715 370.423H226.629C219.374 361.054 213.662 350.585 209.709 339.414H209.706ZM246.939 323.414C244.482 314.968 243.088 306.248 242.787 297.457H33.991C31.8693 297.457 29.8344 296.614 28.3341 295.114C26.8339 293.614 25.991 291.579 25.991 289.457V103.439C25.991 101.317 26.8339 99.2824 28.3341 97.7821C29.8344 96.2818 31.8693 95.439 33.991 95.439H244.669V85.447H23.463C21.4844 85.4493 19.5876 86.2364 18.1885 87.6355C16.7894 89.0345 16.0024 90.9314 16 92.91V315.952C16.0024 317.93 16.7895 319.827 18.1886 321.226C19.5877 322.625 21.4845 323.412 23.463 323.414H246.939ZM348.421 383.384C369.175 383.384 389.288 376.188 405.331 363.021C421.375 349.855 432.356 331.533 436.406 311.177C440.455 290.822 437.32 269.692 427.537 251.388C417.753 233.084 401.926 218.739 382.751 210.797C363.577 202.854 342.241 201.806 322.381 207.831C302.52 213.855 285.362 226.58 273.832 243.837C262.301 261.093 257.111 281.814 259.145 302.469C261.179 323.123 270.312 342.433 284.988 357.109C293.299 365.466 303.185 372.091 314.074 376.601C324.963 381.111 336.638 383.417 348.424 383.384H348.421ZM496 426.526C496.003 426.308 495.962 426.091 495.88 425.889C495.797 425.687 495.675 425.504 495.521 425.35L445.633 375.462C445.318 375.155 444.896 374.983 444.457 374.983C444.017 374.983 443.595 375.155 443.28 375.462L430.211 388.531C429.903 388.845 429.731 389.267 429.731 389.707C429.731 390.147 429.903 390.569 430.211 390.883L480.1 440.772C480.415 441.079 480.837 441.25 481.277 441.25C481.717 441.25 482.139 441.079 482.454 440.772L495.52 427.7C495.674 427.546 495.796 427.363 495.879 427.161C495.961 426.96 496.002 426.744 496 426.526ZM425.514 293.676C425.514 308.923 420.993 323.827 412.522 336.505C404.051 349.182 392.011 359.063 377.925 364.898C363.839 370.733 348.339 372.259 333.384 369.285C318.43 366.31 304.694 358.968 293.913 348.187C283.132 337.406 275.79 323.669 272.815 308.715C269.841 293.761 271.367 278.261 277.202 264.175C283.037 250.089 292.918 238.049 305.595 229.578C318.272 221.107 333.177 216.586 348.424 216.586C368.862 216.609 388.457 224.738 402.909 239.191C417.362 253.643 425.491 273.237 425.514 293.676ZM409.514 293.676C409.514 281.594 405.931 269.782 399.218 259.736C392.506 249.69 382.965 241.86 371.802 237.236C360.639 232.612 348.356 231.403 336.506 233.76C324.656 236.117 313.77 241.935 305.227 250.479C296.683 259.022 290.865 269.908 288.508 281.758C286.151 293.608 287.36 305.891 291.984 317.054C296.608 328.217 304.438 337.758 314.484 344.47C324.53 351.183 336.342 354.766 348.424 354.766C364.62 354.748 380.148 348.306 391.601 336.853C403.054 325.4 409.496 309.872 409.514 293.676Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">SEO-Friendly Structure</h3>

                       <p class="text-center para">Optimized for search engines to improve visibility and ranking.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

                    <div style="--clr:hsl(30, 70%, 20%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 439 439" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M50.6303 342.402C35.961 342.402 21.6297 338.658 8.64149 331.365C1.95884 327.924 -0.629459 319.313 3.36274 312.836C16.627 291.641 21.4168 265.731 15.3437 241.365C9.04897 216.105 -0.0589891 194.83 0.00620744 168.089C0.232222 74.2697 78.3214 -1.78856 172.045 0.0315105C262.57 1.85484 337.176 77.9523 337.177 168.502C337.178 286.761 213.241 369.788 103.827 324.121C88.7464 335.959 69.7904 342.402 50.6303 342.402ZM32.8055 313.528C53.4163 319.929 76.597 314.816 92.4908 299.45C96.4069 295.663 102.265 294.71 107.179 297.061C200.852 341.847 311.098 271.648 311.097 168.502C311.097 91.5327 248.482 27.6542 171.52 26.1047C92.2061 24.5291 26.2761 88.7651 26.0848 168.152C26.0229 193.551 35.9328 213.85 41.3484 237.911C47.0542 263.267 44.0487 290.08 32.8055 313.528Z" fill="var(--clr)"/>

                            <path d="M388.369 439C369.21 439 350.253 432.557 335.174 420.721C276.986 445.006 207.772 433.946 160.062 392.744C154.611 388.037 154.009 379.804 158.715 374.352C163.423 368.903 171.656 368.299 177.106 373.007C219.421 409.55 281.391 417.77 331.822 393.66C336.735 391.309 342.591 392.263 346.51 396.05C362.403 411.414 385.584 416.531 406.195 410.127C392.932 382.463 391.094 350.77 401.373 321.429C401.465 321.165 401.566 320.905 401.675 320.647C409.181 302.951 412.964 284.144 412.917 264.75C412.834 230.557 401.46 198.927 380.021 173.277C375.403 167.751 376.138 159.529 381.664 154.91C387.188 150.291 395.413 151.028 400.031 156.553C425.062 186.501 438.9 224.903 438.995 264.687C439.051 287.475 434.629 309.589 425.855 330.426C416.638 357.106 420.877 385.672 435.637 409.432C439.632 415.911 437.042 424.522 430.357 427.966C417.371 435.256 403.036 438.999 388.369 439Z" fill="var(--clr)"/>

                            <path d="M168.592 189.773C179.987 189.773 189.224 180.541 189.224 169.151C189.224 157.762 179.987 148.53 168.592 148.53C157.196 148.53 147.959 157.762 147.959 169.151C147.959 180.541 157.196 189.773 168.592 189.773Z" fill="var(--clr)"/>

                            <path d="M92.5759 189.773C103.971 189.773 113.208 180.541 113.208 169.151C113.208 157.762 103.971 148.53 92.5759 148.53C81.1809 148.53 71.9434 157.762 71.9434 169.151C71.9434 180.541 81.1809 189.773 92.5759 189.773Z" fill="var(--clr)"/>

                            <path d="M244.607 189.773C256.002 189.773 265.24 180.541 265.24 169.151C265.24 157.762 256.002 148.53 244.607 148.53C233.212 148.53 223.975 157.762 223.975 169.151C223.975 180.541 233.212 189.773 244.607 189.773Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Live Chat / Chatbot</h3>

                       <p class="text-center para">For instant customer support or FAQs.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

               </div>

                <div data-aos="fade-up" data-aos-delay="300" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(80, 70%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 398 398" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M301.405 56.4708C305.698 56.4708 309.179 52.9899 309.179 48.6974C309.179 44.4049 305.698 40.924 301.405 40.924H301.361C297.069 40.924 293.609 44.4049 293.609 48.6974C293.609 52.9899 297.113 56.4708 301.405 56.4708Z" fill="var(--clr)"/>

                            <path d="M343.358 56.4708C347.651 56.4708 351.132 52.9899 351.132 48.6974C351.132 44.4049 347.651 40.924 343.358 40.924H343.314C339.022 40.924 335.562 44.4049 335.562 48.6974C335.562 52.9899 339.066 56.4708 343.358 56.4708Z" fill="var(--clr)"/>

                            <path d="M259.452 56.4708C263.745 56.4708 267.226 52.9899 267.226 48.6974C267.226 44.4049 263.745 40.924 259.452 40.924H259.408C255.115 40.924 251.656 44.4049 251.656 48.6974C251.656 52.9899 255.159 56.4708 259.452 56.4708Z" fill="var(--clr)"/>

                            <path d="M54.6191 56.4708H171.424C175.718 56.4708 179.198 52.9899 179.198 48.6974C179.198 44.4049 175.718 40.924 171.424 40.924H54.6191C50.3259 40.924 46.8457 44.4049 46.8457 48.6974C46.8457 52.9899 50.3259 56.4708 54.6191 56.4708Z" fill="var(--clr)"/>

                            <path d="M373.062 0.00549316H24.9387C11.1875 0.00549316 0 11.1922 0 24.9435V312.781C0 326.531 11.1875 337.719 24.9387 337.719H87.1527C92.1137 345.229 97.8715 352.285 104.385 358.799C129.661 384.075 163.262 397.995 199 397.995C234.738 397.995 268.34 384.075 293.616 358.799C300.169 352.245 305.898 345.175 310.805 337.719H373.062C386.812 337.719 398 326.531 398 312.781V24.9435C398 11.1922 386.812 0.00549316 373.062 0.00549316ZM24.9387 15.5524H373.062C378.24 15.5524 382.453 19.7656 382.453 24.9435V81.8637H15.5469V24.9435C15.5469 19.7656 19.7601 15.5524 24.9387 15.5524ZM373.062 322.172H319.586C343.465 272.393 334.815 210.79 293.616 169.59C272.67 148.645 246.116 135.503 216.826 131.586C188.478 127.798 159.156 133.294 134.257 147.065C130.5 149.144 129.139 153.873 131.217 157.63C133.295 161.387 138.026 162.747 141.781 160.67C187.625 135.312 245.54 143.502 282.622 180.583C328.725 226.687 328.725 301.703 282.622 347.805C260.283 370.144 230.585 382.447 199 382.447C167.415 382.447 137.717 370.144 115.378 347.805C78.3018 310.729 70.1133 252.823 95.464 206.987C97.5419 203.23 96.1807 198.501 92.4238 196.422C88.6685 194.345 83.9376 195.706 81.8597 199.463C68.0883 224.36 62.5917 253.68 66.3813 282.02C68.271 296.149 72.314 309.638 78.3391 322.171H24.9387C19.7601 322.171 15.5469 317.958 15.5469 312.78V97.409H382.453V312.78C382.453 317.959 378.24 322.172 373.062 322.172Z" fill="var(--clr)"/>

                            <path d="M198.988 308.986C203.282 308.986 206.762 305.505 206.762 301.212V282.659C206.762 278.367 203.281 274.886 198.988 274.886C194.696 274.886 191.215 278.367 191.215 282.659V301.212C191.215 305.505 194.695 308.986 198.988 308.986Z" fill="var(--clr)"/>

                            <path d="M198.99 353.297C235.716 353.297 265.595 323.418 265.595 286.691V256.966C265.595 246.909 258.363 238.514 248.828 236.695V216.313C248.828 193.365 230.158 174.695 207.209 174.695H190.771C167.823 174.695 149.153 193.365 149.153 216.313V236.698C139.616 238.523 132.385 246.915 132.385 256.966V286.691C132.384 323.418 162.264 353.297 198.99 353.297ZM164.7 216.313C164.7 201.937 176.395 190.242 190.771 190.242H207.209C221.585 190.242 233.281 201.937 233.281 216.313V236.325H164.7V216.313ZM147.931 256.966C147.931 254.205 150.275 251.872 153.048 251.872H244.953C247.715 251.872 250.048 254.205 250.048 256.966V286.691C250.048 314.845 227.144 337.75 198.99 337.75C170.836 337.75 147.931 314.845 147.931 286.691V256.966Z" fill="var(--clr)"/>

                            <path d="M104.384 169.59C101.349 172.625 101.349 177.548 104.384 180.584C105.902 182.101 107.891 182.861 109.881 182.861C111.87 182.861 113.86 182.101 115.377 180.584L115.399 180.562C118.435 177.527 118.424 172.615 115.388 169.58C112.353 166.544 107.42 166.554 104.384 169.59Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Security Features</h3>

                       <p class="text-center para">SSL certificate for secure connections, plus other security measures to protect user data.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

                    <div style="--clr:hsl(120, 70%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 441 441" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M421.533 82.0554C420.082 77.714 418.352 73.5185 416.369 69.5071L426.687 52.35L388.65 14.3196L371.486 24.6312C367.482 22.6481 363.286 20.9254 358.938 19.4598L354.096 0H300.301L295.456 19.4598C291.108 20.9185 286.913 22.6411 282.908 24.6312L265.744 14.3196L227.7 52.35L238.018 69.5071C237.754 70.035 237.536 70.5872 237.285 71.129H0V441H341.419V376.984H327.194V426.774H14.2258V85.3548H241.839V170.71H327.194V305.855H341.419V227.613H354.096L358.938 208.153C363.286 206.694 367.482 204.972 371.486 202.982L388.65 213.293L426.687 175.256L416.369 158.099C418.352 154.094 420.082 149.899 421.533 145.551L441 140.699V86.9143L421.533 82.0554ZM256.065 95.4129L317.135 156.484H256.065V95.4129ZM299.232 118.464C298.94 116.821 298.742 115.258 298.742 113.806C298.742 98.115 311.502 85.3548 327.194 85.3548C342.885 85.3548 355.645 98.115 355.645 113.806C355.645 129.498 342.885 142.258 327.194 142.258C325.735 142.258 324.172 142.06 322.536 141.768L299.232 118.464ZM336.262 155.494C355.447 151.319 369.871 134.228 369.871 113.806C369.871 90.2693 350.731 71.129 327.194 71.129C306.772 71.129 289.681 85.5528 285.506 104.738L274.239 93.4715C282.637 71.4902 303.33 56.9032 327.194 56.9032C358.57 56.9032 384.097 82.4305 384.097 113.806C384.097 140.119 366.221 162.489 341.419 168.831V160.652L336.262 155.494ZM426.774 129.592L410.249 133.707L409.107 137.635C407.328 143.758 404.932 149.576 401.994 154.918L400.014 158.505L408.773 173.071L386.452 195.386L371.892 186.644L368.305 188.614C362.97 191.552 357.152 193.948 351.022 195.733L347.094 196.873L342.968 213.387H341.419V183.477C374.275 176.833 398.323 147.947 398.323 113.806C398.323 74.5848 366.415 42.6774 327.194 42.6774C299.496 42.6774 275.055 58.3029 263.299 82.5312L252.779 72.0112L254.38 69.1146L245.624 54.5485L267.943 32.2373L282.502 40.9791L286.089 39.0064C291.424 36.0681 297.242 33.6717 303.372 31.8865L307.3 30.7508L311.419 14.2258H342.979L347.094 30.7508L351.022 31.8865C357.152 33.6717 362.97 36.0681 368.305 39.0064L371.892 40.9791L386.452 32.2373L408.773 54.5485L400.014 69.1146L401.994 72.7023C404.939 78.044 407.328 83.8545 409.107 89.9845L410.249 93.9126L426.774 98.0212V129.592Z" fill="var(--clr)"/>

                            <path d="M128.032 412.549C182.945 412.549 227.612 367.881 227.612 312.968C227.612 258.055 182.945 213.387 128.032 213.387C73.1187 213.387 28.4512 258.055 28.4512 312.968C28.4512 367.881 73.1187 412.549 128.032 412.549ZM72.9936 267.984C62.9495 280.248 56.9028 295.911 56.9028 312.968C56.9028 330.024 62.9495 345.688 72.9936 357.951L62.9147 368.023C50.3178 353.148 42.677 333.945 42.677 312.968C42.677 291.99 50.3178 272.788 62.9147 257.905L72.9936 267.984ZM184.935 312.968C184.935 344.344 159.408 369.871 128.032 369.871C96.6559 369.871 71.1286 344.344 71.1286 312.968C71.1286 281.592 96.6559 256.065 128.032 256.065C159.408 256.065 184.935 281.592 184.935 312.968ZM72.9693 378.085L83.0483 368.013C95.3187 378.05 110.975 384.097 128.032 384.097C145.088 384.097 160.745 378.05 173.015 368.006L183.094 378.078C168.212 390.682 149.009 398.323 128.032 398.323C107.054 398.323 87.8516 390.682 72.9693 378.085ZM193.149 368.03L183.07 357.958C193.114 345.688 199.161 330.024 199.161 312.968C199.161 295.911 193.114 280.248 183.07 267.984L193.149 257.912C205.746 272.788 213.387 291.99 213.387 312.968C213.387 333.945 205.746 353.148 193.149 368.03ZM183.094 247.851L173.015 257.923C160.745 247.885 145.088 241.839 128.032 241.839C110.975 241.839 95.3187 247.885 83.0483 257.93L72.9693 247.858C87.8516 235.254 107.054 227.613 128.032 227.613C149.009 227.613 168.212 235.254 183.094 247.851Z" fill="var(--clr)"/>

                            <path d="M28.4512 99.5807H42.677V113.806H28.4512V99.5807Z" fill="var(--clr)"/>

                            <path d="M56.9023 99.5807H199.16V113.806H56.9023V99.5807Z" fill="var(--clr)"/>

                            <path d="M28.4512 128.032H199.161V142.258H28.4512V128.032Z" fill="var(--clr)"/>

                            <path d="M28.4512 156.484H199.161V170.71H28.4512V156.484Z" fill="var(--clr)"/>

                            <path d="M28.4512 184.936H199.161V199.161H28.4512V184.936Z" fill="var(--clr)"/>

                            <path d="M419.662 277.403C407.899 277.403 398.323 286.979 398.323 298.742C398.323 305.001 401.084 310.585 405.395 314.496L385.237 362.873C384.851 362.852 384.49 362.758 384.098 362.758C379.312 362.758 374.936 364.394 371.379 367.068L340.708 346.619C341.128 344.948 341.42 343.225 341.42 341.419C341.42 329.656 331.845 320.081 320.081 320.081C308.318 320.081 298.743 329.656 298.743 341.419C298.743 344.031 299.285 346.504 300.142 348.817L266.835 372.893C263.654 371.017 260.007 369.871 256.065 369.871C244.302 369.871 234.727 379.446 234.727 391.21C234.727 402.973 244.302 412.548 256.065 412.548C267.829 412.548 277.404 402.973 277.404 391.21C277.404 388.598 276.862 386.125 276.004 383.812L309.311 359.737C312.493 361.612 316.139 362.758 320.081 362.758C324.867 362.758 329.243 361.122 332.807 358.448L363.478 378.891C363.051 380.568 362.759 382.291 362.759 384.097C362.759 395.86 372.334 405.436 384.098 405.436C395.861 405.436 405.436 395.86 405.436 384.097C405.436 377.838 402.675 372.254 398.365 368.343L418.523 319.966C418.908 319.987 419.27 320.081 419.662 320.081C431.425 320.081 441.001 310.505 441.001 298.742C441.001 286.979 431.425 277.403 419.662 277.403ZM256.065 398.323C252.148 398.323 248.952 395.134 248.952 391.21C248.952 387.285 252.148 384.097 256.065 384.097C259.983 384.097 263.178 387.285 263.178 391.21C263.178 395.134 259.983 398.323 256.065 398.323ZM320.081 348.532C316.164 348.532 312.969 345.344 312.969 341.419C312.969 337.495 316.164 334.307 320.081 334.307C323.999 334.307 327.194 337.495 327.194 341.419C327.194 345.344 323.999 348.532 320.081 348.532ZM384.098 391.21C380.18 391.21 376.985 388.021 376.985 384.097C376.985 380.172 380.18 376.984 384.098 376.984C388.015 376.984 391.21 380.172 391.21 384.097C391.21 388.021 388.015 391.21 384.098 391.21ZM419.662 305.855C415.744 305.855 412.549 302.667 412.549 298.742C412.549 294.817 415.744 291.629 419.662 291.629C423.58 291.629 426.775 294.817 426.775 298.742C426.775 302.667 423.58 305.855 419.662 305.855Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Analytics and Reporting Tools</h3>

                       <p class="text-center para">To track visitor behavior, engagement, and other metrics.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

               </div>

                <div data-aos="fade-up" data-aos-delay="300" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(180, 70%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 480 484" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M196.215 217.168L221.943 198.472C223.31 197.479 224.328 196.078 224.85 194.472C225.371 192.865 225.371 191.134 224.849 189.527C224.327 187.92 223.309 186.52 221.942 185.527C220.575 184.534 218.929 184 217.239 184H185.439L175.607 153.752C175.081 152.151 174.063 150.758 172.699 149.77C171.334 148.782 169.692 148.25 168.007 148.25C166.323 148.25 164.681 148.782 163.316 149.77C161.951 150.758 160.933 152.151 160.407 153.752L150.559 184H118.759C117.07 184 115.424 184.534 114.057 185.527C112.689 186.52 111.672 187.92 111.15 189.527C110.627 191.134 110.627 192.865 111.149 194.472C111.671 196.078 112.689 197.479 114.055 198.472L139.783 217.168L129.951 247.416C129.429 249.023 129.429 250.754 129.951 252.361C130.473 253.968 131.491 255.368 132.858 256.361C134.225 257.354 135.871 257.889 137.561 257.889C139.25 257.889 140.897 257.353 142.263 256.36L167.999 237.664L193.735 256.36C195.102 257.353 196.748 257.889 198.438 257.889C200.128 257.889 201.774 257.354 203.141 256.361C204.508 255.368 205.526 253.968 206.048 252.361C206.57 250.754 206.57 249.023 206.047 247.416L196.215 217.168ZM179.199 216.584L183.199 228.944L172.687 221.304C171.32 220.31 169.673 219.775 167.983 219.775C166.293 219.775 164.646 220.31 163.279 221.304L152.767 228.944L156.767 216.584C157.289 214.977 157.288 213.246 156.765 211.639C156.242 210.032 155.223 208.632 153.855 207.64L143.375 200H156.375C158.065 200 159.711 199.465 161.077 198.472C162.444 197.479 163.461 196.079 163.983 194.472L167.983 182.112L171.983 194.472C172.505 196.079 173.523 197.479 174.889 198.472C176.256 199.465 177.902 200 179.591 200H192.591L182.079 207.64C180.717 208.636 179.705 210.038 179.188 211.645C178.671 213.251 178.675 214.98 179.199 216.584Z" fill="var(--clr)"/>

                            <path d="M288 128H304V144H288V128Z" fill="var(--clr)"/>

                            <path d="M320 128H400V144H320V128Z" fill="var(--clr)"/>

                            <path d="M288 160H400V176H288V160Z" fill="var(--clr)"/>

                            <path d="M288 192H400V208H288V192Z" fill="var(--clr)"/>

                            <path d="M288 256H400V272H288V256Z" fill="var(--clr)"/>

                            <path d="M288 224H352V240H288V224Z" fill="var(--clr)"/>

                            <path d="M368 224H400V240H368V224Z" fill="var(--clr)"/>

                            <path d="M447.28 32.72C445.581 23.5391 440.723 15.2419 433.549 9.26599C426.375 3.29011 417.337 0.0121257 408 0H40C29.3913 0 19.2172 4.21427 11.7157 11.7157C4.21427 19.2172 0 29.3913 0 40V376C0.0121257 385.337 3.29011 394.375 9.26599 401.549C15.2419 408.723 23.5391 413.581 32.72 415.28C34.4193 424.461 39.2768 432.758 46.4507 438.734C53.6247 444.71 62.6631 447.988 72 448H302.4L323.2 484L337.04 476L307.2 424.32C306.153 422.471 305.877 420.284 306.431 418.233C306.985 416.181 308.325 414.431 310.16 413.36C311.067 412.833 312.07 412.491 313.11 412.355C314.15 412.218 315.207 412.29 316.219 412.565C317.231 412.841 318.178 413.314 319.006 413.959C319.834 414.603 320.525 415.406 321.04 416.32L337.04 444C337.939 445.518 339.306 446.705 340.935 447.383C342.564 448.06 344.369 448.193 346.08 447.76C347.785 447.301 349.29 446.291 350.361 444.887C351.431 443.484 352.008 441.765 352 440V344C352 341.878 352.843 339.843 354.343 338.343C355.843 336.843 357.878 336 360 336C362.122 336 364.157 336.843 365.657 338.343C367.157 339.843 368 341.878 368 344V416C368 418.122 368.843 420.157 370.343 421.657C371.843 423.157 373.878 424 376 424C378.122 424 380.157 423.157 381.657 421.657C383.157 420.157 384 418.122 384 416V392C384.139 389.924 385.026 387.969 386.497 386.497C387.969 385.026 389.924 384.139 392 384C394.122 384 396.157 384.843 397.657 386.343C399.157 387.843 400 389.878 400 392V416C400 418.122 400.843 420.157 402.343 421.657C403.843 423.157 405.878 424 408 424C410.122 424 412.157 423.157 413.657 421.657C415.157 420.157 416 418.122 416 416V400C416 397.878 416.843 395.843 418.343 394.343C419.843 392.843 421.878 392 424 392C426.122 392 428.157 392.843 429.657 394.343C431.157 395.843 432 397.878 432 400V424C432 426.122 432.843 428.157 434.343 429.657C435.843 431.157 437.878 432 440 432C442.122 432 444.157 431.157 445.657 429.657C447.157 428.157 448 426.122 448 424V408C448 405.878 448.843 403.843 450.343 402.343C451.843 400.843 453.878 400 456 400C458.122 400 460.157 400.843 461.657 402.343C463.157 403.843 464 405.878 464 408V480H480V72C479.988 62.6631 476.71 53.6247 470.734 46.4507C464.758 39.2768 456.461 34.4193 447.28 32.72ZM72 432C67.0512 431.975 62.2305 430.425 58.1938 427.562C54.1571 424.699 51.1005 420.662 49.44 416H290.64C289.613 421.469 290.518 427.125 293.2 432H72ZM432 376C432 376.48 431.84 376.96 431.84 377.52C429.334 376.563 426.682 376.049 424 376C419.874 375.988 415.818 377.064 412.24 379.12C410.074 375.714 407.083 372.909 403.545 370.966C400.008 369.022 396.037 368.002 392 368C389.263 368.017 386.552 368.532 384 369.52V344C384 337.635 381.471 331.53 376.971 327.029C372.47 322.529 366.365 320 360 320C353.635 320 347.53 322.529 343.029 327.029C338.529 331.53 336 337.635 336 344V400H326.72C323.052 397.707 318.831 396.451 314.506 396.366C310.181 396.282 305.915 397.372 302.16 399.52L301.44 400H40C33.6406 399.981 27.5472 397.446 23.0504 392.95C18.5537 388.453 16.019 382.359 16 376V80H432V376ZM432 64H16V40C16.019 33.6406 18.5537 27.5472 23.0504 23.0504C27.5472 18.5537 33.6406 16.019 40 16H408C414.359 16.019 420.453 18.5537 424.95 23.0504C429.446 27.5472 431.981 33.6406 432 40V64ZM464 385.44C461.209 384.39 458.236 383.905 455.256 384.015C452.275 384.125 449.347 384.827 446.64 386.08C447.534 382.794 447.991 379.405 448 376V49.44C452.662 51.1005 456.699 54.1571 459.562 58.1938C462.425 62.2305 463.975 67.0512 464 72V385.44Z" fill="var(--clr)"/>

                            <path d="M301.44 303.6L246.16 248.24C253.1 234.826 256.47 219.852 255.948 204.758C255.425 189.664 251.026 174.959 243.174 162.057C235.323 149.155 224.283 138.492 211.118 131.092C197.952 123.692 183.103 119.805 168 119.805C152.897 119.805 138.049 123.692 124.883 131.092C111.717 138.492 100.678 149.155 92.8262 162.057C84.9748 174.959 80.576 189.664 80.0531 204.758C79.5302 219.852 82.9007 234.826 89.8403 248.24L34.5603 303.6C33.6111 304.574 32.9227 305.771 32.5588 307.081C32.1948 308.391 32.1671 309.772 32.4781 311.096C32.789 312.419 33.4288 313.643 34.3381 314.654C35.2473 315.665 36.3969 316.431 37.6803 316.88L67.8403 326.88L77.9203 357.04C78.3515 358.329 79.1083 359.485 80.1175 360.396C81.1266 361.307 82.3538 361.942 83.6803 362.24C84.2809 362.398 84.8993 362.479 85.5203 362.48C87.6456 362.486 89.6871 361.652 91.2003 360.16L156.16 295.12C160.085 295.655 164.039 295.949 168 296C171.961 295.949 175.915 295.655 179.84 295.12L244.8 360.16C246.314 361.652 248.355 362.486 250.48 362.48C251.101 362.479 251.72 362.398 252.32 362.24C253.647 361.942 254.874 361.307 255.883 360.396C256.892 359.485 257.649 358.329 258.08 357.04L268.16 326.88L298.32 316.88C299.604 316.431 300.753 315.665 301.663 314.654C302.572 313.643 303.212 312.419 303.523 311.096C303.834 309.772 303.806 308.391 303.442 307.081C303.078 305.771 302.39 304.574 301.44 303.6ZM88.9603 339.68L81.7603 318C81.3589 316.819 80.6869 315.748 79.7979 314.873C78.9089 313.998 77.8276 313.343 76.6403 312.96L55.0403 305.76L65.8403 294.96L90.5603 304.16L99.7603 328.88L88.9603 339.68ZM112.24 316.48L104.32 295.12C103.913 294.053 103.281 293.086 102.466 292.286C101.652 291.485 100.674 290.869 99.6003 290.48L78.2403 282.48L98.7203 262.08C108.904 275.101 122.543 284.998 138.08 290.64L112.24 316.48ZM168 280C153.76 280 139.84 275.777 127.999 267.866C116.159 259.954 106.931 248.709 101.481 235.553C96.0315 222.397 94.6057 207.92 97.3838 193.953C100.162 179.987 107.019 167.158 117.089 157.088C127.158 147.019 139.987 140.162 153.954 137.383C167.92 134.605 182.397 136.031 195.554 141.481C208.71 146.93 219.955 156.159 227.866 167.999C235.778 179.839 240 193.76 240 208C239.971 227.086 232.375 245.383 218.879 258.879C205.383 272.375 187.087 279.97 168 280ZM231.68 295.12L223.76 316.48L197.92 290.64C213.458 284.998 227.097 275.101 237.28 262.08L257.76 282.48L236.4 290.48C235.327 290.869 234.349 291.485 233.535 292.286C232.72 293.086 232.088 294.053 231.68 295.12ZM259.36 312.96C258.173 313.343 257.092 313.998 256.203 314.873C255.314 315.748 254.642 316.819 254.24 318L247.04 339.68L236.24 328.88L245.44 304.16L270.16 294.96L280.96 305.76L259.36 312.96Z" fill="var(--clr)"/>

                            <path d="M32 32H48V48H32V32Z" fill="var(--clr)"/>

                            <path d="M64 32H80V48H64V32Z" fill="var(--clr)"/>

                            <path d="M96 32H112V48H96V32Z" fill="var(--clr)"/>

                            </svg>



                       <h3 class="text-center title">Quality Content</h3>

                       <p class="text-center para">Well-written, informative content that's regularly updated to engage users and improve SEO.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

                    <div style="--clr:hsl(240, 70%, 30%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 392 368" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M91.2004 52.8H147.2C157.6 52.8 157.6 36.8 147.2 36.8H91.2004C80.8004 36.8 80.8004 52.8 91.2004 52.8Z" fill="var(--clr)"/>

                            <path d="M240 74.4H91.2004C80.8004 74.4 80.8004 90.4 91.2004 90.4H239.2C250.4 89.6 250.4 74.4 240 74.4Z" fill="var(--clr)"/>

                            <path d="M240 111.2H91.2004C80.8004 111.2 80.8004 127.2 91.2004 127.2H239.2C250.4 127.2 250.4 111.2 240 111.2Z" fill="var(--clr)"/>

                            <path d="M372 250.4C300.8 185.6 208 288 279.2 352H34.4L83.2 303.2C90.4 296 79.2 284.8 72 292L16.8 347.2C16 348 16 348.8 15.2 349.6V171.2L151.2 258.4C155.2 261.6 160.8 262.4 165.6 262.4C170.4 262.4 176 260.8 180 258.4L314.4 172.8V208C314.4 218.4 330.4 218.4 330.4 208V156C330.4 153.6 328.8 151.2 327.2 149.6L284 90.4V8C284 3.2 280.8 0 276 0H54.4C49.6 0 46.4 3.2 46.4 8V90.4L3.2 150.4C1.6 152 0 153.6 0 156.8V360C0 364.8 3.2 368 8 368H323.2C383.2 368.8 415.2 292 372 250.4ZM172 244.8C168.8 247.2 164 247.2 160.8 244.8L35.2 164H299.2L172 244.8ZM307.2 148H284.8V117.6L307.2 148ZM62.4 16H268.8V148H62.4V16ZM46.4 148H24L46.4 117.6V148ZM360.8 336.8C328 370.4 269.6 345.6 270.4 299.2C270.4 269.6 294.4 246.4 323.2 246.4C369.6 245.6 393.6 304 360.8 336.8Z" fill="var(--clr)"/>

                            <path d="M347.999 280H317.599L322.399 276C330.399 268.8 319.199 256.8 311.999 264L291.999 281.6C288.799 284.8 288.799 289.6 291.199 292.8L308.799 312.8C310.399 314.4 312.799 315.2 314.399 315.2C320.799 315.2 324.799 306.4 319.999 301.6L315.199 296H339.199V328C339.199 338.4 355.199 338.4 355.199 328V288C355.999 284 352.799 280 347.999 280Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Email Newsletter Sign-Up</h3>

                       <p class="text-center para">For marketing and regular updates to subscribers.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

               </div>

                <div data-aos="fade-up" data-aos-delay="300" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(270, 70%, 40%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 442 412" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M246.752 378.917C246.752 382.603 243.764 385.59 240.079 385.59H201.919C198.234 385.59 195.246 382.602 195.246 378.917C195.246 375.232 198.234 372.238 201.919 372.238H240.079C243.765 372.238 246.752 375.231 246.752 378.917ZM280.529 390.834V187.328C280.529 183.097 277.086 179.653 272.86 179.653H169.143C164.917 179.653 161.468 183.097 161.468 187.328V390.834C161.468 395.077 164.917 398.509 169.143 398.509H272.86C277.086 398.509 280.529 395.076 280.529 390.834ZM272.86 166.301H169.143C157.552 166.301 148.116 175.737 148.116 187.328V390.834C148.116 402.436 157.552 411.867 169.143 411.867H272.86C284.445 411.867 293.887 402.437 293.887 390.834V187.328C293.887 175.737 284.446 166.301 272.86 166.301ZM182.068 54.3921H192.455V89.3901H182.068V54.3921ZM217.072 54.3921C220.206 54.3921 222.912 52.2141 223.593 49.1541L226.553 35.7121C227.287 32.3861 232.345 33.4971 231.611 36.8201L229.529 46.2731C228.614 50.4151 231.805 54.3921 236.045 54.3921H242.426C252.081 54.3921 259.93 62.2471 259.93 71.8971C259.93 81.5471 252.081 89.3901 242.426 89.3901H205.813V54.3921H217.072ZM179.739 102.742H242.426C259.441 102.742 273.283 88.9121 273.283 71.8961C273.283 55.5221 260.465 42.0911 244.345 41.0961L244.654 39.6951C246.55 31.1141 241.104 22.5841 232.517 20.6881C223.931 18.8031 215.406 24.2441 213.516 32.8251L211.704 41.0401H179.739C173.668 41.0401 168.716 45.9801 168.716 52.0631V91.7311C168.716 97.8021 173.667 102.742 179.739 102.742ZM136.469 28.8181V94.2511C136.469 102.708 143.345 109.578 151.802 109.578H193.715C201.362 109.578 208.012 113.652 211.506 120.449L220.999 138.978L230.491 120.461C233.991 113.652 240.636 109.579 248.283 109.579H290.202C298.659 109.579 305.529 102.709 305.529 94.2521V28.8181C305.529 20.3611 298.659 13.4851 290.202 13.4851H151.802C143.345 13.4861 136.469 20.3621 136.469 28.8181ZM151.802 122.936H193.715C196.331 122.936 198.43 124.219 199.623 126.548L215.063 156.656C217.537 161.493 224.464 161.487 226.941 156.656L242.375 126.548C243.568 124.219 245.667 122.936 248.283 122.936H290.202C306.018 122.936 318.881 110.068 318.881 94.2511V28.8181C318.881 12.9961 306.018 0.133057 290.202 0.133057H151.802C135.98 0.133057 123.117 12.9961 123.117 28.8181V94.2511C123.117 110.068 135.98 122.936 151.802 122.936ZM384.859 278.024C381.584 278.024 378.912 275.453 378.726 272.229H390.992C390.807 275.453 388.123 278.024 384.859 278.024ZM366.635 242.706C366.635 232.657 374.81 224.487 384.86 224.487C394.909 224.487 403.085 232.657 403.085 242.706V258.877H366.635V242.706ZM391.533 211.855V206.6C391.533 202.914 388.545 199.921 384.86 199.921C381.175 199.921 378.181 202.914 378.181 206.6V211.855C363.962 214.922 353.283 227.593 353.283 242.706V265.55C353.283 269.236 356.265 272.229 359.962 272.229H365.364C365.55 282.824 374.22 291.376 384.86 291.376C395.489 291.376 404.16 282.824 404.357 272.229H409.759C413.445 272.229 416.438 269.236 416.438 265.55V242.706C416.436 227.592 405.751 214.921 391.533 211.855ZM427.982 290.966V200.332C427.982 196.112 424.555 192.685 420.335 192.685H349.383C345.163 192.685 341.736 196.112 341.736 200.332V228.977C341.736 235.133 338.022 240.546 332.289 242.774L324.856 245.655L332.289 248.542C338.022 250.765 341.736 256.166 341.736 262.322V290.967C341.736 295.187 345.163 298.625 349.383 298.625H420.335C424.556 298.624 427.982 295.186 427.982 290.966ZM420.336 179.332H349.384C337.798 179.332 328.379 188.751 328.379 200.331V228.976C328.379 229.64 328.081 230.073 327.467 230.315L303.981 239.425C298.304 241.623 298.323 249.681 303.981 251.877L327.467 260.986C328.08 261.222 328.379 261.661 328.379 262.32V290.965C328.379 302.551 337.798 311.975 349.384 311.975H420.336C431.916 311.975 441.335 302.55 441.335 290.965V200.331C441.334 188.751 431.915 179.332 420.336 179.332ZM57.1441 268.133C44.9621 261.482 31.9821 246.099 31.9821 233.894C31.9821 223.274 45.2221 218.414 52.1201 226.315C54.7671 229.347 59.5061 229.358 62.1641 226.315C69.0591 218.421 82.3021 223.261 82.3021 233.894C82.3011 246.099 69.3321 261.482 57.1441 268.133ZM70.8061 209.047C65.9001 209.047 61.1621 210.499 57.1441 213.143C40.7341 202.341 18.6291 214.087 18.6291 233.894C18.6291 253.025 37.1521 274.052 54.4431 281.681C56.1541 282.439 58.1281 282.441 59.8391 281.681C77.1351 274.051 95.6531 253.024 95.6531 233.894C95.6531 220.193 84.5071 209.047 70.8061 209.047ZM109.709 248.541L117.142 245.654L109.709 242.773C103.975 240.545 100.267 235.132 100.267 228.976V200.331C100.267 196.111 96.8351 192.684 92.6151 192.684H21.6681C17.4481 192.684 14.0161 196.111 14.0161 200.331V290.965C14.0161 295.185 17.4481 298.623 21.6681 298.623H92.6151C96.8351 298.623 100.267 295.185 100.267 290.965V262.32C100.267 256.165 103.975 250.758 109.709 248.541ZM138.017 239.425L114.537 230.315C113.924 230.073 113.62 229.64 113.62 228.976V200.331C113.62 188.751 104.201 179.332 92.6161 179.332H21.6681C10.0831 179.332 0.664062 188.751 0.664062 200.331V290.965C0.664062 302.551 10.0831 311.975 21.6681 311.975H92.6151C104.2 311.975 113.619 302.55 113.619 290.965V262.32C113.619 261.662 113.923 261.223 114.536 260.986L138.016 251.877C143.679 249.68 143.686 241.616 138.017 239.425Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Social Media Integration</h3>

                       <p class="text-center para">Links to social media profiles and options to share content on social platforms.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

                    <div style="--clr:hsl(300, 70%, 20%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 535 337" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M46.7599 204.169H160.54C171.444 204.169 171.444 220.647 160.54 220.647H46.7599C35.8561 220.647 35.8561 204.169 46.7599 204.169Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M103.674 33.2299C141.763 33.2299 172.617 64.0831 172.617 102.173C172.617 140.263 141.763 171.116 103.674 171.116C65.5838 171.116 34.7305 140.263 34.7305 102.173C34.6816 64.132 65.5838 33.2299 103.674 33.2299ZM103.674 110.632C121.569 110.632 136.434 123.638 139.27 140.752C149.636 131.168 156.139 117.428 156.139 102.222C156.139 73.2266 132.669 49.7566 103.674 49.7566C74.6784 49.7566 51.2084 73.2266 51.2084 102.222C51.2084 117.477 57.7115 131.168 68.0775 140.752C70.9134 123.638 85.7777 110.632 103.674 110.632C92.7698 110.632 83.9197 101.782 83.9197 90.878C83.9197 79.9742 92.7698 71.1241 103.674 71.1241C114.577 71.1241 123.427 79.9742 123.427 90.878C123.379 101.782 114.577 110.632 103.674 110.632Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M311.09 51.9569H442.473C457.386 51.9569 469.61 64.1809 469.61 79.0941V125.301C469.61 140.214 457.386 152.438 442.473 152.438H311.09C296.177 152.438 283.953 140.214 283.953 125.301V79.0941C283.953 64.1809 296.177 51.9569 311.09 51.9569ZM311.09 68.4837H442.473C448.341 68.4837 453.084 73.2755 453.084 79.0941V125.301C453.084 131.168 448.292 135.911 442.473 135.911H311.09C305.223 135.911 300.48 131.119 300.48 125.301V79.0941C300.48 73.2266 305.223 68.4837 311.09 68.4837Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M291.093 185.589H392.649C403.308 185.589 403.259 202.067 392.649 202.067H291.093C280.482 202.116 280.482 185.589 291.093 185.589Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M65.7794 237.125H141.519C152.423 237.125 152.423 253.603 141.519 253.603H65.7794C54.8756 253.603 54.8756 237.125 65.7794 237.125Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M291.287 218.594H372.748C383.651 218.594 383.651 235.072 372.748 235.072H291.287C280.383 235.072 280.383 218.594 291.287 218.594Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M291.287 251.598H326.101C337.005 251.598 337.005 268.076 326.101 268.076H291.287C280.383 268.076 280.383 251.598 291.287 251.598Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M459.196 185.589C468.682 185.589 477.776 187.349 486.137 190.528V43.6935C486.137 28.7803 473.913 16.5564 459 16.5564H43.7772C28.8639 16.5564 16.64 28.7803 16.64 43.6935V276.682C16.64 291.595 28.8639 303.819 43.7772 303.819H396.56C388.297 291.693 383.456 277.073 383.456 261.28C383.505 219.474 417.39 185.589 459.196 185.589ZM502.615 199.28C522.125 212.971 534.886 235.609 534.886 261.28C534.886 303.086 501.002 336.97 459.196 336.97C441.3 336.97 424.822 330.761 411.865 320.346H43.7772C19.7693 320.346 0.162109 300.739 0.162109 276.731V43.6935C0.162109 19.6857 19.7693 0.0784912 43.7772 0.0784912H458.951C482.959 0.0784912 502.566 19.6857 502.566 43.6935V199.28H502.615ZM459.196 202.214C491.809 202.214 518.262 228.666 518.262 261.28C518.262 293.893 491.809 320.346 459.196 320.346C426.582 320.346 400.13 293.893 400.13 261.28C400.13 228.666 426.582 202.214 459.196 202.214Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M352.506 251.256C357.053 251.256 360.769 254.972 360.769 259.52C360.769 264.067 357.053 267.783 352.506 267.783C347.958 267.783 344.242 264.067 344.242 259.52C344.242 254.923 347.958 251.256 352.506 251.256Z" fill="var(--clr)"/>

                            <path fill-rule="evenodd" clip-rule="evenodd" d="M488.63 261.28C488.63 266.12 484.67 270.13 479.78 270.13H467.996V281.914C467.996 286.803 464.036 290.764 459.146 290.764C454.257 290.764 450.296 286.803 450.296 281.914V270.13H438.512C433.623 270.13 429.662 266.169 429.662 261.28C429.662 256.39 433.623 252.43 438.512 252.43H450.296V240.646C450.296 235.756 454.257 231.796 459.146 231.796C464.036 231.796 467.996 235.756 467.996 240.646V252.43H479.78C484.67 252.43 488.63 256.39 488.63 261.28Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Memberships or User Accounts</h3>

                       <p class="text-center para">Allowing users to register and log in for more personalized experiences.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

               </div>

                <div data-aos="fade-up" data-aos-delay="300" class="fb-items-tabs col-5 mx-md-3 mx-0 my-md-3 my-2 col-sm p-2 p-md-0">

                    <div style="--clr:hsl(180, 25%, 50%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 265 423" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M243.001 375.244L243.069 369.345C243.069 368.548 243.638 367.78 244.116 367.177C244.651 366.483 245.293 365.886 245.857 365.22C258.759 349.963 265.506 328.663 264.38 306.738V306.619V306.499L258.065 225.939C258.062 225.913 258.062 225.886 258.065 225.859C258.068 225.829 258.068 225.799 258.065 225.768C257.473 219.323 254.486 213.334 249.694 208.983C244.902 204.632 238.653 202.236 232.18 202.268H231.885C226.843 202.296 221.913 203.75 217.662 206.46C213.455 201.715 207.701 198.615 201.424 197.71C195.147 196.804 188.752 198.153 183.375 201.517C180.016 197.401 175.489 194.4 170.39 192.908C165.291 191.416 159.86 191.504 154.812 193.16V181.378C166.901 175.488 176.638 165.676 182.433 153.541C188.229 141.406 189.741 127.666 186.723 114.561C183.706 101.456 176.336 89.7609 165.817 81.3831C155.297 73.0053 142.25 68.4396 128.802 68.4308C115.354 68.422 102.3 72.9707 91.7702 81.3347C81.24 89.6987 73.855 101.384 70.8201 114.485C67.7852 127.586 69.2794 141.328 75.0591 153.471C80.8388 165.613 90.5627 175.438 102.644 181.344L102.462 240.98C99.7665 240.689 97.0559 240.554 94.3443 240.577H94.2249C89.9058 240.624 85.6461 241.589 81.7281 243.407C77.8101 245.225 74.3233 247.855 71.4987 251.123C68.6741 254.391 66.5763 258.222 65.3443 262.362C64.1123 266.502 63.7743 270.856 64.3525 275.137C68.9942 309.603 86.1875 341.146 112.64 363.724C113.749 364.544 114.78 365.466 115.718 366.477C116.918 367.951 117.157 369.635 117.128 371.461V375.301C115.325 376.688 113.864 378.47 112.858 380.511C111.852 382.552 111.328 384.796 111.326 387.071V407.153C111.332 411.091 112.897 414.866 115.68 417.651C118.463 420.437 122.236 422.007 126.174 422.018H234.007C237.948 422.013 241.727 420.446 244.515 417.659C247.302 414.873 248.871 411.095 248.877 407.153V387.071C248.876 384.78 248.345 382.52 247.326 380.469C246.306 378.417 244.826 376.629 243.001 375.244ZM129.513 403.814V390.411H230.673V403.814H129.513ZM88.0923 120.882C89.2279 114.308 91.94 108.106 95.9962 102.808C100.052 97.5109 105.332 93.2753 111.383 90.4642C117.434 87.653 124.076 86.3501 130.741 86.667C137.405 86.9839 143.894 88.9111 149.651 92.2837C155.408 95.6563 160.262 100.374 163.797 106.032C167.332 111.691 169.444 118.122 169.95 124.775C170.457 131.427 169.344 138.104 166.707 144.233C164.069 150.361 159.986 155.759 154.806 159.965V144.65V144.616C154.713 137.782 151.934 131.259 147.071 126.457C142.208 121.654 135.65 118.958 128.816 118.951C121.981 118.943 115.418 121.625 110.544 126.417C105.671 131.209 102.878 137.726 102.77 144.559C102.77 144.559 102.77 144.605 102.77 144.628L102.724 159.959C97.0258 155.339 92.665 149.281 90.0926 142.411C87.5203 135.541 86.8297 128.109 88.0923 120.882ZM82.4034 272.702C82.1714 270.98 82.3074 269.229 82.8022 267.564C83.2971 265.899 84.1397 264.359 85.2742 263.043C86.4087 261.728 87.8094 260.669 89.3837 259.935C90.9581 259.201 92.6702 258.81 94.4069 258.787C97.0856 258.774 99.7613 258.964 102.411 259.356L102.383 268.458V268.537C102.296 268.622 102.196 268.691 102.087 268.742C100.186 269.595 98.6343 271.073 97.6921 272.932C96.7498 274.79 96.4737 276.916 96.9098 278.953C97.346 280.991 98.4679 282.817 100.088 284.127C101.709 285.437 103.73 286.151 105.813 286.15C110.518 286.15 115.023 282.344 117.555 278.658C118.586 277.157 119.4 275.517 119.973 273.788C120.464 272.056 120.672 270.256 120.587 268.458L120.957 144.685V144.645C120.957 142.572 121.78 140.584 123.246 139.118C124.712 137.652 126.7 136.828 128.774 136.828C130.847 136.828 132.835 137.652 134.301 139.118C135.767 140.584 136.59 142.572 136.59 144.645V174.796C136.59 186.97 136.59 199.141 136.59 211.307V217.138C136.621 219.387 137.471 221.546 138.981 223.212C140.492 224.878 142.559 225.934 144.793 226.184C149.612 226.639 154.465 222.634 154.772 217.719C154.881 216.645 155.2 215.604 155.712 214.654C156.223 213.705 156.917 212.865 157.753 212.183C158.589 211.502 159.551 210.991 160.584 210.681C161.617 210.371 162.701 210.268 163.774 210.377C164.848 210.486 165.889 210.806 166.839 211.317C167.788 211.828 168.628 212.522 169.31 213.358C169.991 214.194 170.502 215.156 170.812 216.189C171.122 217.222 171.225 218.307 171.116 219.38C170.876 221.347 171.271 223.34 172.243 225.068C173.215 226.795 174.714 228.167 176.52 228.983C181.538 231.161 187.961 227.907 189.036 222.469C189.522 220.281 190.832 218.363 192.695 217.116C194.557 215.868 196.828 215.385 199.037 215.767C201.149 216.129 203.047 217.272 204.355 218.969C205.663 220.665 206.285 222.792 206.097 224.926C205.687 229.699 208.139 234.387 213.1 235.519C218.283 236.697 223.198 232.948 224.068 227.828C224.235 226.552 224.62 225.315 225.206 224.17C226.514 221.798 229.507 220.472 232.152 220.472C234.095 220.457 235.973 221.17 237.416 222.47C238.859 223.771 239.764 225.564 239.951 227.498L246.209 307.751C247.068 324.818 241.761 341.85 231.987 353.416C228.409 357.119 225.854 361.642 225.058 366.773C224.856 368.573 224.782 370.385 224.836 372.195H135.333C135.396 370.832 135.383 369.466 135.293 368.104C134.854 364.314 133.588 360.667 131.584 357.421C130.478 355.49 129.055 353.759 127.374 352.301C102.662 332.574 86.5441 304.049 82.3977 272.702H82.4034Z" fill="var(--clr)"/>

                            <path d="M42.6155 102.046C46.8522 87.798 54.5656 74.8268 65.0612 64.3003C75.5569 53.7738 88.5055 46.0225 102.741 41.7442C105.126 46.6159 108.829 50.7208 113.431 53.592C118.032 56.4631 123.347 57.9853 128.771 57.9853C134.195 57.9853 139.51 56.4631 144.111 53.592C148.713 50.7208 152.416 46.6159 154.8 41.7442C169.014 46.0054 181.948 53.7284 192.441 64.2205C202.934 74.7125 210.658 87.6453 214.921 101.859C208.736 104.888 203.83 110.018 201.081 116.332C198.332 122.647 197.919 129.733 199.915 136.324C201.911 142.915 206.186 148.581 211.976 152.309C217.767 156.037 224.694 157.584 231.521 156.673C238.347 155.762 244.626 152.452 249.236 147.336C253.846 142.22 256.486 135.631 256.684 128.747C256.882 121.864 254.624 115.134 250.316 109.762C246.007 104.389 239.927 100.725 233.165 99.4238C228.245 81.2399 218.647 64.6621 205.327 51.3413C192.007 38.0204 175.43 28.4213 157.247 23.4999C155.951 16.9009 152.404 10.9567 147.211 6.68392C142.018 2.41109 135.502 0.0749512 128.777 0.0749512C122.052 0.0749512 115.536 2.41109 110.342 6.68392C105.149 10.9567 101.602 16.9009 100.307 23.4999C82.1441 28.4251 65.5863 38.0168 52.2781 51.322C38.9699 64.6271 29.3746 81.1828 24.4452 99.3442C17.6615 100.54 11.5246 104.11 7.13229 109.417C2.73998 114.723 0.37888 121.419 0.471368 128.307C0.563855 135.194 3.1039 141.824 7.6371 147.011C12.1703 152.197 18.4009 155.601 25.2143 156.615C32.0276 157.628 38.9792 156.184 44.8255 152.541C50.6717 148.898 55.0312 143.294 57.124 136.732C59.2168 130.169 58.9063 123.076 56.2482 116.721C53.5901 110.366 48.7577 105.165 42.6155 102.046ZM238.478 127.891C238.478 130.029 237.844 132.119 236.657 133.896C235.469 135.674 233.781 137.059 231.806 137.877C229.831 138.695 227.657 138.909 225.561 138.492C223.464 138.075 221.538 137.046 220.026 135.534C218.515 134.022 217.485 132.096 217.068 130C216.651 127.903 216.865 125.73 217.683 123.755C218.501 121.78 219.887 120.091 221.664 118.904C223.442 117.716 225.532 117.082 227.669 117.082C230.536 117.082 233.285 118.221 235.312 120.248C237.34 122.275 238.478 125.024 238.478 127.891ZM128.774 18.1865C130.912 18.1865 133.001 18.8204 134.779 20.0081C136.556 21.1958 137.942 22.8839 138.76 24.859C139.578 26.834 139.792 29.0074 139.375 31.1041C138.958 33.2008 137.928 35.1268 136.417 36.6384C134.905 38.1501 132.979 39.1795 130.882 39.5966C128.786 40.0136 126.612 39.7996 124.637 38.9815C122.662 38.1634 120.974 36.778 119.787 35.0005C118.599 33.2229 117.965 31.1332 117.965 28.9954C117.965 26.1287 119.104 23.3794 121.131 21.3523C123.158 19.3253 125.907 18.1865 128.774 18.1865ZM29.4913 138.683C27.3535 138.683 25.2637 138.049 23.4862 136.861C21.7087 135.674 20.3233 133.985 19.5052 132.01C18.6871 130.035 18.473 127.862 18.8901 125.765C19.3071 123.669 20.3366 121.743 21.8482 120.231C23.3599 118.719 25.2859 117.69 27.3826 117.273C29.4793 116.856 31.6526 117.07 33.6277 117.888C35.6027 118.706 37.2909 120.091 38.4785 121.869C39.6662 123.646 40.3002 125.736 40.3002 127.874C40.3002 130.741 39.1614 133.49 37.1343 135.517C35.1073 137.544 32.358 138.683 29.4913 138.683Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Accessibility Features</h3>

                       <p class="text-center para">Design and features that ensure accessibility for users with disabilities.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

                    <div style="--clr:hsl(180, 70%, 20%);" class="fb-items px-1 px-md-3 py-0 py-md-1 h-100 d-flex flex-column align-items-center justify-content-center my-0 my-md-3">

                        <svg width="3em" height="3em" viewBox="0 0 437 423" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M153.625 291.621H137.406C100.995 291.621 71.3955 258.453 71.3955 217.663V173.873C71.3955 171.722 72.2499 169.659 73.7707 168.138C75.2915 166.618 77.3541 165.763 79.5049 165.763C81.6556 165.763 83.7183 166.618 85.2391 168.138C86.7599 169.659 87.6143 171.722 87.6143 173.873V217.663C87.6143 249.452 109.915 275.402 137.406 275.402H153.625C181.034 275.402 203.416 249.452 203.416 217.663V177.116C203.416 174.966 204.271 172.903 205.791 171.382C207.312 169.861 209.375 169.007 211.525 169.007C213.676 169.007 215.739 169.861 217.26 171.382C218.781 172.903 219.635 174.966 219.635 177.116V217.663C219.878 258.453 190.279 291.621 153.625 291.621Z" fill="var(--clr)"/>

                            <path d="M76.8293 187.74L72.5313 177.927C59.0697 147.598 57.6911 125.297 68.3955 111.593C72.9535 106.696 78.6091 102.951 84.897 100.667C91.1849 98.3835 97.9252 97.6254 104.563 98.4554C136.595 58.9627 164.248 58.4762 181.927 65.288C217.365 78.7496 237.719 131.379 235.692 160.249C234.313 178.738 224.825 183.604 219.473 184.577H217.689C184.958 183.439 152.874 175.135 123.701 160.249C121.104 158.951 118.183 158.444 115.3 158.79C112.417 159.136 109.699 160.32 107.483 162.195L76.8293 187.74ZM116.808 142.733C121.593 142.735 126.311 143.845 130.594 145.976C157.148 159.633 186.323 167.431 216.148 168.845C218.456 166.147 219.62 162.656 219.392 159.114C221.095 135.272 203.173 90.7515 176.088 80.3715C152.409 71.289 129.459 92.5355 114.457 111.917L111.456 115.809L106.591 114.917C106.591 114.917 88.4257 112.16 81.0461 121.567C75.5318 128.784 76.2616 142.651 83.1546 161.303L96.8594 149.95C102.459 145.283 109.519 142.729 116.808 142.733Z" fill="var(--clr)"/>

                            <path d="M79.3426 226.178H67.0975C63.3346 226.382 59.5698 225.817 56.0327 224.517C52.4956 223.217 49.2605 221.21 46.5248 218.619C43.7891 216.027 41.6102 212.905 40.1212 209.443C38.6322 205.982 37.8643 202.253 37.8643 198.485C37.8643 194.716 38.6322 190.987 40.1212 187.526C41.6102 184.064 43.7891 180.942 46.5248 178.351C49.2605 175.759 52.4956 173.752 56.0327 172.452C59.5698 171.153 63.3346 170.587 67.0975 170.791H79.3426C81.4934 170.791 83.556 171.645 85.0768 173.166C86.5976 174.687 87.452 176.75 87.452 178.9C87.452 181.051 86.5976 183.114 85.0768 184.635C83.556 186.155 81.4934 187.01 79.3426 187.01H67.0975C64.8121 186.983 62.5712 187.643 60.6641 188.902C58.757 190.162 57.2712 191.964 56.3983 194.077C55.5255 196.189 55.3057 198.514 55.7673 200.753C56.2289 202.991 57.3508 205.04 58.9881 206.634C60.0437 207.71 61.307 208.559 62.7011 209.13C64.0951 209.702 65.5909 209.984 67.0975 209.959H79.3426C81.4934 209.959 83.556 210.814 85.0768 212.335C86.5976 213.855 87.452 215.918 87.452 218.069C87.452 220.219 86.5976 222.282 85.0768 223.803C83.556 225.324 81.4934 226.178 79.3426 226.178Z" fill="var(--clr)"/>

                            <path d="M224.014 226.178H211.769C209.618 226.178 207.555 225.324 206.034 223.803C204.514 222.282 203.659 220.219 203.659 218.069C203.659 215.918 204.514 213.855 206.034 212.334C207.555 210.814 209.618 209.959 211.769 209.959H224.014C225.602 210.093 227.2 209.895 228.708 209.379C230.216 208.863 231.6 208.04 232.773 206.962C233.946 205.883 234.883 204.573 235.523 203.114C236.164 201.654 236.495 200.078 236.495 198.485C236.495 196.891 236.164 195.315 235.523 193.856C234.883 192.396 233.946 191.086 232.773 190.008C231.6 188.929 230.216 188.106 228.708 187.59C227.2 187.074 225.602 186.876 224.014 187.01H211.769C209.618 187.01 207.555 186.155 206.034 184.635C204.514 183.114 203.659 181.051 203.659 178.9C203.659 176.75 204.514 174.687 206.034 173.166C207.555 171.645 209.618 170.791 211.769 170.791H224.014C231.369 170.791 238.424 173.713 243.625 178.914C248.826 184.115 251.748 191.17 251.748 198.525C251.705 205.86 248.767 212.881 243.573 218.06C238.378 223.239 231.349 226.157 224.014 226.178Z" fill="var(--clr)"/>

                            <path d="M231.799 260.643H165.14C162.989 260.643 160.926 259.788 159.405 258.268C157.885 256.747 157.03 254.684 157.03 252.533C157.03 250.383 157.885 248.32 159.405 246.799C160.926 245.278 162.989 244.424 165.14 244.424H227.42V218.069C227.42 215.918 228.274 213.855 229.795 212.334C231.316 210.814 233.378 209.959 235.529 209.959C237.68 209.959 239.742 210.814 241.263 212.334C242.784 213.855 243.638 215.918 243.638 218.069V248.803C243.638 251.943 242.391 254.955 240.171 257.175C237.95 259.395 234.939 260.643 231.799 260.643Z" fill="var(--clr)"/>

                            <path d="M152.084 273.699H139.028C133.414 273.699 128.031 271.469 124.062 267.5C120.092 263.53 117.862 258.147 117.862 252.533C117.862 246.92 120.092 241.536 124.062 237.567C128.031 233.598 133.414 231.368 139.028 231.368H152.084C157.697 231.368 163.081 233.598 167.05 237.567C171.019 241.536 173.249 246.92 173.249 252.533C173.249 258.147 171.019 263.53 167.05 267.5C163.081 271.469 157.697 273.699 152.084 273.699ZM139.028 247.587C138.378 247.587 137.735 247.715 137.135 247.963C136.535 248.212 135.989 248.576 135.53 249.036C135.071 249.495 134.706 250.04 134.458 250.64C134.209 251.241 134.081 251.884 134.081 252.533C134.081 253.183 134.209 253.826 134.458 254.426C134.706 255.027 135.071 255.572 135.53 256.031C135.989 256.491 136.535 256.855 137.135 257.104C137.735 257.352 138.378 257.48 139.028 257.48H152.084C153.396 257.48 154.654 256.959 155.582 256.031C156.509 255.104 157.031 253.845 157.031 252.533C157.031 251.221 156.509 249.963 155.582 249.036C154.654 248.108 153.396 247.587 152.084 247.587H139.028Z" fill="var(--clr)"/>

                            <path d="M145.516 325.031C140.517 325.048 135.564 324.075 130.943 322.168C126.322 320.261 122.125 317.458 118.593 313.921L104.969 299.892V277.429C104.969 275.278 105.823 273.216 107.344 271.695C108.865 270.174 110.927 269.32 113.078 269.32C115.229 269.32 117.292 270.174 118.812 271.695C120.333 273.216 121.188 275.278 121.188 277.429V293.161L130.27 302.325C134.387 306.415 139.955 308.711 145.759 308.711C151.563 308.711 157.131 306.415 161.248 302.325L169.844 293.161V277.429C169.844 275.278 170.698 273.216 172.219 271.695C173.74 270.174 175.802 269.32 177.953 269.32C180.104 269.32 182.167 270.174 183.687 271.695C185.208 273.216 186.062 275.278 186.062 277.429V299.892L172.277 313.759C165.203 320.915 155.577 324.97 145.516 325.031Z" fill="var(--clr)"/>

                            <path d="M145.515 349.359C130.672 349.41 116.414 343.579 105.861 333.141L85.1006 312.381V296.567C85.1006 294.417 85.955 292.354 87.4758 290.833C88.9966 289.312 91.0592 288.458 93.21 288.458C95.3607 288.458 97.4234 289.312 98.9442 290.833C100.465 292.354 101.319 294.417 101.319 296.567V305.488L117.538 321.706C121.26 325.443 125.683 328.408 130.554 330.431C135.425 332.454 140.647 333.496 145.921 333.496C151.195 333.496 156.417 332.454 161.288 330.431C166.159 328.408 170.582 325.443 174.304 321.706L190.522 305.488V296.567C190.522 294.417 191.377 292.354 192.898 290.833C194.418 289.312 196.481 288.458 198.632 288.458C200.783 288.458 202.845 289.312 204.366 290.833C205.887 292.354 206.741 294.417 206.741 296.567V312.218L185.17 333.141C174.617 343.579 160.358 349.41 145.515 349.359Z" fill="var(--clr)"/>

                            <path d="M290.916 422.344H0.114258V348.873C0.135713 332.856 6.50772 317.502 17.8331 306.177C29.1584 294.851 44.5127 288.479 60.5291 288.458H113.078C115.229 288.458 117.291 289.312 118.812 290.833C120.333 292.354 121.187 294.417 121.187 296.567C121.187 298.718 120.333 300.781 118.812 302.302C117.291 303.822 115.229 304.677 113.078 304.677H60.5291C48.8142 304.698 37.5852 309.361 29.3014 317.645C21.0177 325.929 16.3544 337.158 16.333 348.873V406.125H274.698V348.873C274.698 337.151 270.041 325.91 261.753 317.621C253.465 309.333 242.223 304.677 230.502 304.677H177.953C175.802 304.677 173.739 303.822 172.219 302.302C170.698 300.781 169.843 298.718 169.843 296.567C169.843 294.417 170.698 292.354 172.219 290.833C173.739 289.312 175.802 288.458 177.953 288.458H230.258C246.275 288.479 261.629 294.851 272.954 306.177C284.28 317.502 290.652 332.856 290.673 348.873L290.916 422.344Z" fill="var(--clr)"/>

                            <path d="M60.5293 422.344C58.3786 422.344 56.3159 421.489 54.7951 419.969C53.2743 418.448 52.4199 416.385 52.4199 414.234V355.36C52.4199 353.21 53.2743 351.147 54.7951 349.626C56.3159 348.105 58.3786 347.251 60.5293 347.251C62.68 347.251 64.7427 348.105 66.2635 349.626C67.7843 351.147 68.6387 353.21 68.6387 355.36V414.234C68.6387 416.385 67.7843 418.448 66.2635 419.969C64.7427 421.489 62.68 422.344 60.5293 422.344Z" fill="var(--clr)"/>

                            <path d="M230.502 422.344C228.351 422.344 226.289 421.489 224.768 419.969C223.247 418.448 222.393 416.385 222.393 414.234V355.36C222.393 353.21 223.247 351.147 224.768 349.626C226.289 348.105 228.351 347.251 230.502 347.251C232.653 347.251 234.715 348.105 236.236 349.626C237.757 351.147 238.611 353.21 238.611 355.36V414.234C238.611 416.385 237.757 418.448 236.236 419.969C234.715 421.489 232.653 422.344 230.502 422.344Z" fill="var(--clr)"/>

                            <path d="M396.906 54.8269H319.299C317.148 54.8269 315.085 53.9725 313.565 52.4517C312.044 50.9309 311.189 48.8683 311.189 46.7175C311.189 44.5668 312.044 42.5041 313.565 40.9833C315.085 39.4625 317.148 38.6082 319.299 38.6082H396.906C399.056 38.6082 401.119 39.4625 402.64 40.9833C404.161 42.5041 405.015 44.5668 405.015 46.7175C405.015 48.8683 404.161 50.9309 402.64 52.4517C401.119 53.9725 399.056 54.8269 396.906 54.8269Z" fill="var(--clr)"/>

                            <path d="M329.111 113.215C326.961 113.215 324.898 112.36 323.377 110.839C321.856 109.319 321.002 107.256 321.002 105.105C321.002 102.954 321.856 100.892 323.377 99.371C324.898 97.8502 326.961 96.9958 329.111 96.9958C361.549 96.9958 367.55 77.29 372.415 47.2042V45.4202C372.583 44.3646 372.957 43.3525 373.518 42.4421C374.078 41.5317 374.812 40.7411 375.679 40.1156C376.545 39.49 377.527 39.042 378.568 38.7973C379.608 38.5525 380.687 38.5159 381.741 38.6894C382.826 38.8178 383.873 39.164 384.82 39.7071C385.768 40.2502 386.596 40.979 387.255 41.8499C387.913 42.7208 388.39 43.7158 388.655 44.7752C388.92 45.8346 388.968 46.9367 388.796 48.0152V49.7992C384.336 75.1005 378.173 113.215 329.111 113.215Z" fill="var(--clr)"/>

                            <path d="M387.498 113.214C365.279 113.214 336.328 84.9126 333.084 81.6689C332.324 80.915 331.721 80.0181 331.309 79.0299C330.898 78.0417 330.686 76.9817 330.686 75.9112C330.686 74.8407 330.898 73.7807 331.309 72.7925C331.721 71.8043 332.324 70.9074 333.084 70.1536C334.604 68.6432 336.659 67.7954 338.801 67.7954C340.944 67.7954 342.999 68.6432 344.519 70.1536C354.899 80.5336 375.821 96.9956 387.498 96.9956C389.649 96.9956 391.712 97.85 393.232 99.3708C394.753 100.892 395.608 102.954 395.608 105.105C395.608 107.256 394.753 109.318 393.232 110.839C391.712 112.36 389.649 113.214 387.498 113.214Z" fill="var(--clr)"/>

                            <path d="M358.305 54.827C356.154 54.827 354.091 53.9726 352.57 52.4518C351.05 50.931 350.195 48.8683 350.195 46.7176V36.9863C350.195 34.8356 351.05 32.7729 352.57 31.2521C354.091 29.7313 356.154 28.877 358.305 28.877C360.455 28.877 362.518 29.7313 364.039 31.2521C365.56 32.7729 366.414 34.8356 366.414 36.9863V46.7176C366.414 48.8683 365.56 50.931 364.039 52.4518C362.518 53.9726 360.455 54.827 358.305 54.827Z" fill="var(--clr)"/>

                            <path d="M280.211 148.085C277.249 148.051 274.346 147.253 271.783 145.768C269.221 144.282 267.085 142.16 265.584 139.606C264.083 137.053 263.267 134.155 263.215 131.193C263.164 128.231 263.879 125.307 265.29 122.702L279.968 95.8603V36.9052C279.968 27.2914 283.787 18.0713 290.585 11.2733C297.383 4.47532 306.603 0.65625 316.217 0.65625H400.635C410.249 0.65625 419.469 4.47532 426.267 11.2733C433.065 18.0713 436.884 27.2914 436.884 36.9052V107.213C436.884 116.827 433.065 126.047 426.267 132.845C419.469 139.643 410.249 143.462 400.635 143.462H316.217C311.217 143.449 306.275 142.4 301.701 140.381L287.023 146.625C284.879 147.58 282.559 148.077 280.211 148.085ZM279.562 130.406C279.491 130.474 279.435 130.556 279.396 130.647C279.357 130.737 279.337 130.835 279.337 130.933C279.337 131.032 279.357 131.129 279.396 131.22C279.435 131.311 279.491 131.392 279.562 131.46C279.631 131.532 279.712 131.588 279.803 131.627C279.894 131.666 279.991 131.686 280.09 131.686C280.188 131.686 280.285 131.666 280.376 131.627C280.467 131.588 280.549 131.532 280.617 131.46L298.782 123.351C299.951 122.855 301.221 122.64 302.489 122.725C303.757 122.809 304.987 123.19 306.08 123.838C309.115 125.671 312.59 126.652 316.136 126.676H400.635C405.941 126.655 411.023 124.537 414.775 120.786C418.527 117.034 420.644 111.952 420.666 106.646V36.9052C420.644 31.5994 418.527 26.5171 414.775 22.7653C411.023 19.0135 405.941 16.8964 400.635 16.875H316.217C310.911 16.8964 305.829 19.0135 302.077 22.7653C298.325 26.5171 296.208 31.5994 296.187 36.9052V97.9688C296.193 99.3273 295.859 100.666 295.214 101.861L279.562 130.406Z" fill="var(--clr)"/>

                            <path d="M394.391 331.357H319.38C310.583 331.357 302.147 327.862 295.927 321.642C289.707 315.422 286.212 306.986 286.212 298.189V238.666L274.697 217.501C272.845 214.374 272.037 210.738 272.389 207.121C272.742 203.504 274.237 200.092 276.659 197.382C279.08 194.672 282.302 192.803 285.856 192.046C289.411 191.289 293.115 191.684 296.43 193.173L306.486 197.471C310.59 195.873 314.978 195.128 319.38 195.281H394.391C403.174 195.303 411.589 198.807 417.792 205.024C423.994 211.242 427.478 219.666 427.478 228.449V298.27C427.456 307.039 423.963 315.442 417.763 321.642C411.563 327.842 403.16 331.335 394.391 331.357ZM288.969 209.716L301.539 232.666C302.184 233.861 302.519 235.199 302.512 236.558V298.189C302.533 302.678 304.326 306.976 307.5 310.15C310.674 313.324 314.972 315.117 319.461 315.138H394.472C398.953 315.116 403.244 313.321 406.405 310.145C409.566 306.969 411.34 302.67 411.34 298.189V228.368C411.319 223.887 409.523 219.596 406.347 216.435C403.171 213.275 398.872 211.5 394.391 211.5H319.38C316.509 211.579 313.71 212.418 311.27 213.933C310.177 214.58 308.947 214.961 307.679 215.046C306.411 215.13 305.141 214.916 303.972 214.419L290.429 208.581C290.295 208.461 290.122 208.395 289.943 208.395C289.763 208.395 289.59 208.461 289.456 208.581C289.351 208.721 289.294 208.892 289.294 209.067C289.294 209.243 289.351 209.413 289.456 209.554L288.969 209.716Z" fill="var(--clr)"/>

                            <path d="M332.922 299.73C331.952 299.698 330.993 299.506 330.084 299.162C329.081 298.792 328.161 298.228 327.377 297.501C326.593 296.774 325.961 295.899 325.516 294.927C325.071 293.955 324.823 292.904 324.786 291.836C324.749 290.767 324.923 289.702 325.3 288.701L347.763 229.016C348.338 227.477 349.367 226.149 350.713 225.208C352.06 224.266 353.661 223.756 355.304 223.745C356.961 223.74 358.58 224.242 359.943 225.184C361.306 226.127 362.347 227.464 362.927 229.016L385.309 288.701C386.072 290.712 386.006 292.944 385.124 294.906C384.242 296.868 382.617 298.399 380.606 299.162C378.595 299.926 376.363 299.859 374.401 298.977C372.439 298.095 370.908 296.47 370.144 294.459L355.304 254.966L340.545 294.459C339.965 296.011 338.924 297.348 337.561 298.291C336.198 299.233 334.579 299.735 332.922 299.73Z" fill="var(--clr)"/>

                            <path d="M372.09 284.484H338.518C336.367 284.484 334.304 283.63 332.783 282.109C331.263 280.588 330.408 278.526 330.408 276.375C330.408 274.224 331.263 272.162 332.783 270.641C334.304 269.12 336.367 268.266 338.518 268.266H372.09C374.241 268.266 376.304 269.12 377.825 270.641C379.345 272.162 380.2 274.224 380.2 276.375C380.2 278.526 379.345 280.588 377.825 282.109C376.304 283.63 374.241 284.484 372.09 284.484Z" fill="var(--clr)"/>

                            </svg>

                       <h3 class="text-center title">Multilingual Support</h3>

                       <p class="text-center para">Offering content in multiple languages to cater to a diverse audience.</p>

                       <svg class="line" width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg">

                           <rect x="0.5em" y="0.5em" width="calc(100% - 1em)" height="calc(100% - 1em)" rx="3.5rem"/>

                       </svg>

                   </div>

               </div>

            </div>

        </section>



        {{-- <section id="price-sec" class="container-fluid mb-5">

            <div id="plan-price" class="container">

                <div class="row mb-3 mb-md-5">

                    <div class="col-12 col-md-8 main-titles text-center d-flex flex-column mx-auto">

                        <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">Upgrade with more Features</h6>

                        <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Plans & Prices</h1>

                        <!-- <p data-aos="fade-up" data-aos-delay="200" class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas accusantium molestiae sed vel inventore, cumque facilis! Quam deserunt, est ab quasi totam consectetur facere quod magnam, officia consequatur debitis quibusdam?</p> -->

                    </div>

                </div>

                <div class="row">

                    <div class="col-12 mb-5">

                        <div class="plan-paginations d-flex flex-wrap justify-content-center align-items-center"></div>

                    </div>

                    <div class="col-12 mx-auto">

                        <div class="swiper price-sec">

                            <div class="swiper-wrapper">

                              <div style="--clr:hsl(341, 100%, 45%);" class="swiper-slide p-3">

                                <div class="row m-0 bg-white plan-box">

                                    <div class="col-12 p-md-5 p-3 plan-content d-flex flex-column col-md-7 text-black">

                                        <h1>WebStarter One</h1>

                                        <span>Affordable, perfect for small businesses.</span>

                                        <div class="price-field mt-3 d-flex flex-column flex-md-row align-items-md-center align-items-start justify-content-start">

                                            <div class="price">â¹3499<span>/year</span></div>

                                        </div>

                                        <a href="https://pages.razorpay.com/pl_NkDLQArviQPVPG/view" class="start-btn px-5 py-2 mt-3">

                                            Start Now

                                        </a>

                                        <div class="lists mt-4 d-flex flex-column align-items-start">

                                            <div class="list-items"><strong>Validity :</strong> 1 Year</div>

                                            <div class="list-items"><strong>Web Pages & More :</strong> Max 10 Pages*</div>

                                            <div class="list-items"><strong>Email & More :</strong> 2 Accounts</div>

                                            <div class="list-items"><strong>Products & Gallery :</strong> Max 12</div>

                                            <div class="list-items"><strong>Data Backup :</strong> Monthly Back-up</div>

                                            <div class="list-items"><strong>Support, Trouble Shooting & Editing :</strong> 1 Hours per Month</div>

                                        </div>

                                        <div onclick="openPrice()">Known More...</div>

                                    </div>

                                    <div class="col-12 d-none plan-img col-md-5 d-md-flex justify-content-center align-items-center p-0">

                                        <img class="w-100 h-100 img-fit" src="assets/images/website/plan-3.png" alt="plan img">

                                    </div>

                                </div>

                              </div>

                              <div style="--clr:hsl(118, 42%, 45%);" class="swiper-slide p-3">

                                <div class="row m-0 bg-white plan-box">

                                    <div class="col-12 p-md-5 p-3 plan-content d-flex flex-column col-md-7 text-black">

                                        <h1>Web Basics</h4>

                                        <span>Comprehensive package for enterprises.</span>

                                        <div class="price-field mt-3 d-flex flex-column flex-md-row align-items-md-center align-items-start justify-content-start">

                                            <div class="price">â¹7999<span>/year</span></div>

                                        </div>

                                        <a href="https://pages.razorpay.com/pl_NkDU5QFxta4sp8/view" class="start-btn px-5 py-2 mt-3">

                                            Start Now

                                        </a>

                                        <div class="lists mt-4 d-flex flex-column align-items-start">

                                            <div class="list-items"><strong>Validity :</strong> 1 Year</div>

                                            <div class="list-items"><strong>Web Pages & More :</strong> Max 25 Pages*</div>

                                            <div class="list-items"><strong>Email & More :</strong> 3 Accounts</div>

                                            <div class="list-items"><strong>Products & Gallery :</strong> Max 50</div>

                                            <div class="list-items"><strong>Data Backup :</strong> Monthly Back-up</div>

                                            <div class="list-items"><strong>Support, Trouble Shooting & Editing :</strong> 1 Hours per Month</div>

                                        </div>

                                        <div onclick="openPrice()">Known More...</div>

                                    </div>

                                    <div class="col-12 d-none plan-img col-md-5 d-md-flex justify-content-center align-items-center p-0">

                                        <img class="w-100 h-100 img-fit" src="assets/images/website/plan-2.png" alt="plan img">

                                    </div>

                                </div>

                              </div>

                              <div style="--clr:hsl(258, 42%, 45%);" class="swiper-slide p-3">

                                <div class="row m-0 bg-white plan-box">

                                    <div class="col-12 p-md-5 p-3 plan-content d-flex flex-column col-md-7 text-black">

                                        <h1>Web Standard</h1>

                                        <span>Tailored for large corporations, premium features.</span>

                                        <div class="price-field mt-3 d-flex flex-column flex-md-row align-items-md-center align-items-start justify-content-start">

                                            <div class="price">â¹19800<span>/year</span></div>

                                        </div>

                                        <a href="#form" onclick="togglePopUpForm()" class="start-btn px-5 py-2 mt-3">

                                            Get Started

                                        </a>

                                        <div class="lists mt-4 d-flex flex-column align-items-start">

                                            <div class="list-items"><strong>Validity :</strong> 1 Year</div>

                                            <div class="list-items"><strong>Web Pages & More :</strong> Max 40 Pages*</div>

                                            <div class="list-items"><strong>Email & More :</strong> 3 Accounts</div>

                                            <div class="list-items"><strong>Products & Gallery :</strong> Max 70</div>

                                            <div class="list-items"><strong>Data Backup :</strong> Monthly Back-up</div>

                                            <div class="list-items"><strong>Support, Trouble Shooting & Editing :</strong> 4 Hours per Month</div>

                                        </div>

                                        <div onclick="openPrice()">Known More...</div>

                                    </div>

                                    <div class="col-12 d-none plan-img col-md-5 d-md-flex justify-content-center align-items-center p-0">

                                        <img class="w-100 h-100 img-fit" src="assets/images/website/plan-1.png" alt="plan img">

                                    </div>

                                </div>

                              </div>

                            </div>

                          </div>

                    </div>



                </div>

            </div>

        </section> --}}



        <div class="d-flex close-table justify-content-center px-3 py-3">

            <svg onclick="openPrice()" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z"/></svg>

        </div>



        <section id="faq-section" class="container overflow-hidden mb-5 py-5">

            <div class="row py-md-5 mb-md-5">

                <div class="col-12 col-md-8 main-titles text-center d-flex flex-column mx-auto">

                    <h6 data-aos="fade-up" data-aos-delay="0" class="m-0 gradient-text">FAQ</h6>

                    <h1 data-aos="fade-up" data-aos-delay="100" class="fw-bold m-0 mb-3">Answers to Your Questions</h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="m-0">Learn More About Our Web Design Services and Process</p>

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-6 col-12 px-4">

                    <div style="--clr:hsl(276, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>1.How long does it take to create a website?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>The time to create a website varies depending on the complexity of the project. A basic website can be completed in a few days, while a more complex site may take several weeks. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(209, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>2.Do you offer website maintenance services?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Yes, we offer website maintenance services to ensure your site remains up-to-date and secure. Our maintenance plans include regular updates, backups, and security checks. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(46, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>3.Can you help with content creation for my website?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Yes, we can help with content creation, including copywriting, image selection, and graphic design. Our team will work closely with you to create engaging content that reflects your brand. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(187, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>4.Will my website be mobile-friendly?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Yes, all websites we create are designed to be mobile-friendly, ensuring a seamless experience for users on smartphones and tablets. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(152, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>5.Do you provide hosting services?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>While we don't provide hosting services, we can recommend hosting providers and help you set up your hosting account. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-12 px-4">

                    <div style="--clr:hsl(276, 100%, 50%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>6.Can I update my website myself?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Yes, we can build your website on a content management system (CMS) that allows you to easily update content, such as text and images, without any technical knowledge. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(106, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>7.How much does a website cost?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>The cost of a website depends on various factors, such as the complexity of the design, the number of pages, and the features you require. We offer competitive pricing and will provide a detailed quote based on your specific needs. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(9, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>8.What is your payment process?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>We typically require a deposit before starting work, with the remaining balance due upon completion. We accept payment via bank transfer, credit card, or PayPal. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(214, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>9.Can you help with search engine optimization (SEO)?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>Yes, we offer SEO services to help improve your website's visibility in search engine results. Our SEO strategies include keyword research, on-page optimization, and link building. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                    <div style="--clr:hsl(323, 100%, 30%);" class="faq-items px-3 py-2">

                        <div class="faq-ques">

                            <h4>10.How do I get started?</h4>

                            <div class="faq-tog"></div>

                        </div>

                        <div class="faq-ans">

                            <div class="answer-items">

                                <p>To get started, simply contact us with details about your project. We'll schedule a consultation to discuss your requirements and provide a custom proposal for your website. <a href="https://biz15.com/contact-us.html" style="color: var(--clr);">Contact Us</a></p>

                            </div>

                        </div>

                    </div>

                </div>





            </div>

        </section>



        <section id="maraque-templates" class="container-fluid py-5 my-5">

            <!-- marquee row -->

            <div class="row">

                <!-- marquee column -->

                <div class="col-12 d-flex justify-content-center align-items-center p-0">

                    <!-- marquee over all box -->

                    <div class="scroll-wrapper py-3 py-lg-4">

                        <!-- marquee all box -->

                        <div class="scroll-inner d-flex" style="--items: 7;">

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://alqatariasteel.com/"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/al-qataria.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="https://alqatariasteel.com/images/favicon/apple-touch-icon.png" alt="">

                                    <p class="m-0">Alqataria Steel</p>

                                </div>

                            </a>

                            <a target="_blank"

                                href="https://cmaster-sa.com/"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/c-mac.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="https://cmaster-sa.com/images/icons/apple-touch-icon.png" alt="">

                                    <p class="m-0">CMAC</p>

                                </div>

                            </a>

                            <a target="_blank"

                                href="https://www.cassetteac.com/"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/cassette.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="https://www.cassetteac.com/wp-content/uploads/2023/12/logo-sm-dark-e1644995550317.png" alt="">

                                    <p class="m-0">Cassette AC</p>

                                </div>

                            </a>

                            <a target="_blank"

                                href="https://www.narasimhainteriordecorators.com/"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/narasimha.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="https://narasimhainteriordecorators.com/wp-content/uploads/2024/03/cropped-NARASIMHA-INTERIOR-LOGO-DESIGN-192x192.png" alt="">

                                    <p class="m-0">Narasimha Interior Decorators</p>

                                </div>

                            </a>

                            <a target="_blank"

                            href="https://nationalsteelindustries.com/"

                            class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                            <!-- marquee image -->

                            <img  class="w-100" src="assets/images/website/national.jpg" alt="">

                            <div class="carouser-title">

                                <img style="width: 20px; height: 20px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADfElEQVR4AcWXA7AcQRRFO7ZtO1l8xbZt27Zt27Zt2zbKKaUUO7mZU5vZip0/XXXH033efa97do0x3prGBM75cwXMsPZTLA22+mpoKYP5reZ7Wf9QLy1dsEBaGeOK4gSArXc+EE9JpwA+dWSEMTliOARguxGwlJQ4BfAJREAkpwDQawug908BwocP+G4n0aIF/SVEwGNj3Nl/CFCsWEOVLt3oq5fDhMmh6dOXKCSk8t86scCYNOG/C1ChQis9fvREJUvWlzGezwDWr9+tMmXq/X0qcOFHAFev3kCWG3X/BwAa8UOA/fuPqHDh2gIiX75qfoCtO/4ZwJ2fAkSOHCAcAIK8B5fNpe1XNv8AwPPzgf1FzgLlSmoA6NO0kjInyfhNALso7967o5Ijimj78a0A4IZfwMWNmwfHgOCaDcQxe/8x6t9/9MfZ5M5jTLrMU12TvRresYwa5UmqRDGy+AGiRfUoOHUmTehbQwPWdgdCh4+dUrlyDdW4cUeNGTNNLlcZbdq0XenTFVHVqk1Uu3ZHDR8+GefUocMQDRkyHjDOOeZ57vuC4+tJMYRJmf1dnH5J1XR+Va2e0FCX1w7TrSvntWdRC0081FypxmdSuIzp3ter15rZoUqV6qt16+7aunW3IkXKoO7dh+IAkTGIEiQI4lidO/dX9uxF1a5dXwugOgMD/gkAixIULJMUmSujIjdOrArzq73fcnAXxwqfK+1nOW7WrAuRatGi5Vq5cgMArA3yeMoDBQwQqlGjmVq27AkA7wCBYyKI3r1HKGJEDwDjDPPRBrAVIUKQeDFDhpLiQc4ZnH2cOLmUOHEeodixKagAS177GsdEx54U8g7XcYj8c8+uERuAL1TA408ArId8FpYuVUPYWK1qK1Wo0Ex163YUKyQLFIVXs2ZLERnTlKiILnfuCjyL5bjBMeI9nKAvAvsUgBZ49MtpQtHwAoMAg+2DBo2hoBCWk09gsBpQztnbYAAxIIA8Q38UMDBfAgT0/hQAxY+fC/uxDmE315g+OGQ7hcXsucfefobneY9jniEoUkEKScOXAN4MdhpCVzYAdcAXyjkAGrMBFxwDoAUOYEo6CBAQydJSIBwCoOWIwbQEwiEAP8Qcfrk4BEDLFsH39yrgvkMAdssajy8mIKTFAYBP0+Kt+fHf8GlLD0jR3wmAP278rA5KYEEl+lMR1AeLr7o7gSTjUQAAAABJRU5ErkJggg==" alt="">

                                <p class="m-0">National Steel Industries</p>

                            </div>

                        </a>

                        <a target="_blank"

                            href="https://priorhealthcare.com/"

                            class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                            <!-- marquee image -->

                            <img  class="w-100" src="assets/images/website/prior.jpg" alt="">

                            <div class="carouser-title">

                                <img style="width: 20px; height: 20px;" src="https://priorhealthcare.com/images/grid/logo.png" alt="">

                                <p class="m-0">Prior Health Care</p>

                            </div>

                        </a>

                        <a target="_blank"

                            href="https://racksindiaa.com/"

                            class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                            <!-- marquee image -->

                            <img  class="w-100" src="assets/images/website/racks-indiaa.jpg" alt="">

                            <div class="carouser-title">

                                <img style="width: 20px; height: 20px;" src="https://racksindiaa.com/wp-content/uploads/2022/04/favicon.png" alt="">

                                <p class="m-0">Racks Indiaa</p>

                            </div>

                        </a>

                        <a target="_blank"

                        href="https://rathnacools.com/"

                        class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                        <!-- marquee image -->

                        <img  class="w-100" src="assets/images/website/rc.jpg" alt="">

                        <div class="carouser-title">

                            <img style="width: 20px; height: 20px;" src="https://rathnacools.com/wp-content/uploads/2022/02/logo-sm-dark-e1644995550317.png" alt="">

                            <p class="m-0">Rathna Cools</p>

                        </div>

                    </a>

                    <a target="_blank"

                        href="https://www.rathnaelectricals.com/"

                        class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                        <!-- marquee image -->

                        <img  class="w-100" src="assets/images/website/re.jpg" alt="">

                        <div class="carouser-title">

                            <img style="width: 20px; height: 20px;" src="assets/images/website/re_icon.jpg" alt="">

                            <p class="m-0">Rathna Electricals</p>

                        </div>

                    </a>

                    <a target="_blank"

                        href="https://sribalajiengineers.co.in/"

                        class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                        <!-- marquee image -->

                        <img  class="w-100" src="assets/images/website/sri-balaji.jpg" alt="">

                        <div class="carouser-title">

                            <img style="width: 20px; height: 20px;" src="https://sribalajiengineers.co.in/wp-content/uploads/2021/08/favicon-32x32-1.png" alt="">

                            <p class="m-0">Sri Balaji Engineers</p>

                        </div>

                    </a>

                    <a target="_blank"

                        href="https://srivaishnaviclinic.in/"

                        class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                        <!-- marquee image -->

                        <img  class="w-100" src="assets/images/website/sri-vashnavi.jpg" alt="">

                        <div class="carouser-title">

                            <img style="width: 20px; height: 20px;" src="https://srivaishnaviclinic.in/images/favicon-32x32.png" alt="">

                            <p class="m-0">Sri Vaishnavi Clinic</p>

                        </div>

                    </a>

                    <a target="_blank"

                        href="https://trvcashews.com/"

                        class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                        <!-- marquee image -->

                        <img  class="w-100" src="assets/images/website/trv.jpg" alt="">

                        <div class="carouser-title">

                            <img style="width: 20px; height: 20px;" src="https://trvcashews.com/images/favicon/apple-icon-57x57.png" alt="">

                            <p class="m-0">TRV Cashews</p>

                        </div>

                    </a>

                    <a target="_blank"

                    href="https://www.vivahaacateringservices.com/"

                    class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                    <!-- marquee image -->

                    <img  class="w-100" src="assets/images/website/vivahaa.jpg" alt="">

                    <div class="carouser-title">

                        <img style="width: 20px; height: 20px;" src="https://www.vivahaacateringservices.com/favicon/apple-icon-57x57.png" alt="">

                        <p class="m-0">Vivahaa Catering Services</p>

                    </div>

                </a>

                <a target="_blank"

                    href="https://yesdeeracks.com/"

                    class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                    <!-- marquee image -->

                    <img  class="w-100" src="assets/images/website/yesdee-racks.jpg" alt="">

                    <div class="carouser-title">

                        <img style="width: 20px; height: 20px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAD1UlEQVR4AbWXA7AkQQyG951t27Zt3xXOtm3btu1n27bNs1nmKfdnameftmd2H6bqG3Wmk046mW6NoUdmZmapjIyMNmBVenr6VeCG+wAQpL2/ies6XDuBUpqiOtBZBbAIREDBX1xJBNqZvyAOzxtAlcIoLgEmobMUIFSqYsxbMI89YqzySlo3/+bOCoHskee4r2Wo8hr4wMP4USt7g0MIGqmOHLgUXrnQEDailjDmELhcjMplbDij9BkwTo55URMTE0PLV6ygxYsX05IlS/7a2dktyZdqUJ5UXCO/c+cOlS5dmtq2bUvtO3QgX1/fr2irk9OABcXp+tlz5lC/fv0oKyuL4H75/T7c62IfkpqaSpGRkRRhBCkpKarfhIaFUePGjWn//v2UZ5AvQTk2oBnn6rNnz6h69epUrVo1vqrCcidPnlSVq1q1KpUtW5bc3NzYgLyTcoAGp0WAfHx8JME5cNeRI0dUOXbsGK1atYrq1q2rKNe+fXuOOyvTF54DGjn1kpKTqUWLFrRhwwaDYsux7NatG82dO5dE8yctLU0ycO3atXll5Gc7NsBJfjlt2jQaOXKk3KhISGgolStXjm7evCkaHVlbW1PJkiXJ0tJSrwEgjg3wk1+cOXOGGjRoQP7+/jy5dHAe5yQ2Lo4uX74shSw+Pl44+1evXk3169cXGggyeBJKBjA8UcqUKUPIzHyYmJjo6Ny5M02ZMoX69Okjp5VeOO+nT5+uZEBWrhBwKnLROHv2rCLPnz+nJk2b0vbt24Xh8vDwkIrP3bt3Re5nEtgDVwWNQhwdHSVPOTg4CN2/e/duqlSpEiUmJir9IV3YgBXGVrZdu3ZRo0aNuBAJ5Tg8Y8eOFYVIHsxRNqANFyJDvcDtQ4YMoanIGJEMaj1VqFCBJzU/K3lgGBtQCkTlbMTfij/WC7dxhZs4caJQhtOZQxQaGqrkyfdSKeZDu9LVWXb16lXOcSnN5vfpS/uHDpdKb/ny5Wnfvn38nhVI1/ooNKeGDKPxnbro3jHDhg1TG/1xoPsbVuGUyFnBpHyPjaUvg0fRj3bdKMnBSXqXjIoZEx0t3UfjmnbrDv1s1Yk+TpnF8rq2pKQkpdH/xLVB3jXBFH3L7jcXLtO79ZspMzFR70iyoqLp/fLV9PLxM2PWhxtES7KHWoHiXJZ5SLHXd8D11SAQBIpLeRK7Xm1lXA+EFLERsvIWhu4NauGDp+BvEe0JXEAjY3dHpcA88L4QLv+u3SOWUdeovFPaBTKAoYrfg6McTk1RHLx6RYdl0GEvsAuY4TkKpGmJATbgMNqGgHLAoL7/A9+6iBYJ6/7KAAAAAElFTkSuQmCC" alt="">

                        <p class="m-0">Yesdee Racks</p>

                    </div>

                </a>

                <a target="_blank"

                    href="https://www.zamzamcaterers.com/"

                    class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                    <!-- marquee image -->

                    <img  class="w-100" src="assets/images/website/zamzam.jpg" alt="">

                    <div class="carouser-title">

                        <img style="width: 20px; height: 20px;" src="https://www.zamzamcaterers.com/images/favicon/favicon-32x32.png" alt="">

                        <p class="m-0">Zam Zam Caterers</p>

                    </div>

                </a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <!-- marquee column -->

                <div class="col-12 d-flex justify-content-center align-items-center p-0">

                    <!-- marquee over all box -->

                    <div class="scroll-wrapper py-3 py-lg-4">

                        <!-- marquee all box -->

                        <div class="scroll-inner right d-flex" style="--items: 7">

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/multiplus-beautiy-and-spa-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/1.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Beauty & Spa</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/bizplus-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/2.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Education</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/free/car-dealer-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/3.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Car Dealer</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/free/cloths-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/4.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Cloths</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/multiplus-construction-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/5.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Construction</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/free/furniture-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/6.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Furniture</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/multiplus-interior-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/7.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Interior</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/multiplus-bakery-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/8.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Bakery</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/multiplus-petshop-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/9.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Pet Shop</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/free/polyclinic-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/10.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Polyclinic</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/realpeak-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/11.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Consultancy</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/realpeak-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/12.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Digital Consultancy</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/roofwin-roofers-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/13.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">roofer</p>

                                </div>

                            </a>

                            <!-- marquee item -->

                            <a target="_blank"

                                href="https://biz15.com/themez-store/html-templates/previews/premium/roofwin-windows-preview.html"

                                class="scroll-items d-flex justify-content-center align-items-center rounded shadow">

                                <!-- marquee image -->

                                <img  class="w-100" src="assets/images/website/template/14.jpg" alt="">

                                <div class="carouser-title">

                                    <img style="width: 20px; height: 20px;" src="assets/images/website/themez-store-logo.png" alt="">

                                    <p class="m-0">Windows</p>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section id="cta" class="container-fluid my-5 py-5">

            <div class="container p-0">

                <div class="row py-5 py-lg-0">

                    <div class="col-12 col-lg-5 order-2 order-lg-1">

                        <div class="d-flex flex-column justify-content-center w-100 h-100">

                            <h1 data-aos="fade-up" class="mb-2"><span style="color: #1a38d6;">Take the first step towards online </span> <br>

                                success today!</h1>

                            <p data-aos="fade-up" data-aos-delay="100">Revitalize your brand online with Your Web Solutions. Browse 30+ free templates or dive into our 100+ premium options. Elevate your digital presence and boost business growth now!</p>

                            <div class="d-flex justify-content-start align-items-center mt-3" style="gap: 20px;">



                                <a class="theme-btn" href="#popup-form" onclick="togglePopUpForm()" role="button">Get Start</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-7 order-1 order-lg-2 d-flex justify-content-center">

                       <div class="d-flex justify-content-center align-items-center w-100">

                        <img  class="w-100" data-image-src="assets/images/website/call-to-action.png" alt="">

                       </div>

                    </div>

                </div>

            </div>

        </section>



    </main>

    <section id="price-table">

        <div class="container">

            <div class="row px-3 py-5 mt-5">

                <div class="price-grid-table w-100">

                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3 plan-all"><i>Website, Server & Softwares</i></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-abc text-white">WebStarter One</div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-abc text-white">Web Basic</div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-abc text-white">Web Standard</div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3 f-all"><strong class="mb-2">Validity</strong><em>Domain, Website, Email, Hosting, Security & More</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 f-plan plan-values text-black"><strong>1 Year</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 f-plan plan-values text-black"><strong>1 Year</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 f-plan plan-values text-black"><strong>1 Year</strong></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Design</strong><em>We offer unique and creative Responsive designs with User-friendly</em><em>Seamless user experience on desktops, tablets, and smartphones.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>UX & UI Friendly</strong><em>Responsive New Design</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>UX & UI Friendly</strong><em>Responsive New Design</em></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Web Pages & More</strong><em>Easily create your own unique & highly customizable Web pages @ Biz15.co.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 10 Pages*</strong><em class="table-note"><span class="note">Note: We'll set up the first website page and you can create the rest yourself from your dashboard.</span></em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 25 Pages*</strong><em class="table-note"><span class="note">Note: We'll set up the max 10 web pages and you can create the rest yourself from your dashboard.</span></em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 40 Pages*</strong><em class="table-note"><span class="note">Note: We'll set up the max 20 web pages and you can create the rest yourself from your dashboard.</span></em></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Email & More</strong><em>Get personalized and secure email addresses</em><em> like mail@yourdomain.com without fraud, spam and virus.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>2 Accounts</strong><em>2 x 200MB Drive Space</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>3 Accounts</strong><em>3 x 5 GB Drive Space</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>3 Accounts</strong><em>5 x 5 GB Drive Space</em></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Products & Gallery</strong><em>Showcase your company and our product gallery images</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 12</strong><em>Product Images</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 50</strong><em>Product Images</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 70</strong><em>Product Images</em></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Contact form & Call to Action</strong><em>Contact form, Click to Call/Whatsapp Feature</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Contact Form</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Contact Form</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Contact Form & Call to Action</strong></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">SSL & Security</strong><em>Avoid 'Not Secure' Warning and protect sensitive information</em><em>Boost Search Engine Ranking and Improve Web Safety & Security.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Built-in Analytics</strong><em>Easy to understand your website detailed analysis for all your web page links.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">SEO (Search Engine Optimization)</strong><em>Optimised Web Pages, Keyword Focus, research and Improve Ranking</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Optimized Web Page</strong><em class="table-note"><span class="note">Title, Meta and Free Business listing</span></em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>SEO Basic</strong><em class="table-note"><span class="note">Implement Title, Meta, SEO Content and Free Business listing</span></em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>SEO Enterprise</strong><em class="table-note"><span class="note">Implement Title, Meta, Max 3 Keywords Focused, SEO Content for pages, Blogging, Local maps and Business listing</span></em></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Link Shortener & QR Codes</strong><em>URL shorteners, QR codes and link-in-bio, web pages</em><em> to engage your audience, connect them and track it all</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 10</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 25</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Max 35</strong></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Web Hosting & Server Info</strong><em>Full Secured Server, Excellent Speed & Performance.,</em><em>with 99% uptime Best Uptime Guaranty.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Data Backup</strong><em>All web data's will have full back up-to-date.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Monthly Back-up</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Monthly Back-up</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>Monthly Back-up</strong></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Maintenance & Support</strong><em>Website , Server and Tech Support</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="var(--clr)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5"/></svg></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong class="mb-2">Support, Trouble Shooting & Editing</strong><em>In case of any Error / Human error / attack in the software.,</em><em>Editing Site Contents if Any  support needed.</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>1 Hours</strong><em>Monthly</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>3 Hours</strong><em>Monthly</em></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black"><strong>4 Hours</strong><em>Monthly</em></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3"><strong>Cost (GST 18% will added Extra)</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black cost"><strong>â¹3499</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black cost"><strong>â¹7999</strong></div>

                    <div class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-values text-black cost"><strong>â¹19800</strong></div>



                    <div class="price-fiels d-flex flex-column align-items-start justify-content-center p-3 plan-all-end"></div>

                    <a href="https://pages.razorpay.com/pl_NkDLQArviQPVPG/view" class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-abc-end text-white">Buy Now</a>

                    <a href="https://pages.razorpay.com/pl_NkDU5QFxta4sp8/view" class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-abc-end text-white">Buy Now</a>

                    <a href="#getStarted" onclick="togglePopUpForm()" class="price-fiels d-flex flex-column align-items-center justify-content-center p-3 plan-abc-end text-white">Get Started</a>

                </div>

            </div>

        </div>

    </section>



    <!-- footer start -->

    {{-- <footer class="container-xl">

        <div class="row pt-5">

            <div class="col-12 col-md-3 col-lg-3 mb-4 mb-lg-0">

                <div class="d-flex justify-content-center align-items-center w-100 h-100">

                    <a class="d-flex justify-content-center justify-content-md-start justify-content-lg-start"

                        href="https://biz15.com/"><img  class="w-50" data-image-src="assets/images/website/biz15-logo-f.png" alt="logo"></a>

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

                    <h6 class="mb-4"><a href="https://biz15.com/digital-marketing/">Digital Marketing</a></h6>

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

                            src="assets/images/website/biz15-msg.png" alt="Biz15 Msg"></a>

                    <a href="https://biz15.com/msg/dashboard/authenticate/login">

                        <p class="mb-3">SMS & WhatsApp Marketing</p>

                    </a>

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">

                <div class="d-flex justify-content-start align-items-start flex-column w-100 h-100">

                    <h6 class="mb-4"><a href="https://biz15.co/webs">Web Solutions</a></h6>

                    <h6 class="mb-4"><a href="https://biz15.com/web-site-designs/">Web & App</a></h6>

                    <a href="#">

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

                                src="assets/images/website/themez-store-logo-f.png" alt="THEMEZ"></a></h6>

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

    <script src="assets/js/advance-bottom-menu/script.js"></script>



    <!-- MSG WHATSAPP CHAT BOX -->

    <div id="biz_msg_box"

    data-image-src-url="https://biz15.com/plugin/wa-sms-msg-noti-v1/biz15-msg-plugin/website-design-wa.jpg"

    data-landing-page-src="https://biz15.com/thankyou.html"

    data-plugin-folder-path="https://biz15.com/plugin/wa-sms-msg-noti-v1/biz15-msg-plugin/"

    >

    <div class="biz_msg_header">

    <div class="brandLogo">

    <img src="https://biz15.com/images/shape-alon.png" alt="LOGO">

    </div>

    <div class="profiles">

    <h5 class="header_name biz15-logo-font" >BIZ15</h5>

    <span class="sub-head">Support Team</span>

    </div>

    <div onclick="msgBox()" id="close_msg_box">

    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">

    <path fill="currentColor"

        d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z" />

    </svg>

    </div>

    </div>

    <div class="biz_msg_inputs">

    <h1>Welcome! Thanks for your interest!</h1>

    <p class="message">Please enter your name and phone number to start the conversation.</p>

    <textarea placeholder="Your Message (Optional)" name="messages" id="message-box" cols="30" rows="3"></textarea>

    </div>

    <div class="biz_msg_send">

    <label class="biz_msg_name" for="biz_msg_name">

    <p class="alert-name">Enter Your Name</p>

    <input type="name" placeholder="Your name" title="Please enter your name" required id="biz_msg_name">

    </label>

    <div class="biz_msg_phone" for="biz_msg_phone">

    <p class="alert-number">Enter Your 10 digit Number</p>

    <div name="country-codes" id="country-select">

        <label for="searchInput" onclick="toggleCon()" class="val" data-value="+91">

            <img src="https://flagcdn.com/w320/in.png" alt="">

            +91

        </label>

        <div class="dropdown">

            <div class="items"></div>

            <input type="text" id="searchInput" placeholder="Search country code..." />

        </div>

    </div>

    <input type="tel" pattern="\d{10}" placeholder="Your number"

    title="Please enter a 10-digit phone number" required id="biz_msg_phone">

    </div>

    </div>

    <button id="submit_msg" onclick="singleWhatsapp()" role="button">

    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">

    <path fill="currentColor"

    d="M16.6 14c-.2-.1-1.5-.7-1.7-.8c-.2-.1-.4-.1-.6.1c-.2.2-.6.8-.8 1c-.1.2-.3.2-.5.1c-.7-.3-1.4-.7-2-1.2c-.5-.5-1-1.1-1.4-1.7c-.1-.2 0-.4.1-.5c.1-.1.2-.3.4-.4c.1-.1.2-.3.2-.4c.1-.1.1-.3 0-.4c-.1-.1-.6-1.3-.8-1.8c-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3c-.6.6-.9 1.3-.9 2.1c.1.9.4 1.8 1 2.6c1.1 1.6 2.5 2.9 4.2 3.7c.5.2.9.4 1.4.5c.5.2 1 .2 1.6.1c.7-.1 1.3-.6 1.7-1.2c.2-.4.2-.8.1-1.2zm2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2c5.5 0 9.9-4.4 9.9-9.9c.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3c-1.5 0-2.9-.4-4.2-1.1l-.3-.2l-3.1.8l.8-3l-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" />

    </svg>

    </button>

    <h6 class="send-message">Once you provide your details, Click on the WhatsApp icon to start a conversation with our team.</h6>

    </div>

    <script src="assets/js/biz-msg-box/script.js"></script>

    <!-- MSG WHATSAPP CHAT BOX -->









    <div id="pop-up-form" class="d-flex align-items-center justify-content-center">

        <iframe src="https://biz15.com/myweb/forms/wtl/9e2a64ce2c650c736074b611d2f73886" frameborder="0"></iframe>

        <span onclick="togglePopUpForm()"></span>

    </div>


{{--
    <div id="lang-popup" class="px-3 shadow-lg py-3 gap-md-5 d-flex flex-column flex-md-row justify-content-center align-items-center bg-white text-black">

        <h6 class="m-0">Select Your Language</h6>

        <div class="d-flex gap-3 align-items-center">

        <a href="index.html">ENGLISH</a>

        <span>OR</span>

        <a href="index-ta.html">à®¤à®®à®¿à®´à¯</a>

        </div>

        <span onclick="document.querySelector('#lang-popup').remove()" class="close-lang d-flex justify-content-center align-items-center rounded-circle "><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4"/></svg></span>

    </div> --}}





    <!-- Swiper JS -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Js -->

    <script src="assets/js/main-js/script.js"></script>

    <script src="assets/js/main-js/website-design/script.js"></script>



    <script src="assets/js//bootstrap.min.js"></script>

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
