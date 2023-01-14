@extends('layouts.main')

@section('content')

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up" id="home">Pesan & Antar Makanan Online</h2>
          <p data-aos="fade-up" data-aos-delay="100">Nikmati santapannya, cepat diantarnya!</p>

          <form action="http://onefood.test/foods" method="GET" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" name="search" class="form-control" placeholder="Mau makan apa hari ini?">
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>

          {{-- <script>

            $(document).ready(function(){
              $('button#cariMakanan').click(function(){
                var cari = document.getElementById("#temukanMakanan").value;
                document.location.href = 'http://onefood.test/search/' + cari;
              });
            });

          </script> --}}

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $klien }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Klien</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $kuliner }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Kuliner</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p>Dukungan</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $mitra }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Mitra</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    @auth

    <div class="slider-promo rounded-4">
      <img src="assets/img/promo-makanan/harga-terjangkau.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-makanan/promo-grand-opening.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-makanan/promo-hari-kemerdekaan.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-makanan/promo-semua-merchant.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-makanan/super-boba.png" class="d-block img-fluid m-5 rounded-4" alt="...">
    </div>

    @else

    <div class="slider-promo rounded-4">
      <img src="assets/img/promo-aplikasi/jumat-borongan-cashback.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-aplikasi/onepaylater.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-aplikasi/pekan-gajian-challenge.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-aplikasi/promo-cashback-onefood.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-aplikasi/promo-pengguna-baru-onefood.png" class="d-block img-fluid m-5 rounded-4" alt="...">
      <img src="assets/img/promo-aplikasi/promo-resto-pilihan.png" class="d-block img-fluid m-5 rounded-4" alt="...">
    </div>

    @endauth

    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider-promo').slick({
          infinite: true,
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2500,
          dots: false,
          arrows: false,
          pauseOnHover: false,
          swipeToSlide: true,
        });
      });
    </script>

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="why" data-aos="fade-up"><h1 class="fw-bold text-center">Kenapa harus OneFood?</h1></div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
              <h4 class="title">Restoran pilihan</h4>
              <p class="description">Jelajahi dunia gastronomi melalui beragam restoran pilihan berkualitas dari kami</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
            <div>
              <h4 class="title">Diantar dengan Cepat</h4>
              <p class="description">Tidak perlu khawatir kelaparan karena makanan kami antar dengan cepat</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">Layanan Terpercaya</h4>
              <p class="description">Kualitas makanan yang diantar tetap terjaga berkat tas thermal yang didesain khusus</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0" id="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Tentang OneFood</h3>
            <p>
              Onefood delivery merupakan jasa antar makanan yang dilakukan oleh situs layanan antar online, baik melalui aplikasi jasa antar</p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Rekomendasi berdasarkan kategori</h5>
                  <p>Anda akan ditunjukkan dengan berbagai rekomendasi makanan berdasarkan kategori, mulai dari makanan dengan harga promo, merchant terdekat, best seller, combo deals, grabkitchen, fast food, dan masih banyak lagi.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Pengiriman Cepat</h5>
                  <p>Jika tidak mau menunggu lama untuk kedatangan makanan yang dipesan, Anda dapat memesan makanan dari merchant yang tergolong dalam fitur satu ini. Biasanya durasi yang dibutuhkan maksimal 30 menit dari setelah makanan dipesan.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Rekomendasi makanan dari area terdekat</h5>
                  <p>Layanan OneFood mampu membantu Anda mencari rekomendasi makanan terdekat dengan area Anda. Fitur ini pun akan memberikan informasi berapa jarak antara lokasi merchant dengan keberadaan Anda.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0" id="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Rekomendasi</span>
          <h2>Rekomendasi</h2>

        </div>

        <div class="row gy-4">

          @foreach($data as $food)

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="img/thumbs/{{ $food->thumb }}" alt="{{ $food->nama }}" class="img-fluid">
              </div>
              <h3><a href="foods/{{ $food->slug }}" class="stretched-link">{{ $food->nama }}</a></h3>
              <h3><a href="foods/{{ $food->slug }}" class="stretched-link">Rp {{ $food->harga }}</a></h3>
              <p><i class="bi bi-geo-alt-fill"></i> {{ $food->toko }}, {{ $food->lokasi }}<br></p>
            </div>
          </div><!-- End Card Item -->

          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    @auth

    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Siap Memanjakan Perut Anda?</h3>
            <p>TENTU SAJA! Ayo pesan makananmu SEKARANG! Jangan menunggu dompet tebal, langsung sikat saja semuanya...</p>
            <a class="cta-btn" href="/foods">Ayo</a>
          </div>
        </div>

      </div>
    </section>

    @else

    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Siap Memanjakan Perut Anda?</h3>
            <p>TENTU SAJA! Ayo daftar sekarang dan nikmatilah berbagai jenis kuliner bintang 5 di Jakarta, dan klaim promo pertama anda segera!!!</p>
            <a class="cta-btn" href="/register">Daftar</a>
          </div>
        </div>

      </div>
    </section>

    @endauth
    <!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="assets/img/gambar/kurir.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Paling cepat</h3>
            <p class="">
              Layanan antar makanan yang tercepat dari semua layanan yang ada.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Pengiriman cepat</li>
              <li><i class="bi bi-check"></i> Kurir ramah</li>
              <li><i class="bi bi-check"></i> Packaging aman dan rapih</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/gambar/palingmudah.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Paling mudah</h3>
            <p class="">
              Memesan makanan sekarang cukup hanya dengan mengklik pada komputer atau ponsel.  Layanan yang cepat serta berhadiah. Aneka jenis makanan – Mulai dari makanan lokal hingga restoran favorit, kami memiliki aneka jenis makanan untuk memuaskan rasa lapar Anda.
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/gambar/makanan.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Aneka jenis makanan</h3>
            <p>Mulai dari makanan lokal hingga restoran favorit, kami memiliki aneka jenis makanan untuk memuaskan rasa lapar Anda.</p>
            <ul>
              <li><i class="bi bi-check"></i> Makanan higienis</li>
              <li><i class="bi bi-check"></i> Beragam aneka makanan</li>
              <li><i class="bi bi-check"></i> foodUp</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/gambar/pembayran.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Kemudahan pembayaran</h3>
            <p class="">
              Anda dapat mudah membayar makanan atau pesanan anda dengan menggunakan
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Tunai</li>
              <li><i class="bi bi-check"></i> OnePay</li>
              <li><i class="bi bi-check"></i> Dana</li>
              <li><i class="bi bi-check"></i> OVO</li>
              <li><i class="bi bi-check"></i> KJP</li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2>Pertanyaan yang Sering Diajukan</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apakah OneFood termasuk marketplace untuk pengantaran makanan?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    OneFood sangat mengapresiasi kekayaan kuliner di Jakarta. OneFood hanya menjalin kerjasama dengan restoran terbaik, yang berarti petualangan gastonomi tanpa resiko dan tidak ada lagi kalori yang terbuang sia-sia. Setiap pesanan akan memuaskan selera para pecinta kuliner.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Kapan saya dapat memesan makanan melalui layanan OneFood?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Kami beroperasi setiap hari mulai pukul 10:00 – 23:59 (pesanan terakhir).
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Di area mana saja OneFood beroperasi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    OneFood telah beroperasi aktif di seluruh area Jabodetabek, Surabaya, Bandung, Bali, Makassar, Medan, Palembang, Semarang, Yogyakarta, Malang, Solo, Manado, Batam, Bandar Lampung, Cirebon, Samarinda, Pekanbaru, Balikpapan, Padang, Pontianak, Banjarmasin, Jambi, Sukabumi, dan Cimahi.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bagaimana saya membayar?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Pembayaran tunai tersedia di semua kota yang beroperasi.
                    Pembayaran melalui Ovo saat ini tersedia di Jabodetabek, Bandung, Surabaya, Medan, Makassar, Yogyakarta, Semarang, Bali, Lampung dan Palembang.
                    Saat ini kami sedang memperluas penggunaan non-tunai di kota-kota lainnya.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Berapa biaya pengantaran?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nikmati hematnya tarif pengantaran OneFood mulai dari Rp 3.000. Perubahan tarif pengantaran maupun promo restoran akan selalu diinformasikan kepada para pengguna.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

@endsection