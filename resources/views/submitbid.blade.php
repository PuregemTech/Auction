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

    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
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
       <div style="margin-left: 510px">
        @include('component.header')
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


    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                    <div class="">
                        <div class="">
                            <img  src="{{ asset('cover/'.$products->cover_image) }}" alt="product"
                             style="object-fit:contain!important;height:600px !important;">
                        </div>
                    </div>
                    {{-- <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product2.png" alt="product">
                        </div>
                    </div> --}}
                    {{-- <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product3.png" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product4.png" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product5.png" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product6.png" alt="product">
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="product-details-slider-wrapper">
                <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                    @foreach ($images as $image)
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img  src="{{ asset('totalimage/'.$image->image) }}" alt="11car" 
                            >

                        </div>
                    </div>
                    @endforeach
                    
                   
                  
                </div>
                <span class="det-prev det-nav">
                    <i class="fas fa-angle-left"></i>
                </span>
                <span class="det-next det-nav active">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>



            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    @if(Session::has('success'))
                <p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">{{$products->name}}</h2>
                           
                        </div>
                        <ul class="price-table mb-30">
                            <li class="header">
                                <h5 class="current"> {{ __('messages.Price') }}</h5>
                                <h3 class="price"> &#x20A6;{{$products->price}}</h3>
                        </li>
                            <li>
                                <span class="details">{{ __('messages.currentH') }}</span>
                                <h5 class="info">
                                @if ($products->ended_bid==0)

                                {{$MAX_PRICE}}
                                    
                                @else
                                {{$MAX_PRICE}}
                                @endif
                            </li>
                            <!-- <li>
                                <span class="details">Bid Increment (US)</span>
                                <h5 class="info">$50.00</h5>
                            </li> -->
                        </ul>
                       @if ($products->paid_item)
                       @else
                       <div class="product-bid-area">
                        @if ($products->ended_bid==1 && $MAX_PRICE_USER_ID==Auth::id())

                        <div class="text-center">
                            {{-- <a class="custom-button">
                                Pay
                            </a> --}}

                            <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                                {{ csrf_field() }}
                                <input type="hidden" name="amount" value="{{$MAX_PRICE}}" /> 
                                <input type="hidden" name="id" value="{{$products->id}}" />
                                <input type="hidden" name="description" value="{{$products->description}}" />
                                <input type="hidden" name="email" value="{{Auth::user()->email}}" /> 
                                <button class="custom-button" type="submit">
                                  PAY
                                </button> 

                            </form>
                           
                        </div>
                            
                        @else
                        <form class="product-bid-form" method="POST" action="{{route('SubmitBidPage')}}">
                            @csrf
                           
                            <input type="hidden" name="user_id"value={{$products->user_id}}>
                            <input type="hidden" name="name"value={{$products->name}}>
                            <input type="hidden" name="product_id" value={{$products->id}}>

                            @if ($products->ended_bid !== "1")
                            <input type="text" placeholder="Enter your bid amount" name="price">
                            <button class="custom-button">Submit a bid</button>
                            @else
                                 <h6 style="margin-left:130px;margin-top:10px;color:red">Bid has ended</h6>
                            @endif
                           

                            <div>
                                @foreach ($errors->all() as $error)
                                <p style="color:red;margin-left:70px">{{ $error }}</p>
                            @endforeach
                            </div>
                            
                          



                        </form>
                        @endif
                      
                    </div>
                           
                       @endif
                        <!-- <div class="buy-now-area">
                            <a href="#0" class="custom-button">Buy Now: $4,200</a>
                            <a href="#0" class="rating custom-button active border"><i class="fas fa-star"></i> Add to Wishlist</a>
                            <div class="share-area">
                                <span>Share to:</span>
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
               @if ($products->paid_item)

               @else
               <div class="col-lg-4">
                <div class="product-sidebar-area">
                    <div class="product-single-sidebar mb-3">
                        <h6 class="title">{{ __('messages.end') }}</h6>
                        <div style="color:'red">
                           {{-- {{\Carbon\Carbon::now();}} --}}
                        <h4 style="color:red"> {{$remaining_days}} Days Left</h4>
                        </div>
                        <div class="side-counter-area">
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="../../assets/images/product/icon1.png" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">
                                        @if (is_null($count_bidder))
                              0
                              @else 
                             {{$count_bidder}}
                            @endif</span></h3>
                                    <p>{{ __('messages.active_biding') }}</p>
                                </div>
                            </div>
                            <!-- <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="assets/images/product/icon2.png" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">203</span></h3>
                                    <p>Watching</p>
                                </div>
                            </div> -->
                            <!-- <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="assets/images/product/icon3.png" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">82</span></h3>
                                    <p>Total Bids</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a> -->
                </div>
            </div>
                   
               @endif


            </div>
        </div>
        @if ($products->paid_item)

        @else
            
        @endif
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title">{{$products->name}}</h3>
                            <div class="item">
                                <table class="product-info-table">
                                    <tbody>
                                        <tr>
                                            <th>{{ __('messages.condition') }}</th>
                                            <td>{{$products->condition}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Mileage</th>
                                            <td>15,000 miles</td>
                                        </tr>
                                        <tr>
                                            <th>Year</th>
                                            <td>09-2017</td>
                                        </tr>
                                        <tr>
                                            <th>Engine</th>
                                            <td>I-4 1,5 l</td>
                                        </tr>
                                        <tr>
                                            <th>Fuel</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th>Transmission</th>
                                            <td>Automatic</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>Blue</td>
                                        </tr>
                                        <tr>
                                            <th>Doors</th>
                                            <td>5</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">{{ __('messages.description') }}</h5>
                                <ul>
                                   <li>{!! $products->description !!}</li>
                                </ul>
                            </div>
{{-- Address --}}
                            <div class="item">
                                <h5 class="subtitle">{{ __('messages.Address') }}</h5>
                                <ul>
                                   <li>{!! $address->delivery_address !!}</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Active Bidders</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('messages.Bidder') }}</th>
                                            <th>Deparment</th>
                                            <th>{{null}}</th>
                                            <th>{{ __('messages.Price') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bidders as $item)
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        {{-- <img src="../../assets/images/history/01.png" alt="history"> --}}
                                                    </div>
                                                    <div class="content">
                                                    {{$item->name}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">{{$item->department}}</td>
                                            <td data-history="time">{{null}}</td>
                                            <td data-history="unit price"> {{$item->price}}</td>
                                        </tr>
                                            
                                        @endforeach
                                        
                                       
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="../../assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="../assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="../../assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="../../assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="../../assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="../../assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="../../assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="../../assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
        <!-- <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="assets/images/footer/newslater.png" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to Sbidu</h5>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
      @include('component.footer')
    </footer>
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

