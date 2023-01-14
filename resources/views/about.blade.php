@extends('layouts.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About</h2>
              <p>OneFood merupakan sebuah web yang berdiri dibidang jasa delivery. Saat ini, OneFood telah tersedia di berbagai kota di Indonesia. </p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
              Onefood delivery merupakan jasa antar makanan yang dilakukan oleh situs layanan antar online, baik melalui aplikasi jasa antar
            </p>
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
                  <h5>Fast delivery</h5>
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

    <!-- Card -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card kartu1 p-2 h-100 rounded-4" style="background-color: #0E1D34; color: white;">
                <div class="card-body">
                  <h5 class="card-title">Restoran pilihan</h5>
                  <p class="card-text">Jelajahi dunia gastronomi melalui beragam restoran pilihan berkualitas dari kami</p>
                  <img src="assets/img/restoran.png" class="card-img-top mt-5" alt="...">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card kartu2 p-2 h-100 rounded-4" style="background-color: #0E1D34; color: white;">
                <div class="card-body">
                  <h5 class="card-title">Diantar dengan Cepat</h5>
                  <p class="card-text">Tidak perlu khawatir kelaparan karena makanan kami antar dengan cepat</p>
                </div>
                <img src="assets/img/kurir.png" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card kartu3 p-2 h-100 rounded-4" style="background-color: #0E1D34; color: white;">
                <div class="card-body">
                  <h5 class="card-title">Layanan Terpercaya</h5>
                  <p class="card-text">Kualitas makanan yang diantar tetap terjaga berkat tas thermal yang didesain khusus</p>
                </div>
                <img src="assets/img/layanan-terpecaya (1).png" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Team</span>
          <h2>Our Team</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-8 col-md-8 d-flex mx-auto">
            <div class="member orang1 rounded-4" style="width: 100%;">
              <img src="assets/img/team/bos.png " class="img-fluid" alt="">
              <div class="member-content">
                <h4>Muhammad Irza Arivin Ngibadi</h4>
                <span>Scrum Master<br>Back-End Web Developer</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://wa.me/6281388868788" target="_blank"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://instagram.com/@coders_kocar_kacir" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://twitter.com/irzaarivin" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://id.linkedin.com/in/irza-arivin" target="_blank"><i class="bi bi-linkedin"></i></a>
                  <a href="mailto:irzaarivin2005@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>

        <div class="row d-flex justify-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member rounded-4">
              <img src="assets/img/team/team1.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Anggia Cahyati</h4>
                <span>Content Writer</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://wa.me/6281280278757"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://instagram.com/@bae_anggi"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:anggiacahyati07@gmail.com"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member rounded-4">
              <img src="assets/img/team/team2.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Fadilla Rahma AZ-Zahra</h4>
                <span>Graphics Designer</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://wa.me/6281289726050"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://instagram.com/@fadilla.rahmaa"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:fadilladila551@gmail.com"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member rounded-4">
              <img src="assets/img/team/team3.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Apra Hazima Sunjaya</h4>
                <span>Graphics Designer</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://wa.me/6285886436730"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://instagram.com/@eipiarei"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:afrahzmh3008@gmail.com"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member rounded-4">
              <img src="assets/img/team/team4.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Ilhan Fauzan Is</h4>
                <span>Front-End Web Developer</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://wa.me/6289609203200"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.instagram.com/@ilhnfzn"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:baimjunior27@gmail.com"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex mx-auto">
            <div class="member rounded-4">
              <img src="assets/img/team/team5.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Muhammad Afrizal</h4>
                <span>Administrator</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://wa.me/6281282404451"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.instagram.com/@mhmdafrzaal"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:muhamadafrizal464@gmail.com"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member rounded-4">
              <img src="assets/img/team/team6.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Muhammad Fadli</h4>
                <span>Berdo'a dan Bertawaqal</span>
                <p>
                </p>
                <div class="social">
                  <a href="https://WA.me/08811208124"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://instagram.com/cikexax655"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:Mf6975569@gmail.com"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Raihan</h3>
                <h4>Raihan Hutabarat</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  OneFood keren banget pengirimannya the best, cepet, gabikin nunggu lama buat yang lagi kelaparan.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Amal</h3>
                <h4>Amalia Latifah</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Sistem pembayarannya disediain banyak pilihan, keren banget jadi ga perlu kebingungan lagi.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Rangga</h3>
                <h4>Rangga Mahatidana</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Buat anak kos mantep banget ini OneFood karna banyak potongan harga, sangat membantu sekali.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Amel</h3>
                <h4>Camelia Dianita</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Menu yang tersedia di OneFood enak-enak, apalagi menu bestseller di setiap tokonya, MANTAP.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Zahwa</h3>
                <h4>Zahwa Fauzian</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Suka banget order makanan pake Onefood. Emang paling keren yang nyiptain OneFood, bintang 5.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> 

  </main><!-- End #main -->

@endsection