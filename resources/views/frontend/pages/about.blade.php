@extends('frontend.layout.multipage-master')

@section('content')
<!-- About Section Start -->
<div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-30">
                <div class="rs-animation-shape">
                    <div class="images">
                        <img src="{{asset('assets/frontend/images/about/about-3.png')}}" alt="">
                    </div>
                    <div class="middle-image2">
                        <img class="dance3" src="{{asset('assets/frontend/images/about/effect-1.png')}}" alt="">
                    </div>
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
                        <a class="readon learn-more" href="contact.html">Learn-More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <img class="top dance" src="{{asset('assets/frontend/images/about/dotted-3.png')}}" alt="">
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Team Section Start -->
<div class="rs-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54">
    <div class="sec-title2 text-center mb-30">
        <span class="sub-text style-bg white-color">Team</span>
        <h2 class="title white-color">
            Expert IT Consultants
        </h2>
    </div>
    <div class="container">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="2500" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="#"><img src="{{asset('assets/frontend/images/team/style1/1.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="#">Makhaia Antitni</a></h4>
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
                        <h4 class="person-name"><a href="#">Corey Anderson</a></h4>
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
                        <h4 class="person-name"><a href="#">Masud Rana</a></h4>
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
                        <h4 class="person-name"><a href="#">Najmul Huda</a></h4>
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
                        <h4 class="person-name"><a href="#">Rushali Rumi</a></h4>
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
                        <h4 class="person-name"><a href="#">Abu Sayed</a></h4>
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
                        <h4 class="person-name"><a href="#">Sonia Akhter</a></h4>
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
                        <h4 class="person-name"><a href="#">Rayhan Ali</a></h4>
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
                        <h4 class="person-name"><a href="#">Benjir Akther</a></h4>
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
                        <h4 class="person-name"><a href="#">Makhaia Antitni</a></h4>
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
                        <h4 class="person-name"><a href="#">Masud Rana</a></h4>
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
                        <h4 class="person-name"><a href="#">Najmul Huda</a></h4>
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

<!-- Process Section Start -->
<div class="rs-process style2 pt-120 pb-120 md-pt-80 md-pb-73">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text style-bg">Process</span>
            <h2 class="title title2">
                Our Working Process
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 md-mb-50">
                <div class="addon-process">
                    <div class="process-wrap">
                        <div class="process-img">
                            <img src="{{asset('assets/frontend/images/process/1.png')}}" alt="">
                        </div>
                        <div class="process-text">
                            <h3 class="title">Discovery</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 md-mb-50">
                <div class="addon-process">
                    <div class="process-wrap">
                        <div class="process-img">
                            <img src="{{asset('assets/frontend/images/process/2.png')}}" alt="">
                        </div>
                        <div class="process-text">
                            <h3 class="title"> Planning</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="addon-process">
                    <div class="process-wrap">
                        <div class="process-img">
                            <img src="{{asset('assets/frontend/images/process/3.png')}}" alt="">
                        </div>
                        <div class="process-text">
                            <h3 class="title">Execute</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="addon-process">
                    <div class="process-wrap">
                        <div class="process-img">
                            <img src="{{asset('assets/frontend/images/process/4.png')}}" alt="">
                        </div>
                        <div class="process-text">
                            <h3 class="title">Deliver</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Section End -->
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
</div>
<!-- Contact Section Start -->
@endsection