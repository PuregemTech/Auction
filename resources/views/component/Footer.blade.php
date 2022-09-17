<footer class="bg_img padding-top oh" data-background="assets/images/footer/footer-bg.jpg">
    <div class="footer-top-shape">
        <img src="assets/css/img/footer-top-shape.png" alt="css">
    </div>
    <div class="anime-wrapper">
        <div class="anime-1 plus-anime">
            <img src="assets/images/footer/p1.png" alt="footer">
        </div>
        <div class="anime-2 plus-anime">
            <img src="assets/images/footer/p2.png" alt="footer">
        </div>
        <div class="anime-3 plus-anime">
            <img src="assets/images/footer/p3.png" alt="footer">
        </div>
        <div class="anime-5 zigzag">
            <img src="assets/images/footer/c2.png" alt="footer">
        </div>
        <div class="anime-6 zigzag">
            <img src="assets/images/footer/c3.png" alt="footer">
        </div>
        <div class="anime-7 zigzag">
            <img src="assets/images/footer/c4.png" alt="footer">
        </div>
    </div>
    <div class="footer-top padding-bottom padding-top">
        <div class="container">
            <div class="row mb--60">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        {{-- auction_categories --}}
                        <h5 class="title" style="color: #693ff5;">{{ __('messages.auction_categories') }}</h5>
                        <ul class="links-list">
                            <li>
                                <a href="{{route('categoryItem', ['id' => 3])}}" style="color: #693ff5;">{{ __('messages.category1') }}</a>
                            </li>
                            <li>
                                <a href="{{route('categoryItem', ['id' => 1])}}"  style="color: #693ff5;">{{ __('messages.category5') }}</a>
                            </li>
                            <li>
                                <a href="{{route('categoryItem', ['id' => 2])}}">{{ __('messages.category3') }}</a>
                            </li>
                            <li>
                                <a href="{{route('categoryItem', ['id' => 5])}}">{{ __('messages.category7') }}</a>
                            </li>
                            <li>
                                <a href="{{route('categoryItem', ['id' => 6])}}">{{ __('messages.category2') }}</a>
                            </li>
                            <li>
                                <a href="{{route('categoryItem', ['id' => 4])}}" >{{ __('messages.category6') }}</a>
                            </li>
                            <li>
                                <a href="{{route('categoryItem', ['id' => 7])}}" >{{ __('messages.category4') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
               
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        <h5 class="title"> {{ __('messages.We_Help') }}</h5>
                        <ul class="links-list">
                            <li>
                                <a href="/login">
                                    {{ __('messages.MyAccount') }}</a>
                            </li>
                             {{-- contact_us --}}
                            <!-- <li>
                                <a href="#0">Safe and Secure</a>
                            </li>
                            <li> ff
                                <a href="#0">Shipping Information</a>
                            </li> -->
                            <li>
                                <a href="/contact">
                                    {{ __('messages.contact_us') }}</a>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#0">Help & FAQ</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-follow">
                        {{-- follow_Us --}}
                        <h5 class="title">
                            {{ __('messages.follow_Us') }}
                        </h5>
                        <ul class="links-list">
                            <li>
                                <a href="#0"><i class="fas fa-phone-alt"></i>+2348132933439</a>
                            </li>
                            <!-- <li>
                                <a href="#0"><i class="fas fa-blender-phone"></i>+2348132933439</a>
                            </li> -->
                            <li>
                                <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="254d40495565404b424a514d4048400b464a48">
                                @if (Auth::check())

                                {{Auth::user()->email}}
                                @endif    
                                
                                </span></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fas fa-location-arrow"></i>UNIOSUN</a>
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright-area">
                <div class="footer-bottom-wrapper">
                    <!-- <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
                    </div> -->
                    <!-- <ul class="gateway-area">
                        <li>
                            <a href="#0"><img src="assets/images/footer/paypal.png" alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="assets/images/footer/visa.png" alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="assets/images/footer/discover.png" alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="assets/images/footer/mastercard.png" alt="footer"></a>
                        </li>
                    </ul> -->
                    <div class="copyright">
                        <p>&copy; Copyright 2022 | <a href="#0">Multilingual Online Auction System</a> By <a href="#0">Ademola Toheeb Opeyemi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>