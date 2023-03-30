<nav class="navbar col-lg-12 col-12 fixed-top d-flex flex-row " style="top: -10px">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"> 
        <a class="navbar-brand brand-logo" href="{{ url('/') }}" style="font-weight: 400; font-family: 'Raleway', sans-serif; font-size: 11px; text-transform:uppercase; margin-right:10px" href="">
          <img src="/images/mtu-mini.svg" alt="logo" style="width: 40px;"/> 

            PT. Mahir Tekno Utama &nbsp;&nbsp;
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="/images/mtu-mini.svg" alt="logo"/></a>

      </div>  
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-4 w-100 mt-50">
        <li class="nav-item nav-search d-none d-lg-block w-75">
        <form action="{{ url('search')}}" method="GET" role="search">
          <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="serch" name="search" class="form-control" placeholder="Search by product, category, or brand" aria-label="search" aria-describedby="search">
            </div>
          </form>  
        </li>
      </ul>

    
      
        <!-- Authentication Links -->
        @guest
              <a class="nav-link" href="{{ route('login') }}"><div class="btn btn-primary">{{ __('Admin') }}</div></a>
        @else
        <div class="dropdown">
          <a id="navbarDropdown" class="nav-link nav-profile dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/faces/face5.jpg" style="width:40px" alt="profile"/>&nbsp;
            <span class="nav-profile-name">{{ Auth::user()->name }}</span>
          </a>
        
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Setting</a><li>
          <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a></li>                    
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
              @csrf
          </form>
        </ul>
        </div>
        @endguest
    </div>
  </nav>

  <style>
  .warna {
    background-color: #f79256
  }
  </style>
