<div class="container">
    <!-- Begin Footer Shipping Area -->
    <div class="footer-shipping pt-60 pb-55 pb-xs-25">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                        <img src="{{ asset('assets/front/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                    </div>
                    <div class="shipping-text">
                        <h2>Free Delivery</h2>
                        <p>And free returns. See checkout for delivery dates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                        <img src="{{ asset('assets/front/images/shipping-icon/2.png') }}" alt="Shipping Icon">
                    </div>
                    <div class="shipping-text">
                        <h2>Safe Payment</h2>
                        <p>Pay with the worlds most popular and secure payment methods.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                        <img src="{{ asset('assets/front/images/shipping-icon/3.png') }}" alt="Shipping Icon">
                    </div>
                    <div class="shipping-text">
                        <h2>Shop with Confidence</h2>
                        <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                        <img src="{{ asset('assets/front/images/shipping-icon/4.png') }}" alt="Shipping Icon">
                    </div>
                    <div class="shipping-text">
                        <h2>24/7 Help Center</h2>
                        <p>Have a question? Call a Specialist or chat online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="footer-static-middle">
        <div class="container">
            <div class="footer-logo-wrap pt-50 pb-35">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Who Are We</h3>
                            <p class="info">
                                We are a team of academic students that create high quality Online Store to help companies to pormote their products.
                            </p>
                        </div>
                        <ul class="des">
                            <li>
                                <span>Address: </span>
                                Kuwait
                            </li>
                            <li>
                                <span>Phone: </span>
                                <a href="#">(+965) ### ### ###</a>
                            </li>
                            <li>
                                <span>Email: </span>
                                <a href="mailto://info@electronicstore.com">info@electronicstore.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Our Companies</h3>
                            <ul>
                                @php $companies = DB::table('users')->where('role','seller')->select('id','name')->get();  @endphp
                                @foreach($companies as $company)
                                    <li><a href="#">{{ $company->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Follow Us</h3>
                            <ul class="social-link">
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="rss">
                                    <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Begin Footer Newsletter Area -->
                        <div class="footer-newsletter">
                            <h4>Sign up to newsletter</h4>
                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                               <div id="mc_embed_signup_scroll">
                                  <div id="mc-form" class="mc-form subscribe-form form-group" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                    <button  class="btn" id="mc-submit">Subscribe</button>
                                  </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="{{ asset('assets/front/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/ajax-mail.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/front/js/venobox.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/front/js/scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>
</html>
