
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
  
  
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Feel free to contact us</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Gedung East Square Lt. 1, Jl. Pemuda No. 65 Rawamangun, Jakarta Timur, 13220</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>marketing@mahirtekno.co.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>021-2247 1134</p>
            </div>

            <iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=Gedung East Square Lt. 1, Jl. Pemuda No. 65 Rawamangun, Jakarta Timur, 13220&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        @if(Session::has('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
        @endif

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="https://api.emailjs.com/api/v1.0/email/send-form" method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
                  @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
              </div>
              <div class="form-group col-md-6">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
                @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
                @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
  

      </div>

    </div>
  </section><!-- End Contact Section -->

  <script>
        // Mendapatkan referensi ke tombol "Send Message"
    const sendButton = document.querySelector('.text-center .[type="submit"]');

    // Menambahkan event listener ke tombol "Send Message"
    sendButton.addEventListener('click', (event) => {
      event.preventDefault(); // Mencegah form dikirim secara default
      // Panggil fungsi untuk mengirim email
      sendEmail();
    });
  </script>
  <script src="/mtu-catalog/resources/js/email.js"></script>