@extends('layouts.header-footer')

@section('content')

  {{-- <div class="progress">
    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="timeOut"></div>
  </div> --}}

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/ayam.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{ $title }}</h2>
              <p>Pernah bergabung dengan OneFood sebelumnya? Kami perlu memastikan bahwa anda benar-benar telah mendaftar sebelumnya. Jangan bosan untuk terus menggunakan layanan kami. Segera hubungi kami jika anda mendapatkan sebuah kesalahan.</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Login Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0 shadow-lg">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/login.jpeg);"></div>

          <div class="col-lg-7">
            <form action="{{ route('login') }}" method="post" class="php-email-form">
              @csrf
              <div class="row gy-4">
                <div class="col-lg-12">
                  <h2>{{ $title }}</h2>
                </div>

                <div class="col-md-12">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                </div>

                <div class="col-md-12 ">
                  <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" placeholder="Password" required>
                </div>
                @error('email')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> Akun Anda mungkin tidak terdaftar, atau kata sandinya mungkin salah</p>
                </div>
                @enderror

                <div class="col-md-12" style="display: flex; align-items: center;">
                  <input class="form-check-input cursor-pointer" name="remember" type="checkbox" value="true" id="remember" style="margin: 0 5px 0 0;">
                  <p style="margin: 0;">Tetap Masuk</p>
                </div>

                <div class="col-md-12 text-center mt-5">
                  <button type="submit">Masuk</button>
                </div>

                <p class="text-center">Belum memiliki akun? <a href="http://onefood.test/register">Daftar</a> sekarang</p>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

@endsection