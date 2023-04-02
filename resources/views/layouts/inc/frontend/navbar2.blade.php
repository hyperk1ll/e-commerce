{{-- 

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

    
  </style> --}}

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
  
      <h1 class="logo me-auto"><a href="{{ url('/') }}">PT. Mahir Tekno Utama</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('collections/switch') }}">Switch</a></li>
              <li><a href="{{ url('collections/router') }}">Router</a></li>
              <li><a href="{{ url('collections/peripheral') }}">Peripheral</a></li>
              <li><a href="{{ url('collections/server') }}">Server</a></li>
            </ul>
          </li>
          <li class="dropdown1"><a href="#"><span>Brands</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          @guest
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Admin</a></li>
          @else
            <div class="dropdown">
              <a id="navbarDropdown" class="nav-link nav-profile dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- <img src="" style="width:40px" alt="profile"/>&nbsp; --}}
                <span class="nav-profile-name">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                    @csrf
                  </form>
                </li>                    
              </ul>
            </div>
          @endguest
          <button type="button" class="mobile-nav-toggle d-lg-none"><i class="bi bi-list"></i></button>
        </ul>
        
      </nav><!-- .navbar -->
  
    </div>
  </header><!-- End Header -->