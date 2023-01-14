@extends('layouts.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/ayam.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{ $title }}</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- List -->
    <section id="service" class="services pt-0" id="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5">
          <span>{{ $title }}</span>
          <h2>Ayo {{ $title }}</h2>
        </div>

        <form action="http://onefood.test/foods" method="GET">
          <div class="input-group input-group-lg mb-5 mt-3">
            <input type="text" name="search" class="form-control" placeholder="Cari Makanan..." value="{{ request('search') }}" autofocus>
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </form>

        @if($data->count())

        <div class="row gy-4 justify-content-center">

          @foreach($data as $food)

          <div class="col-lg-4 col-md-6 rounded" data-aos="fade-up" data-aos-delay="100">
            <div class="card rounded">
              <div class="card-img  rounded-top">
                <img src="img/thumbs/{{ $food->thumb }}" alt="{{ $food->nama }}" class="img-fluid rounded-top">
              </div>
              <h3><a href="foods/{{ $food->slug }}" class="stretched-link">{{ $food->nama }}</a></h3>
              <h3><a href="foods/{{ $food->slug }}" class="stretched-link">Rp {{ $food->harga }}</a></h3>
              <p><i class="bi bi-geo-alt-fill"></i> {{ $food->toko }}, {{ $food->lokasi }}<br></p>
            </div>
          </div><!-- End Card Item -->

          @endforeach

        </div>

        @else

        <section id="service" class="services pt-0" id="services">
          <h1 class="text-center" style="margin: 60px auto 20px auto;">Yah... {{ request('search') }}nya lagi ngga ada...</h1>
        </section>

        @endif

      </div>
    </section>
    <!-- End List -->

@endsection