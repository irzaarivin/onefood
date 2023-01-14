@extends('layouts.header-footer')

@section('content')

  {{-- <div class="progress" style="position: absolute; z-index: 1000000; top: 45%; width: 60%; text-align: center; margin: 0 auto;">
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
              <p>Merasa lapar? Haus? Daftar sekarang agar bisa menikmati berbagai jenis kuliner yang bermitra dengan OneFood. Kami membutuhkan beberapa data diri anda agar layanan kami dapat bekerja dengan maksimal. Merasa tidak aman? tenang saja... OneFood sangat menghargai <a href="/privacy-policy">kebijakan privasi</a> anda. Kami tidak akan memberikan data apapun kepada pihak lain.</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Register Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-7 shadow-lg rounded-5" style="margin: 0 auto;">
            <form action="#" method="post" class="php-email-form">
              @csrf
              <div class="row gy-4">
                <div class="col-lg-12">
                  <h2>{{ $title }}</h2>
                </div>

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                </div>
                @error('name')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" maxlength="10" required>
                </div>
                @error('username')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                @error('email')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12">
                  <input type="number" class="form-control" name="phone" placeholder="Telepon" value="{{ old('phone') }}" required>
                </div>
                @error('phone')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="address" placeholder="Alamat Lengkap" value="{{ old('address') }}" required>
                </div>
                @error('address')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                @error('password')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>
                @error('confirm-password')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> {{ $message }}</p>
                </div>
                @enderror

                <hr>

                <div class="col-md-12" style="display: flex; align-items: center;">
                  <input class="form-check-input cursor-pointer" name="setuju" type="checkbox" value="setuju" id="setuju" style="margin: 0 5px 0 0;" required>
                  <p style="margin: 0;">Saya telah membaca & menyetujui <a href="http://onefood.test/terms-of-service" target="_blank">Persyaratan Layanan</a> & <a href="http://onefood.test/privacy-policy" target="_blank">Kebijakan Privasi</a> yang berlaku.</p>
                </div>
                @error('setuju')
                <div class="col-md-12">
                  <p><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> Anda harus menyetujui <a href="http://onefood.test/terms-of-service" target="_blank">Persyaratan Layanan</a> & <a href="http://onefood.test/privacy-policy" target="_blank">Kebijakan Privasi</a> kami.</p>
                </div>
                @enderror

                <div class="col-md-12 text-center mt-5">
                  <button type="submit">Daftar</button>
                </div>

                <p class="text-center">Sudah memiliki akun? <a href="http://onefood.test/login">Masuk</a></p>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

@endsection