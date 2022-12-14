<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Multilingual Online Auction System</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/css/owl.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/css/flaticon.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    @include('component.trans')
                  
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container" style="display: flex; justify-content: center;">
                <div class="header-wrapper">
                    <!-- <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div> -->
                    @include('component.header')
                    <!-- <form class="search-form">
                        <input type="text" placeholder="Search for products....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form> -->
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <!-- <a href="index.html" class="logo">
                <img src="assets/images/logo/logo2.png" alt="logo">
            </a> -->
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop05.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Comics Book</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#0" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="bg_img hero-bg bottom_center" data-background="../../assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0">
                        <div class="user">
                            <div class="thumb-area">
                                @if (Auth::user()->picture==NULL ||Auth::user()->picture== " ")
                                
                                    
                                @else
                                <img src="{{ asset('/profile_picture/'.Auth::user()->picture) }}"  alt="user"  style="width: 100px;height:100px;">  
                                @endif
                                
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">{{Auth::user()->name}}</a></h5>
                                <span class="username"><a>
                                {{Auth::user()->email}}  
                                </a></span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                         @include('component.BuyerSidebar')
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                               
                                    
                               
                                <div class="header">
                                    <h4 class="title">{{ __('messages.PD') }}</h4>
                                    <a href="/profile/edit"> <span class="edit"><i class="flaticon-edit"></i> Edit</span></a>
                                </div>
                              
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">{{ __('messages.Name') }}</div>
                                        <div class="info-value">{{$users->name}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">{{ __('messages.Department') }}</div>
                                        <div class="info-value">Computer Science</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Matric No.</div>
                                        <div class="info-value">{{$users->matric_no}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">{{ __('messages.dob') }}</div>
                                        <div class="info-value">{{$users->dob}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">{{ __('messages.Address') }}</div>
                                        <div class="info-value">{{$users->address}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">{{ __('messages.EmailAddress') }}</div>
                                        <div class="info-value"><a href="http://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3d303e392e286f68651c3b313d3530723f3331">{{Auth::user()->email}}</a></div>
                                    </li>
                                    <li>
                                        <div class="info-name">{{ __('messages.phone') }}</div>
                                        <div class="info-value">{{$users->mobile}}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Account Settings</h4>
                                    <!-- <span class="edit"><i class="flaticon-edit"></i> Edit</span> -->
                                </div>
                                <ul class="dash-pro-body">
                                    <!-- <li>
                                        <div class="info-name">Language</div>
                                        <div class="info-value">English (United States)</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Time Zone</div>
                                        <div class="info-value">(GMT-06:00) Central America</div>
                                    </li> -->
                                    <li>
                                        <div class="info-name">{{ __('messages.status') }}</div>
                                        <div class="info-value"><i class="flaticon-check text-success"></i> Active</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    @include('component.Footer2')
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/modernizr-3.6.0.min.js"></script>
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/isotope.pkgd.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/waypoints.js"></script>
    <script src="../../assets/js/nice-select.js"></script>
    <script src="../../assets/js/counterup.min.js"></script>
    <script src="../../assets/js/owl.min.js"></script>
    <script src="../../assets/js/magnific-popup.min.js"></script>
    <script src="../../assets/js/yscountdown.min.js"></script>
    <script src="../../assets/js/jquery-ui.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

<script type="text/javascript">

  

    var url = "{{ route('changeLang') }}";

  

    $(".changeLang").change(function(){

        window.location.href = url + "?lang="+ $(this).val();

    });

  

</script>

</html>