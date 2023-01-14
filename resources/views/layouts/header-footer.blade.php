<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OneFood | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ env('APP_URL') }}/assets/img/OneFood.ico" rel="icon">
  <link href="{{ env('APP_URL') }}/assets/img/OneFoodTransparent.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ env('APP_URL') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ env('APP_URL') }}/assets/css/main.css" rel="stylesheet">

  <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.all.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/sweetalert2.min.css">

  <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ env('APP_URL') }}/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>OneFood</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ env('APP_URL') }}/home" class="active">Beranda</a></li>
          <li><a href="{{ env('APP_URL') }}/about">Tentang</a></li>
          <li><a href="{{ env('APP_URL') }}/foods">Kulineran</a></li>
          <li><a href="{{ env('APP_URL') }}/restaurants">Waroenk</a></li>
          <li><a href="#contact">Hubungi</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  @yield('content')

  {{-- <script>

    var timeleft = 0;
      var downloadTimer = setInterval(function(){

        document.querySelector("main#main").style.display = "none";
        document.querySelector("header").style.display = "none";
        document.querySelector("footer").style.display = "none";

        timeleft++;
        
        if(timeleft <= 100) {

          document.getElementById("timeOut").setAttribute("style", "width: " + timeleft + "%;");
          document.getElementById("timeOut").setAttribute("aria-valuenow", timeleft);

        } else {

          document.querySelector("main#main").style.display = "inline";
          document.querySelector("header").style.display = "inline";
          document.querySelector("footer").style.display = "inline";
          document.querySelector("div.progress").style.display = "none";
          
        }

      }, 50);

  </script> --}}

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{ env('APP_URL') }}/" class="logo d-flex align-items-center">
            <span>OneFood</span>
          </a>
          <p>Pelanggan puas, kami senang!</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan Lain</h4>
          <ul>
            <li><a href="{{ env('APP_URL') }}//home">Beranda</a></li>
            <li><a href="{{ env('APP_URL') }}//about">Tentang Kami</a></li>
            <li><a href="{{ env('APP_URL') }}//foods">Kulineran</a></li>
            <li><a href="{{ env('APP_URL') }}//terms-of-service">Persyaratan Layanan</a></li>
            <li><a href="{{ env('APP_URL') }}//privacy-policy">Kebijakan Privasi</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" id="contact">
          <h4>Hubungi Kami</h4>
          <p>
            <a href="https://smkn65-jkt.sch.id/">SMK Negeri 65 Jakarta</a><br>
            XII Rekayasa Perangkat Lunak <br><br>
            <strong>Phone :</strong> 081388868788<br>
            <strong>Email :</strong> onefood65@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>OneFood</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ env('APP_URL') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/aos/aos.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ env('APP_URL') }}/assets/js/main.js"></script>

  @if (session('status'))

    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Berhasil, silahkan login',
        showConfirmButton: false,
        timer: 2000
      });
    </script>

  @endif

</body>

</html>