  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">PT. MAHIR TEKNO UTAMA</a></h1>
    
      
      <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="#clients">Clients</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li class="dropdown"><a href="#services"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
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