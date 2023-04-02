
  <!-- Favicons -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
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
  
  
 <!-- ======= Hero Section ======= -->
{{-- Carousel --}}
  
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200"> 
        <h1>Better Solutions For Your Business</h1>
        <h2>Delivering the Best-of-Breed IT Infrastructure Technology that Fits Your Business and Budget, with a Commitment to Timely and Efficient Service</h2>
        <br>
        <br>
        <div class="d-flex justify-content-center justify-content-lg-start">
        <search id="search">
        <div class="search-searchbar justify-content-start">
          <div class="container">
          <div class="row">
            <div class="col-lg-50">
            <h4>Ayo cari apa yang kamu butuhkan!</h4>
            <form action="{{ url('search')}}" method="GET">
              <input type="serch" name="search" class="form-control" placeholder="Search here" aria-label="search" aria-describedby="search"><input type="submit" value="Search">
            </form>
            </div>
          </div>
          </div>
        </div>
        </search>
        </div>
      </div>
     
      <div class="col-lg-6 order-1 order-lg-2 hero-img"  data-aos=zoom-in data-aos-delay="200"> 
        <img src="{{asset('/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
  {{-- End of Carousel --}}
