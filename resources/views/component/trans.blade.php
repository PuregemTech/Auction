

<div class="container">
    <div class="header-top-wrapper">
        <ul class="customer-support">
            <!-- <li>
                <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
            </li> -->
            <li>
                <i class="fas fa-globe"></i>
                {{-- <select name="language" class="select-bar">
                    <option value="en">En</option>
                    <option value="Bn">Yor</option>
                </select> --}}
                
                 <select class="select-bar changeLang">

        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>

        <option value="yor" {{ session()->get('locale') == 'yor' ? 'selected' : '' }}>Yoruba</option>


    </select>
            </li>
        </ul>
        <ul class="cart-button-area">
           
            <ul class="menu ml-auto">
               
            
                
                
             @if (Auth::id() && Auth::check())
             <li>
                <a> {{ Auth::user()->name }}  </a>
                <ul class="submenu">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                   
                </ul>
            </li>
                 
             @endif
            
       
            
            
               
            
         
             
            
                
            </ul>
        </ul>
    </div>
</div>