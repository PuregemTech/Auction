<ul class="menu ml-auto">
    <li>
        <a href="/">{{ __('messages.Home') }}</a>
    </li>
    @if (Auth::check()&& Auth::user()->user_type==1)
    <li>
        <a href="{{route('upload')}}">
            {{ __('messages.sell') }}     
        </a>
    </li>
    @endif

    @if (Auth::check()&& Auth::user()->user_type==2)
    <li>
        <a href="{{route('all')}}">
            {{ __('messages.Auction') }}        
        </a>
    </li>


    
    @endif
   

    
    
   @if (Auth::check()&& Auth::user()->user_type==1)
   <li>
    <a>{{ __('messages.Dashboard') }}   </a>
    <ul class="submenu">
        <li>
            <a href="{{route("SellerDashboard")}}">
                {{ __('messages.Dashboard') }}        </a>
        </li>
        <li>
            <a href="{{route("personalProfile")}}">
                {{ __('messages.Personal_Profile') }}
                
                </a>
        </li>
        <li>
            <a href="{{route("myitem")}}">
                {{ __('messages.my_item') }}</a>
        </li>
        <li>
            <a href="{{route("SellerNotify")}}">Notification</a>
        </li>
    </ul>
</li>

@elseif(Auth::check()&& Auth::user()->user_type==2)
,
<li>
    <a> {{ __('messages.Dashboard') }}</a>
    <ul class="submenu">
        <li>
            <a href="{{route("BuyerDashboard")}}"> {{ __('messages.Dashboard') }}</a>
        </li>
        <li>
            <a href="{{route("MyBidItem")}}">
                {{ __('messages.MyBid') }}
                
                
            
            </a>
           
         
        </li>
        <li>
            <a href="{{route('showUserThatHavePaid')}}">
                {{ __('messages.paid_item') }}        
            </a>
        </li>
        
        {{-- <li>
            <a href="bidder/winning-bids.html">Winning Bids</a>
        </li> --}}
        <li>
            <a href="{{route("SellerNotify")}}">Notification</a>
        </li>
        <!-- <li>
            <a href="my-favorites.html">My Favorites</a>
        </li> -->
    </ul>
</li>
       
   @endif

   
    @if (Auth::check())

    @else
    <li>
        <a >{{ __('messages.MyAccount') }}</a>
        <ul class="submenu">
            <li>
                <a href="{{route("seller-registration")}}">{{ __('messages.RegSeller') }}</a>
            </li>
            <li>
                <a href="/register">{{ __('messages.RegBuyer') }}</a>
            </li>
            <li>
                <a href="/login">{{ __('messages.Login') }}</a>
            </li>
        </ul>
    </li>
        
    @endif


    <li>
        <a href="{{route('Contact')}}">{{ __('messages.contact') }}</a>
    </li>
</ul>