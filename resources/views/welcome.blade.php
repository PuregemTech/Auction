<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>multiingual Online auction system</title>
    <link rel="stylesheet" href='assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href='assets/css/all.min.css'>
    <link rel="stylesheet" href='assets/css/animate.css'>
    <link rel="stylesheet" href='assets/css/nice-select.css'>
    <link rel="stylesheet" href='assets/css/owl.min.css'>
    <link rel="stylesheet" href='assets/css/magnific-popup.css'>
    <link rel="stylesheet" href='assets/css/flaticon.css'>
    <link rel="stylesheet" href='assets/css/jquery-ui.min.css'>
    <link rel="stylesheet" href='assets/css/main.css'>
    

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <style>
        .auction-item-2 .auction-content .bid-area .bid-amount::before {
            background: inherit;
        }
    </style>
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
           @include('component.trans')
        </div>
        
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <!-- <div class="logo" style="width: 130px;">
                        <a href="index.html">
                            <img src="assets/images/logo/logo1.png" alt="logo" style="height: 120px;">
                        </a>
                    </div> -->
                    @include('component.header')
                  
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
  
    <!--============= Cart Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="assets/images/banner/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate">Multilingual Online Auction System</h5>
                        <h1 class="title"><span class="d-xl-block">{{ __('messages.title') }}</span>{{ __('messages.title2') }}</h1>
                        <p>
                            {{ __('messages.section1') }}
                        </p>
                        @if (Auth::check()&& Auth::user()->user_type==1)
                        <a href="{{route("upload")}}" class="custom-button yellow btn-large">{{ __('messages.getStarted') }}</a>
                        @elseif(Auth::check()&& Auth::user()->user_type==2)
                      <a href="{{route("all")}}" class="custom-button yellow btn-large">{{ __('messages.getStarted') }}</a>
                      @elseif(!Auth::check())
                      <a href="/login" class="custom-button yellow btn-large">{{ __('messages.getStarted') }}</a>

                      @elseif(Auth::check())
                      <a href="{{route("all")}}" class="custom-button yellow btn-large">{{ __('messages.getStarted') }}</a>
                      @endif
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="banner-thumb-2">
                        <img src="assets/images/banner/banner-2.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    @if (Auth::check()&& Auth::user()->user_type==1)

    @else
    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <!-- <div class="left">
                        <h6 class="title pl-0 w-100">Browse the highlights</h6>
                    </div> -->
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        <a  href="{{route('categoryItem', ['id' => 3])}}" class="browse-item">
                            <img src="assets/images/auction/09.png" alt="auction">
                            <span class="info">{{ __('messages.category1') }}</span>
                        </a>
                        <a href="{{route('categoryItem', ['id' => 6])}}" class="browse-item">
                            <img src="assets/images/auction/02.png" alt="auction">
                            <span class="info">{{ __('messages.category2') }}</span>
                        </a>
                        <a href="{{route('categoryItem', ['id' => 2])}}" class="browse-item">
                            <img src="assets/images/auction/03.png" alt="auction">
                            <span class="info">
                                {{ __('messages.category3') }}
                                </span>
                        </a>
                        <a href="{{route('categoryItem', ['id' => 7])}}" class="browse-item">
                            <img src="assets/images/auction/06.png" alt="auction">
                            <span class="info">{{ __('messages.category4') }}</span>
                        </a>
                        <a href="{{route('categoryItem', ['id' => 1])}}" class="browse-item">
                            <img src="assets/images/auction/08.jpg" alt="auction">
                            <span class="info">{{ __('messages.category5') }}</span>
                        </a>
                        <a href="{{route('categoryItem', ['id' => 4])}}" class="browse-item">
                            <img src="assets/images/auction/bag.jpg" alt="auction">
                            <span class="info">{{ __('messages.category6') }}</span>
                        </a>
                        <a href="{{route('categoryItem', ['id' => 5])}}" class="browse-item">
                            <img src="assets/images/auction/shoe.jpg" alt="auction">
                            <span class="info">{{ __('messages.category7') }}</span>
                        </a>
                        <!-- <a href="#0" class="browse-item">
                            <i class="fas fa-book-reader" style="display: block; color: pink; font-size: 500%;"></i>
                            <span class="info" style="display: inline-block; margin-top: 70px;">Clothes</span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->

        <!--============= Car Auction Section Starts Here =============-->
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"><img src="assets/images/auction/car/car-bg.png" alt="car"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/09.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">{{ __('messages.category1') }}</h2>
                            <p>{{ __('messages.subText1') }}</p>
                        </div>
                    </div>
                    <a href="{{route("all")}}" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                   
                    @foreach ($showThreeBookItem as $item)
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="bidder/product-details.html"><img  src="{{ asset('cover/'.$item->cover_image) }}" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="bidder/product-details.html">{{$item->name}}</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount" style="width: 100%;">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">&#x20A6;{{$item->price}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    {{-- <div class="countdown">
                                        <div id="bid_counter27"></div>
                                    </div> --}}
                                    {{-- <span class="total-bids">30 Bids</span> --}}
                                </div>
                                <div class="text-center">
                                    <a href="product/bid/{{$item->id}}" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--============= Car Auction Section Ends Here =============-->
    </div>
      
  @endif
    


    <!--============= Jewelry Auction Section Starts Here =============-->
    @if (Auth::check()&& Auth::user()->user_type==1)

  @else
  <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
    <div class="jewelry-bg d-none d-xl-block"><img src="assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
    <div class="container">
        <div class="section-header-3">
            <div class="left">
                <div class="thumb">
                    <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                </div>
                <div class="title-area">
                    <h2 class="title">{{ __('messages.category2') }}</h2>
                    <p>{{ __('messages.message2') }}</p>
                </div>
            </div>
           
        </div>
        @if (Auth::check()&& Auth::user()->user_type==1)
        @else
        <div class="row justify-content-center mb-30-none">
            @foreach ($showJeweleryItem as $item)
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="bidder/product-details.html"><img  src="{{ asset('cover/'.$item->cover_image) }}" alt="car">®</a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="bidder/product-details.html">{{$item->name}}</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount" style="width: 100%;">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Price</div>
                                    <div class="amount">&#x20A6;{{$item->price}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            {{-- <div class="countdown">
                                <div id="bid_counter27"></div>
                            </div> --}}
                            {{-- <span class="total-bids">30 Bids</span> --}}
                        </div>
                        <div class="text-center">
                            <a href="product/bid/{{$item->id}}" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>

        @endif





    </div>
</section>
      
  @endif
    <!--============= Jewelry Auction Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    @if (Auth::check()&& Auth::user()->user_type==1)
   @else
   <section class="call-in-section padding-top pt-max-xl-0">
    <div class="container">
        <div class="call-wrapper cl-white bg_img" data-background="assets/images/call-in/call-bg.png">
            <div class="section-header">
                <h3 class="title">{{ __('messages.message3') }}</h3>
                <!-- <p>From cars to diamonds to iPhones, we have it all.</p> -->
            </div>
            <a href="/register" class="custom-button white">{{ __('messages.register1') }}</a>
        </div>
    </div>
</section>

   @endif
    <!--============= Call In Section Ends Here =============-->


    <!--============= Watches Auction Section Starts Here =============-->
    @if (Auth::check()&& Auth::user()->user_type==1)
    @else
    <section class="watches-auction-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                @foreach ($showThreeWatchItem as $item)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img  src="{{ asset('cover/'.$item->cover_image) }}" alt="car"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">{{$item->name}}</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">&#x20A6;{{$item->price}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                {{-- <div class="countdown">
                                    <div id="bid_counter27"></div>
                                </div> --}}
                                {{-- <span class="total-bids">30 Bids</span> --}}
                            </div>
                            <div class="text-center">
                                <a href="product/bid/{{$item->id}}" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!--============= Watches Auction Section Ends Here =============-->

    <!--============= Art Auction Section Starts Here =============-->

    <!--============= Art Auction Section Ends Here =============-->


    <!--============= How Section Starts Here =============-->

    @if (Auth::check()&& Auth::user()->user_type==1)
    

    @else
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">{{ __('messages.message4') }}</h2>
                    <p>{{ __('messages.message5') }}</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">{{ __('messages.sign_up') }}</h4>
                                <p>{{ __('messages.message6') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how2.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">{{ __('messages.bid') }}</h4>
                                <p>{{ __('messages.message7') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how3.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">{{ __('messages.win') }}</h4>
                                <p>{{ __('messages.message8') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endif
  
    <!--============= How Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <!-- <section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Don’t just take our word for it!</h2>
                <p>Our hard work is paying off. Great reviews from amazing customers.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="assets/images/client/client01.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="assets/images/client/client02.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="assets/images/client/client03.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--============= Client Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
   
    @if (Auth::check()&& Auth::user()->user_type==1)

    @else
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
                            <h5 class="title" style="color: #693ff5;">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0" style="color: #693ff5;">{{ __('messages.category1') }}</a>
                                </li>
                                <li>
                                    <a href="#0" style="color: #693ff5;">Clothes</a>
                                </li>
                                <li>
                                    <a href="#0">Watches</a>
                                </li>
                                <li>
                                    <a href="#0">Shoes</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelries</a>
                                </li>
                                <li>
                                    <a href="#0">Bags</a>
                                </li>
                                <li>
                                    <a href="#0">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Easy Access</h5>
                            <ul class="links-list">
                                <!-- <li>
                                    <a href="#0">About Multilingual Online Auction System</a>
                                </li> -->
                                <li>
                                    <a href="#0">Auction</a>
                                </li>
                                <li>
                                    <a href="#0">Sell</a>
                                </li>
                                <li>
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#0">Personal Profile</a>
                                </li>
                                <li>
                                    <a href="#0">My Bids</a>
                                </li>
                                <li>
                                    <a href="#0">Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Your Account</a>
                                </li>
                                <!-- <li>
                                    <a href="#0">Safe and Secure</a>
                                </li>
                                <li>
                                    <a href="#0">Shipping Information</a>
                                </li> -->
                                <li>
                                    <a href="#0">Contact Us</a>
                                </li>
                                <!-- <li>
                                    <a href="#0">Help & FAQ</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
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
        
    @endif
    
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<script type="text/javascript">

  

    var url = "{{ route('changeLang') }}";

  

    $(".changeLang").change(function(){

        window.location.href = url + "?lang="+ $(this).val();

    });

  

</script>



</html>