<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
* {
  font-family: "Poppins", sans-serif;
}
.footer-basic {
    padding: 0px;
    background-color:rgb(37, 179, 250);
    color:rgb(37, 179, 250);
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    z-index: 2;
  }
  
  .footer-basic ul {
    padding:0;
    list-style:none;
    text-align:center;
    font-size:18px;
    line-height:1.6;
    margin-bottom:0;
  }
  
  .footer-basic li {
    padding:0 10px;
  }
  
  .footer-basic ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.8;
  }
  

  
  .footer-basic .copyright {
    padding: 10px;
    text-align:center;
    font-size:13px;
    color:#fff;
    margin-bottom:0;
  }
</style>

<div class="footer-basic">
       {{-- <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul> --}}
        <p class="copyright">PT. Mahir Tekno Utama © <script>document.write(/\d{4}/.exec(Date())[0])</script> </p>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>



<!-- credit to https://epicbootstrap.com/snippets/footer-basic -->