<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OneFood | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/mdb.min.css" />

  <!-- Favicons -->
  <link href="{{ env('APP_URL') }}/assets/img/OneFoodLightImproove.ico" rel="icon">
  <link href="assets/img/OneFoodTransparent.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <!-- Vendor CSS Files -->
  <link href="{{ env('APP_URL') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ env('APP_URL') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}/assets/slick/slick/slick.css"/>

  <!-- Template Main CSS File -->
  <link href="{{ env('APP_URL') }}/assets/css/main.css" rel="stylesheet">

  {{-- JavaScript --}}
  <script src="{{ env('APP_URL') }}/jQuery/jquery-3.6.0.min.js"></script>
  <script src="{{ env('APP_URL') }}/jQuery/jquery.form.min.js"></script>

  {{-- Sweet Alert --}}
  <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.all.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/sweetalert2.min.css">

</head>

<body>

  @if (session('loginBerhasil'))

    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Masuk sebagai {{ auth()->user()->username }}',
        showConfirmButton: true,
        timer: 2500
      });
    </script>

  @elseif(session('berhasilDaftar'))

    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Selamat bergabung, {{ auth()->user()->username }}',
        showConfirmButton: false,
        timer: 3000
      });
    </script>

  @endif

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      
      <a href="{{ env('APP_URL') }}/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/OneFoodLightImproove.png" alt="">
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

          @auth

          <li><a class="get-a-quote btn btn-primary" href="/dashboard">{{ auth()->user()->username }}</a></li>
          
          @else

          <li><a class="get-a-quote" href="/register">Daftar</a></li>

          @endauth

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
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
            <li><a href="/home">Beranda</a></li>
            <li><a href="/about">Tentang Kami</a></li>
            <li><a href="/foods">Kulineran</a></li>
            <li><a href="/terms-of-service">Persyaratan Layanan</a></li>
            <li><a href="/privacy-policy">Kebijakan Privasi</a></li>
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
            <strong>Telepon :</strong> 081388868788<br>
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

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ env('APP_URL') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/aos/aos.js"></script>
  {{-- <script src="{{ env('APP_URL') }}/assets/vendor/php-email-form/validate.js"></script> --}}
  <script type="text/javascript" src="{{ env('APP_URL') }}/assets/slick/slick/slick.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ env('APP_URL') }}/assets/js/main.js"></script>

  <!-- JS bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>