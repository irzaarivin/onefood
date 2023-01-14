@extends('layouts.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../assets/img/ayam.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{ $title }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Login Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(../img/thumbs/{{ $detail->thumb }});"></div>

          <div class="col-lg-7">
            <div class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-12">
                  <h2>{{ $title }}</h2>
                  <br><br>
                  <p><b>Toko :</b> {{ $detail->toko }}</p>
                  <p><b>Lokasi :</b> {{ $detail->lokasi }}</p>
                  <p><b>Harga :</b> {{ $detail->harga }}</p>
                  <p><b>kategori :</b> {{ ucwords($detail->kategori) }}</p>
                </div>

                <section id="call-to-action" class="call-to-action" style="background-image: none;">
                  <div class="container" data-aos="zoom-out">
            
                    <div class="row justify-content-start">
                      <div class="col-lg-8 text-left">
                        <a class="btn btn-primary rounded-3 fs-4" href="{{ env('APP_URL') }}/checkout?name={{ $detail->slug }}">Pesan</a>

                        <form action="{{ env('APP_URL') }}/add-cart" method="POST" id="formCart">
                          @csrf
                          <input type="hidden" name="id_kuliner" value="{{ $detail->id }}">
                          <input type="hidden" name="slug" value="{{ $detail->slug }}">
                          <input type="hidden" name="nama" value="{{ $title }}">
                          <input type="hidden" name="id_owner" value="{{ auth()->user()->id }}">
                          <input type="hidden" name="toko" value="{{ $detail->toko }}">
                          <input type="hidden" name="lokasi" value="{{ $detail->lokasi }}">
                          <input type="hidden" name="thumb" value="{{ $detail->thumb }}">
                          <input type="hidden" name="harga" value="{{ $detail->harga }}">
                          <button class="btn btn-secondary" type="submit" name="submit"><i class="bi bi-cart-plus fs-4"></i></button>
                        </form>

                        {{-- <script>
                          $(document).ready(function(){
                            $('#formCart').submit(function(e){
                              e.preventDefault;
                              $.ajax({
                                url: '{{ env("APP_URL") }}/add-cart',
                                type: 'post',
                                data: $(this).serialize(),
                                success: function(data){
                                  Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Berhasil Ditambahkan',
                                    showConfirmButton: false,
                                    timer: 2000
                                  });
                                }
                              });
                            });
                          });
                        </script> --}}

                        <script>
                          $(document).ready(function () {
                            $('#formCart').ajaxForm({
                              complete: function (xhr) {
                                Swal.fire({
                                  position: 'center',
                                  icon: 'success',
                                  title: 'Berhasil Ditambahkan',
                                  showConfirmButton: false,
                                  timer: 2000
                                });
                              }
                            });
                          });
                        </script>

                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Get a Quote Section -->


          <!-- List -->
          <section id="service1" class="services pt-0" id="services">
            <div class="container" data-aos="fade-up">
      
              <div class="section-header">
                <h2>Makanan Lainnya</h2>
              </div>
      
              <div class="row gy-4">

                @foreach($dataMakanan as $food)

                <div class="col-lg-4 col-md-6 rounded" data-aos="fade-up" data-aos-delay="100">
                  <div class="card rounded">
                    <div class="card-img rounded-top">
                      <img src="../img/thumbs/{{ $food->thumb }}" alt="{{ $food->nama }}" class="img-fluid rounded-top">
                    </div>
                    <h3><a href="{{ $food->slug }}" class="stretched-link">{{ $food->nama }}</a></h3>
                    <h3><a href="{{ $food->slug }}" class="stretched-link">Rp {{ $food->harga }}</a></h3>
                    <p><i class="bi bi-geo-alt-fill"></i> {{ $food->toko }}, {{ $food->lokasi }}<br></p>
                  </div>
                </div><!-- End Card Item -->

                @endforeach
      
              </div>
      
            </div>
          </section>
            <!-- End List -->
      
    <!-- /Suggestion Food -->

    <!-- Waroenk -->
              <!-- List -->
              <section id="service2" class="services pt-0" id="services">
                <div class="container" data-aos="fade-up">
          
                  <div class="section-header">
                    <h2>Waroenk Lainnya</h2>
          
                  </div>
          
                  <div class="row gy-4">

                    @foreach($dataToko as $restaurants)

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="card">
                        <div class="card-img">
                          <img src="../img/thumbs/rest.jpg" alt="{{ $restaurants->nama }}" class="img-fluid">
                        </div>
                        <h3><a href="http://onefood.test/restaurants/{{ $restaurants->slug }}" class="stretched-link">{{ $restaurants->nama }}</a></h3>
                        <p><i class="bi bi-geo-alt-fill"></i> {{ $restaurants->lokasi }}</p>
                        <p>{{ $restaurants->deskripsi }}</p>
                      </div>
                    </div><!-- End Card Item -->

                    @endforeach
          
                </div>
              </section>
                <!-- End List -->
    
    <!-- /Waroenk -->
  </main><!-- End #main -->

@endsection