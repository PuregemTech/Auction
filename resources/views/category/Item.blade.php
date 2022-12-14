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
            <div class="container">
                <div class="header-top-wrapper">
                    @include('component.trans')
                </div>
        </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <!-- <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div> -->
                @include('component.header')
                    
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


    <!--============= Featured Auction Section Starts Here =============-->
    <section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="section-header cl-white mw-100 left-style">
                {{-- bidon --}}
                <h3 class="title">{{ __('messages.bidon') }}</h3>
            </div>
            <div class="row justify-content-center mb-30-none">
               @if (count($categories)==0)

               @else
               @foreach ($categories as $item)
               <div class="col-sm-10 col-md-6 col-lg-4">
                   <div class="auction-item-2">
                       <div class="auction-thumb">
                           <a><img  src="{{ asset('/cover/'.$item->cover_image) }}"
                               style="object-fit:contain;height:200px"
                               
                               alt="car"></a>
                           <a href="#0" class="rating"><i class="far fa-star"></i></a>
                           <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                       </div>
                       <div class="auction-content">
                           <h6 class="title">
                               <a>{{$item->name}}</a>
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
                           {{-- <div class="countdown-area">
                               <div class="countdown">
                                   <div id="bid_counter26"></div>
                               </div>
                               <span class="total-bids">30 Bids</span>
                           </div> --}}
                           @if ($item->ended_bid==1)
                           <div class="text-center">
                            <a href="/product/bid/{{$item->id}}" class="custom-button">    {{'Bid has ended'}}</a>
                        </div>
                       
                       @else
                       <div class="text-center">
                        <a href="/product/bid/{{$item->id}}" class="custom-button">Submit a bid</a>
                    </div>
                       @endif
                         
                       </div>
                   </div>
               </div>
                   
               @endforeach
              
                   
               @endif
              
            </div>
        </div>
    </section>
    <!--============= Featured Auction Section Ends Here =============-->

    
    </div>
    </div>
    <!--============= Product Auction Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="../../assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="../../assets/css/img/footer-top-shape.png" alt="css">
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
        <div class="newslater-wrapper">
            <div class="container">
                <!-- <div class="newslater-area">
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
                </div> -->
            </div>
        </div>
      
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