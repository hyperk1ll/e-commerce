<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_description')">
    <meta name="author" content="MTU Catalog">

     <!-- Favicons -->
     <link rel="shortcut icon" href="{{  asset('admin/images/mtu.transparent.png') }}" />
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{  asset('admin/images/mtu.transparent.png') }}" />

    <script> src="https://unpkg.com/aos@next/dist/aos.js"</script>
  
    @livewireStyles
</head>
<body>
    
    <div class="container-scroller">
        
        {{-- <div class="container-fluid page-body-wrapper"> --}}
            {{-- @include('layouts.inc.frontend.sidebar') --}}
            
            {{-- <div class="main-panel"> --}}
                {{-- <div class="content-wrapper"> --}}
                    @yield('content')
                    
                {{-- </div> --}}
                @include('layouts.inc.frontend.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    const overlay = document.querySelector('.overlay');
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');
    const link = document.querySelector('.a a')

    window.onload = function(){
        setTimeout(function(){
            popup.style.display = "block"
            overlay.style.display = "block"
        }, 2000);
    }

    close.addEventListener('click', () =>{
        popup.style.display = "none";
        overlay.style.display = "none";
    })

    link.addEventListener('click', () =>{
        popup.style.display = "none";
        overlay.style.display = "none";
    })
  </script>

    @livewireScripts
</body>

</html>
