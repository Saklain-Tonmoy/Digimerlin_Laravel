@extends('frontend.layout.master')

@section('content')
<!-- Slider Section Start -->
<div class="rs-slider style1">
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
        <div class="slider-content slide1">
            <div class="container">
                <div class="content-part">
                    <div class="sl-sub-title wow" data-wow-delay="300ms" data-wow-duration="2000ms">Top-Notch Software</div>
                    <h1 class="sl-title mb-mb-10 wow" data-wow-delay="600ms" data-wow-duration="2000ms">Development</h1>
                    <div class="sl-desc wow" data-wow-delay="900ms" data-wow-duration="2000ms">
                        Using modern technogoly & frameworks
                    </div>
                    <div class="sl-btn wow" data-wow-delay="200ms" data-wow-duration="3000ms">
                        <a class="readon learn-more slider-btn" href="tel:+(880)1708–159827">Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-content slide2">
            <div class="container">
                <div class="content-part">
                    <div class="sl-sub-title wow" data-wow-delay="300ms" data-wow-duration="2000ms">We Increase Your</div>
                    <h1 class="sl-title mb-mb-10 wow" data-wow-delay="600ms" data-wow-duration="2000ms">Business Success</h1>
                    <div class="sl-desc fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        Using modern technogoly and IT Services
                    </div>
                    <ul class="slider-btn wow " data-wow-delay="200ms" data-wow-duration="3000ms">
                        <li><a class="readon learn-more slider-btn" href="tel:+(880)1708–159827">Free Consultation</a></li>
                        <li>
                            <div class="slider-video">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
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
                            <img src="{{asset('assets/frontend/images/digimerlin-web-development.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title">Web Development</h3>
                        </div>
                        <div class="services-desc">
                            <p>
                            With millions of websites on the web you would like to ensure that your website certainly stands out, represents you well, and most significantly, helps your business grow. Digimelrin follows the modern web development trend to provide best user experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/digimerlin-app-development.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title">App Development</h3>
                        </div>
                        <div class="services-desc">
                            <p>
                            Digimerlin offers a complete solution for custom apps development services to meet your business demands. We offer complex app and software development challenges to meet your business demands. Backend, front-end, database and server solutions for web applications, mobile apps and desktop.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/digimerlin-digital-marketing.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title">Digital Marketing</h3>
                        </div>
                        <div class="services-desc">
                            <p>
                            Digital marketing is a critical element in staying connected with your audience through social media. It brings a lot of opportunities and growth to businesses. Working side-by-side with you or independently, we help keep you engaged in all trending social media platforms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/digimerlin-seo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title">Search Engine Optimization</h3>
                        </div>
                        <div class="services-desc">
                            <p>
                            Achieving a top spot in search engine rankings signals to searchers that your business is a credible source. Through meticulous keyword research and white hat criteria, we will create a path for your business to achieve high rankings within the major search engines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/digimerlin-brand-development.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title">Brand Development</h3>
                        </div>
                        <div class="services-desc">
                            <p>
                            Your brand reputation is everything. It creates a positive impression on consumers and allows your clients to know what to expect from your company. Our team of experts can help protect and enhance your branding online for tangible, long-term results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="{{asset('assets/frontend/images/digimerlin-graphic-design.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title">Graphic Design</h3>
                        </div>
                        <div class="services-desc">
                            <p>
                            The most powerful way to get your message across is through Graphical presentation. Engage your audience for business by telling your story and sharing your mission. Digimerlin provides the best professional Graphic Design services (logo design, brochures, posters, ads, etc.)
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
            <div class="col-lg-6">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style2">About Us</div>
                        <h2 class="title pb-38">
                            We Are Increasing Business Success With Technology
                        </h2>
                        <div class="desc pb-35">
                        We are a team of professionals that apply our passion for technology to create successful digital solutions for our client. Our passion for technology drives us to be creative, innovative and keeps us motivated to learn something new everyday. We believe in empowering our clients with smart and easy life that technology can provide.
                        </div>
                        <div class="desc pb-35">
                        Our vision is to establish ourselves as a reputed technology solution and consulting company, which stands out on the basis of a strong team. A team of passionate and skilled software developers with a large and successful portfolio full of projects and clients across the globe. We believe a company led by self-motivated, enthusiastic and proactive people doing what they enjoy!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style2">Success Rate</div>
                    </div>
                    <!-- Skillbar Section Start -->
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="rs-skillbar style1">
                                <div class="cl-skill-bar">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Web Development</span>
                                    <div class="skillbar" data-percent="98">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">App Development</span>
                                    <div class="skillbar" data-percent="95">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Digital Marketing</span>
                                    <div class="skillbar" data-percent="98">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">SEO</span>
                                    <div class="skillbar" data-percent="99">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Brand Development</span>
                                    <div class="skillbar" data-percent="95">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Graphic Design</span>
                                    <div class="skillbar" data-percent="98">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Skillbar Section End -->
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
                    <img src="{{asset('assets/frontend/images/digimerlin-idea.png')}}" alt="">
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
                        <h2 class="title">(+880) 1708-159827</h2>
                        <p class="desc">Have an idea or project in your mind? Call us or schedule an appointment. Our representative will reply to you shortly.</p>
                    </div>
                    <div class="btn-part mt-40 md-mb-60">
                        <a class="readon lets-talk" href="tel:+(880)1708–159827">Let's Talk</a>
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

<!-- Why Choose Us Section Start -->
<div id="why-choose-us" class="rs-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="sec-title mb-30">
                    <div class="sub-text style2">Why Choose Digimerlin?</div>
                    <h2 class=" title title3 pb-20">
                        We Provide Result-Oriented Dynamic Solutions
                    </h2>
                    <div class="desc desc2">
                    As a team of technology geeks, we strive to create something innovative. We are keen to ensure that each and every project from Digimerlin stands out in the market and delivers exceptional solutions. We aim to provide inspiring solutions and produce original and visionary results.
                    </div>
                </div>
            </div>
            <div class="col-lg-7 md-pt-40">
                <div class="rs-animation-image">
                    <div class="pattern-img">
                        <img src="{{asset('assets/frontend/images/digimerlin-why-choose-us.png')}}" alt="">
                    </div>
                    <div class="middle-img">
                        <img class="dance3" src="{{asset('assets/frontend/images/digimerlin-why-choose-us-1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->


<!-- Process Section Start -->
<div class="white-color">
    <div class="rs-process modify1 pt-160 pb-120 md-pt-80 md-pb-80">
        <div class="shape-animation">
            <div class="shape-process">
                <img class="pulse" src="{{asset('assets/frontend/images/process/circle.png')}}" alt="images">
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 pr-40 md-pr-15 md-pb-80">
                    <div class="process-wrap md-center">
                        <div class="sec-title mb-30">
                            <h2 class="title white-color">
                                Our Working Process - How We Work For Our Customers
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 sm-pl-40 sm-pr-20">
                    <div class="row">
                        <div class="col-md-6 mb-70">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        1
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title"> Discovery</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-70">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        2
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Planning</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 sm-mb-70">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        3
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Execute</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        4
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Deliver</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Section End -->

<!-- Testimonial Section Start -->
<div id="client-testimonial" class="rs-testimonial main-home gray-color pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <h2 class="title testi-title">
                What's Our Customers Saying
            </h2>
            <div class="heading-line"></div>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false">
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/quote2.png')}}" alt="">I am very happy with my new business website! It looks professional and very easy to navigate. Our experience with the customer service at Digimerlin has been great. They handle things very efficiently and are available for any questions we have. They also keep us updated on monthly reports so we know how our site is doing. I would recommend Digimerlin to anyone looking for website design or SEO work!</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-king-security.png')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <span class="name">Nasir Hussain Malik</span>
                    <span class="designation">CEO & Founder of KSL</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/quote2.png')}}" alt="">This was the first time I developed a website so I couldn’t have asked for a better or easier group to work with. The entire process from sales through development and launch was timely and extremely efficient. A fantastic experience all around!</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-shop-capetown.png')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <span class="name">Esha Roshdi</span>
                    <span class="designation">Owner, Shop Capetown</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/quote2.png')}}" alt="">Digimerlin is very responsive and they perfectly lead me. We are amazed from where traffic to our site comes; we are a moderate-sized nonprofit and now we are having global visitors.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-lamaison.png')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <span class="name">Aadrish Malik</span>
                    <span class="designation">Owner, La-Maison Furniture</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/quote2.png')}}" alt="">My new site created by Digimerlin just launched. They’ve done a great job of creating exactly what I wanted. Easy to work with and very responsive. They met all of my expectations and had a lot of insight regarding marketing tools I didn’t know existed.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-hiend.png')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <span class="name">Nasir Hussain Malik</span>
                    <span class="designation">CEO & Founder, Hi-End Security</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/quote2.png')}}" alt="">We hired Digimerlin to redesign our website after a bad experience working with our previous web designer. The Digimerlin team exceeded our every expectation; their work was completed on time and within budget. In the end, they delivered a beautifully designed website that has the look and function our company was hoping to achieve.</div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-gq.png')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <span class="name">Qazi Salman Sarwar</span>
                    <span class="designation">Director, GQ Group of Companies</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc"><img class="quote" src="{{asset('assets/frontend/images/testimonial/quote2.png')}}" alt="">
                    With Digimerlin’s help, we were able to increase the functionality of our website dramatically while cutting our costs. Our website is much easier to use, has tons of more features than before, and is incredibly easy to maintain. We could not be happier with our new website! Thanks to Digimerlin!
                    </div>
                    <div class="author-img">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-tis.png')}}" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <span class="name">Kunwal Malik</span>
                    <span class="designation">CEO & Founder, This-Is-She</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Client Start -->
<div id="client" class="rs-partner pt-80 pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-60">
            <h2 class="title white-color">
                Our Happy Clients
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="2000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-tis.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-krispy.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-gq.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-econo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-king-security.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-lamaison.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-rishta.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-shop-capetown.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-hiend.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="partner-item">
                <div class="logo-img">
                    <a href="#">
                        <img src="{{asset('assets/frontend/images/partner/digimerlin-sweets-treats.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client End -->

<!-- Contact Section Start -->
<div id="contact" class="rs-contact pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-box">
                    <div class="sec-title mb-45">
                        <span class="sub-text new-text white-color">Let's Talk</span>
                        <h2 class="title white-color">Speak With Our Experts.</h2>
                    </div>
                    <div class="address-box mb-25">
                        <div class="address-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Email:</span>
                            <a href="mailto:digimerlin2021@gmail.com">digimerlin2021@gmail.com</a>
                        </div>
                    </div>
                    <div class="address-box mb-25">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Phone:</span>
                            <a href="tel:+(880)1708-159827">+(880) 1708-159827</a>
                        </div>
                    </div>
                    <div class="address-box">
                        <div class="address-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Address:</span>
                            <div class="desc">331/2 Tajuddin Ahmed Sarani, Moghbazar, Dhaka-1217</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pl-70 md-pl-15 md-mt-40">
                <div class="contact-widget onepage-style">
                    <div class="sec-title mb-40">
                        <span class="sub-text style2 contact mb-15">Get In Touch</span>
                        <h2 class="title testi-title">Fill The Form Below</h2>

                    </div>
                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6 mb-30 col-md-6 col-sm-6">
                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group col-lg-6 mb-30 col-md-6 col-sm-6">
                                <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
                            </div>
                            <div class="form-group col-lg-6 mb-30 col-md-6 col-sm-6">
                                <input class="from-control" type="tel" id="phone" name="phone" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group col-lg-6 mb-30 col-md-6 col-sm-6">
                                <select class="from-control" type="text" id="subject" name="subject" placeholder="Your Website" required="">
                                    <option value="" disabled selected>Choose a Service</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="App Development">App Development</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                    <option value="Brand Development">Brand Development</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-12 mb-30">
                                <textarea class="from-control" id="content" name="content" placeholder="Your message Here" required=""></textarea>
                            </div>
                        </div>
                        <div class="btn-part">
                            <div class="form-group mb-0">
                                <button class="readon learn-more submit" type="submit" id="submitbtn" name="submitbtn">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section Start -->
@endsection