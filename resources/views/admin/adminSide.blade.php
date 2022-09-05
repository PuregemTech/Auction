<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminUserDashboard")}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Manage Users
                </p>
            </a>
        </li>
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminProduct")}}" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>
                    Manage Products
                </p>
            </a>
        </li>
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminCategory")}}" class="nav-link">
                <i class="nav-icon fas fa-pencil-alt"></i>
                <p>
                    Manage Categories
                </p>
            </a>
        </li>

        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminCategory")}}" class="nav-link">
                <i class="nav-icon fas fa-pencil-alt"></i>
                <p>
                    Manage Bids
                </p>
            </a>
        </li>
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("language")}}" class="nav-link">
                <i class="nav-icon fas fa-pencil-alt"></i>
                <p>
                    Manage Language
                </p>
            </a>
        </li>


        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a class="dropdown-item" href="{{ route('AdminLogout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            

             <form id="logout-form" action="{{ route('AdminLogout') }}" method="POST" class="d-none" >
                <i class="nav-icon fas fa-pencil-alt"></i>
               
                @csrf
            </form>

          <p style="color:white">  {{ __('Logout') }} </p>
            </a>
        </li>


        {{-- <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="managebid/html" class="nav-link">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                    Manage Bids
                </p>
            </a>
        </li> --}}
        {{-- <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="updatelanguage.html" class="nav-link">
                <i class="nav-icon fas fa-language"></i>
                <p>
                    Update Language
                </p>
            </a>
        </li> --}}
        
        
    </ul>
</nav>