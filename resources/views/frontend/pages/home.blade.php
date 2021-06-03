@extends('frontend.layout.singlepage-master')
@section('content')
<!-- Slider Section Start -->
<div class="rs-slider style1">
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
        <div class="slider-content slide1">
            <div class="container">
                <div class="content-part">
                    <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Top-North Software</div>
                    <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Development</h1>
                    <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        Using modern technogoly & modern frameworks
                    </div>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                        <a class="readon learn-more slider-btn" href="about.html">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-content slide2">
            <div class="container">
                <div class="content-part text-center">
                    <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We Increase Your</div>
                    <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Business Success</h1>
                    <div class="sl-desc fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        Using modern technogoly and IT Services
                    </div>
                    <ul class="slider-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="3000ms">
                        <li><a class="readon learn-more slider-btn" href="about.html">Free Consultation</a></li>
                        <li>
                            <div class="slider-video">
                                <a class="popup-videos" href="#">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section End -->

<!-- Services Section Start -->
<div id="services" class="rs-services main-home style1 pt-100 md-pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/services/style1/1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Web Development</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/services/style1/2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">App Development</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/services/style1/3.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Digital Marketing</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/services/style1/4.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="web-development.html">Search Engine Optimization</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/services/style1/4.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="web-development.html">Brand Development</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/services/style1/4.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="web-development.html">Graphic Design</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Quisque placerat vitae lacus ut scelerisque fusce luctus odio ac nibh luctu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- About Section Start -->
<div id="about" class="rs-about bg4 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50">
                <div class="images">
                    <img src="{{asset('assets/frontend/images/about/about-2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style2">About Us</div>
                        <h2 class="title pb-38">
                            We Are Increasing Business Success With Technology
                        </h2>
                        <div class="desc pb-35">
                            Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.
                        </div>
                        <p class="margin-0 pb-15">
                            We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.
                        </p>
                    </div>
                    <div class="btn-part">
                        <a class="readon learn-more contact-us" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Call Us Section Start -->
<div class="rs-call-us bg1 pt-120 md-pt-80">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-6">
                <div class="image-part">
                    <img src="{{asset('assets/frontend/images/call-us/contact-here.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rs-contact-box text-center">
                    <div class="address-item mb-25">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <div class="sec-title3">
                        <span class="sub-text">CALL US 24/7</span>
                        <h2 class="title">(+123) 456-9989</h2>
                        <p class="desc">Have any idea or project for in your mind call us or schedule a appointment. Our representative will reply you shortly.</p>
                    </div>
                    <div class="btn-part mt-40 md-mb-60">
                        <a class="readon lets-talk" href="#">Let's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call Us Section Start -->

<!-- Counter Section Start -->
<div class="rs-counter main-counter-home">
    <div class="counter-top-area text-center bg2">
        <div class="row">
            <div class="col-lg-4 md-mb-40">
                <div class="counter-list">
                    <div class="counter-text">
                        <div class="count-number">
                            <span class="rs-count k">80</span>
                        </div>
                        <h3 class="title">Happy Clients</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-mb-40">
                <div class="counter-list">
                    <div class="counter-text">
                        <div class="count-number">
                            <span class="rs-count plus">50</span>
                        </div>
                        <h3 class="title">Companies</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="counter-list">
                    <div class="counter-text">
                        <div class="count-number">
                            <span class="rs-count plus">230</span>
                        </div>
                        <h3 class="title">Projects Done</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->

<!-- Process Section Start -->
<div class="rs-process pt-180 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 md-mb-40">
                <div class="process-wrap bg3">
                    <div class="sec-title mb-30">
                        <div class="sub-text new">Working Process</div>
                        <h2 class="title white-color">
                            Our Working Process - How We Work For Our Customers
                        </h2>
                    </div>
                    <div class="btn-part mt-40">
                        <a class="readon learn-more contact-us" href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pl-30 md-pl-15">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-40">
                        <div class="rs-addon-number">
                            <div class="number-text">
                                <div class="number-area">
                                    1.
                                </div>
                                <div class="number-title">
                                    <h3 class="title"> Discovery</h3>
                                </div>
                                <p class="number-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-40">
                        <div class="rs-addon-number">
                            <div class="number-text">
                                <div class="number-area">
                                    2.
                                </div>
                                <div class="number-title">
                                    <h3 class="title">Planning</h3>
                                </div>
                                <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sm-mb-40">
                        <div class="rs-addon-number">
                            <div class="number-text">
                                <div class="number-area">
                                    3.
                                </div>
                                <div class="number-title">
                                    <h3 class="title">Execute</h3>
                                </div>
                                <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="rs-addon-number">
                            <div class="number-text">
                                <div class="number-area">
                                    4.
                                </div>
                                <div class="number-title">
                                    <h3 class="title">Deliver</h3>
                                </div>
                                <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Section End -->

<!-- Project Section Start -->
<div id="portfolio" class="rs-project bg5 style1 pt-120 md-pt-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45 md-mb-30">
            <span class="sub-text white-color">Project</span>
            <h2 class="title white-color">
                We Are Offering All Kinds of IT Solutions Services
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{asset('assets/frontend/images/project/main-home/1.jpg')}}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-style1.html">Project Design</a></h3>
                    <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{asset('assets/frontend/images/project/main-home/2.jpg')}}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-style1.html">Product Engineering</a></h3>
                    <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{asset('assets/frontend/images/project/main-home/3.jpg')}}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-style1.html">Analytic Solutions</a></h3>
                    <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{asset('assets/frontend/images/project/main-home/4.jpg')}}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-style1.html">Growth Strategies</a></h3>
                    <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{asset('assets/frontend/images/project/main-home/5.jpg')}}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-style1.html">Platform Integration</a></h3>
                    <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{asset('assets/frontend/images/project/main-home/6.jpg')}}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-style1.html">Innovative Interfaces</a></h3>
                    <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Section End -->



<!-- Pricing section start -->
<div class="rs-pricing white-bg pt-255 pb-150 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text">Pricing</span>
            <h2 class="title">
                Our Pricing Plan
            </h2>
            <div class="heading-line">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 md-mb-50">
                <div class="pricing-table new-style">
                    <div class="pricing-badge">
                        Silver
                    </div>
                    <div class="pricing-icon">
                        <img src="{{asset('assets/frontend/images/pricing/main-home/icons/1.png')}}" alt="">
                    </div>
                    <div class="pricing-table-price">
                        <div class="pricing-table-bags">
                            <span class="pricing-currency">$</span>
                            <span class="table-price-text">29.99</span>
                            <span class="table-period">Monthly Package</span>
                        </div>
                    </div>
                    <div class="pricing-table-body">
                        <ul>
                            <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                            <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                            <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                            <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                        </ul>
                    </div>
                    <div class="btn-part">
                        <a class="readon buy-now" href="contact.html">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-mb-50">
                <div class="pricing-table primary-bg">
                    <div class="pricing-badge white-color-bg">
                        Gold
                    </div>
                    <div class="pricing-icon">
                        <img src="{{asset('assets/frontend/images/pricing/main-home/icons/2.png')}}" alt="">
                    </div>
                    <div class="pricing-table-price">
                        <div class="pricing-table-bags">
                            <span class="pricing-currency">$</span>
                            <span class="table-price-text">39.99</span>
                            <span class="table-period">Monthly Package</span>
                        </div>
                    </div>
                    <div class="pricing-table-body">
                        <ul>
                            <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                            <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                            <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                            <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                        </ul>
                    </div>
                    <div class="btn-part">
                        <a class="readon buy-now" href="contact.html">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-table new-style">
                    <div class="pricing-badge">
                        Platinum
                    </div>
                    <div class="pricing-icon">
                        <img src="{{asset('assets/frontend/images/pricing/main-home/icons/3.png')}}" alt="">
                    </div>
                    <div class="pricing-table-price">
                        <div class="pricing-table-bags">
                            <span class="pricing-currency">$</span>
                            <span class="table-price-text">79.99</span>
                            <span class="table-period">Monthly Package</span>
                        </div>
                    </div>
                    <div class="pricing-table-body">
                        <ul>
                            <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                            <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                            <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                            <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                        </ul>
                    </div>
                    <div class="btn-part">
                        <a class="readon buy-now" href="contact.html">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing section end -->

<!-- Team Section Start -->
<div id="team" class="rs-team onepage-team change-bg pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="sec-title2 text-center mb-30">
        <span class="sub-text">Team</span>
        <h2 class="title">
            Expert IT Consultants
        </h2>
    </div>
    <div class="container">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/1.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                        <span class="designation">President & CEO</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/2.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Corey Anderson</a></h4>
                        <span class="designation">CEO & Founder</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/3.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Masud Rana</a></h4>
                        <span class="designation">Web Developer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/4.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Najmul Huda</a></h4>
                        <span class="designation">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/5.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Rushali Rumi</a></h4>
                        <span class="designation">Design Lead</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Abu Sayed</a></h4>
                        <span class="designation">App Developer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/7.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Sonia Akhter</a></h4>
                        <span class="designation">Graphic Artist</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/8.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Rayhan Ali</a></h4>
                        <span class="designation">CEO & Founder</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/9.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Benjir Akther</a></h4>
                        <span class="designation">Graphic Designer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/1.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                        <span class="designation">President & CEO</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/2.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Corey Anderson</a></h4>
                        <span class="designation">CEO & Founder</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/3.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Masud Rana</a></h4>
                        <span class="designation">Web Developer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/4.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Najmul Huda</a></h4>
                        <span class="designation">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->

<!-- Partner Start -->
<div id="client" class="rs-partner pt-80 pb-70">
    <div class="container">
        <div class="sec-title2 text-center mb-60">
            <!-- <span class="sub-text">Team</span> -->
            <h2 class="title">
                Our Happy Clients & Partners
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="2000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/1.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/1.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/2.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/2.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/3.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/3.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/4.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/4.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/5.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/5.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/6.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/6.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/7.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/7.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/8.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/8.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img class="hover-logo" src="{{asset('assets/frontend/images/partner/9.png')}}" alt="">
                        <img class="main-logo" src="{{asset('assets/frontend/images/partner/9.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->

<!-- Testimonial Section Start -->
<div class="testimonial main-home style2 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text white-color">Testimonial</span>
            <h2 class="title testi-title white-color">
                What Saying Our Customers
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false">
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Mariya Khan</a>
                    <span class="designation">CEO, Brick Consulting</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Sonia Akhter</a>
                    <span class="designation">Graphic Designer</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Deluar Hossen</a>
                    <span class="designation">Web Developer</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Asif Ahmed</a>
                    <span class="designation">App Developer</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Mariya Khan</a>
                    <span class="designation">CEO, Brick Consulting</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Sonia Akhter</a>
                    <span class="designation">Graphic Designer</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Deluar Hossen</a>
                    <span class="designation">Web Developer</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/testimonial/main-home/4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">Asif Ahmed</a>
                    <span class="designation">App Developer</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Contact Section Start -->
<div id="contact" class="rs-contact pt-120 gray-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-box">
                    <div class="sec-title mb-45">
                        <span class="sub-text new-text white-color">Let's Talk</span>
                        <h2 class="title white-color">Speak With Expert Engineers.</h2>
                    </div>
                    <div class="address-box mb-25">
                        <div class="address-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Email:</span>
                            <a href="tel:123222-8888">(123) 222-8888</a>
                        </div>
                    </div>
                    <div class="address-box mb-25">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Phone:</span>
                            <a href="#">support@rstheme.com</a>
                        </div>
                    </div>
                    <div class="address-box">
                        <div class="address-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Address:</span>
                            <div class="desc">New Jesrsy, 1201, USA</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pl-70 md-pl-15 md-mt-40">
                <div class="contact-widget onepage-style">
                    <div class="sec-title2 mb-40">
                        <span class="sub-text contact mb-15">Get In Touch</span>
                        <h2 class="title testi-title">Fill The Form Below</h2>

                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                </div>

                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon learn-more submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map-canvas pt-120 md-pt-70">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8991971704645!2d90.39955231429693!3d23.750973794672845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8907505ae47%3A0x5301058b90982426!2sGQ%20GROUP!5e0!3m2!1sen!2sbd!4v1622097493726!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!-- Contact Section Start -->
@endsection