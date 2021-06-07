<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer style2">
    <div class="footer-top mt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="#rs-header"><img src="{{('assets/frontend/images/Digi-Merlin.gif')}}" alt=""></a>
                    </div>
                    <div class="textwidget white-color pb-30">
                        <p>We the Digimerlin feeling pleased to present ourselves as one of the expert IT Solution Company in the online commercial center. We generally attempt to furnish our customers with the best IT administrations they have ever experienced. We generally consider our consumer loyalty.</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span><i class="fa fa-google"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">Services</h3>
                    <ul class="site-map white-color">
                        <li>Web Development</li>
                        <li>App Development</li>
                        <li>Digital Marketing</li>
                        <li>SEO</li>
                        <li>Brand Development</li>
                        <li>Graphic Design</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">331/2 Tajuddin Ahmed Sarani, Moghbazar, Dhaka</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)1708-159827">(+880)1708-159827</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:digimerlin2021@gmail.com">digimerlin2021@gmail.com</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                Opening Hours: 09:30 am - 05:30 pm
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="widget-title">Newsletter</h3>
                    <p class="widget-desc white-color">We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
                    <form method="POST" action="{{route('subscribe')}}">
                        @csrf
                        <p>
                            <input type="email" name="email" placeholder="Your email address" required="">
                            <em class="paper-plane"><input type="submit" value="Sign up"></em>
                            <i class="flaticon-send"></i>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <!-- <div class="col-lg-6 text-right md-mb-10 order-last">
                    <ul class="copy-right-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                    </ul>
                </div> -->
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>&copy; 2021 All Rights Reserved. Developed By <a href="">Saklain</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

