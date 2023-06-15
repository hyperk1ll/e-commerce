

<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">MTU CATALOG</a></h1>
    
      
      <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li class="dropdown"><a href="#services"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            @foreach ($categories as $category)
              <li><a href="{{ url('collections/' . $category->name) }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="dropdown1">
          <a href="#"><span>Brands</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              @foreach ($brands as $brand)
              <li>
                  <form action="{{ url('/search') }}" method="GET">
                      <input type="hidden" name="category" value="{{ $category->slug }}">
                      <button style="text-decoration: none; color:#0c3c53;" type="submit" class="btn" name="search" value="{{ $brand->name }}">{{ $brand->name }}</button>
                  </form>
              </li>
              @endforeach
          </ul>
        <li><a class="nav-link scrollto" href="#howto">How to Buy Our Products?</a></li>
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
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    </div>
  </header>

  <script>
    // Change navbar color on scroll
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.querySelector('#header').style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
      } else {
        document.querySelector('#header').style.backgroundColor = 'transparent';
      }
    });
  </script>