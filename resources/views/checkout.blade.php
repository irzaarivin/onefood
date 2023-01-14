<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Checkout</title>
    <!-- MDB icon -->
    <link href="{{ env('APP_URL') }}/assets/img/OneFoodLightImproove.ico" rel="icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/mdb.min.css" />

    <style>
    	@media print {

    		#cetakPdf {
    			display: block;
    		}

    		#ilank, #ilankJuga, #ilankJugaGan {
    			display: none;
    		}

    	}
    </style>		

  </head>
  <body>
    <!-- Start your project here-->

  <!--Main layout-->
  <main class="mt-2 pt-2">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 id="ilankJugaGan" class="my-5 h2 text-center">Halaman Checkout</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div id="ilank" class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" action="checkout" method="POST">

            	@csrf

            	<div class="row mb-3 d-flex justify-between">
	            	
	            	<div class="col-lg-6" id="isiBarcode">
	            		{!! DNS1D::getBarcodeHTML('36564563536', 'CODABAR') !!}
	            	</div>

            		<div class="col-lg-6 text-right">
            			<h3 id="headingNumber" class="text-right"></h3>
	            		<input type="hidden" id="transactionNumber" class="form-control" value="" name="kode_transaksi" required disabled>
            		</div>

            	</div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ auth()->user()->name }}" required disabled>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form input-group pl-0 mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control py-0" name="username" placeholder="Username" aria-describedby="basic-addon1" value="{{ auth()->user()->username }}" required disabled>
              </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" required disabled>
              </div>

              <!--address-->
              <div class="md-form mb-2">
                <input type="text" id="address" name="alamat" class="form-control" placeholder="Alamat Lengkap Utama" value="{{ auth()->user()->address }}" required disabled>
              </div>

              <!--address-2-->
              <div class="md-form mb-3">
                <input type="text" id="address2" name="alamatCadangan" class="form-control" placeholder="Alamat Lengkap Kedua (Opsional)">
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <input type="text" id="country" name="negara" class="form-control" placeholder="Negara" value="Indonesia" disabled>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <select class="custom-select d-block w-100 form-select" name="provinsi" id="state" required>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="DI Yogyakarta">DI Yogyakarta</option>
                    <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                  </select>
                  <div class="invalid-feedback">
                    Pilih provinsi yang tersedia.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <input type="text" class="form-control" name="kodePos" id="zip" placeholder="Kode Pos" required>
                  <div class="invalid-feedback">
                    Kode Pos Dibutuhkan.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="d-block my-4">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="kredit" checked required>
                  <label class="custom-control-label" for="credit">Kartu Kredit</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="debit" required>
                  <label class="custom-control-label" for="debit">Kartu Debit</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="paypal" required>
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="mandiri" name="paymentMethod" type="radio" class="custom-control-input" value="mandiri" required>
                  <label class="custom-control-label" for="paypal">Bank Mandiri</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="bsi" name="paymentMethod" type="radio" class="custom-control-input" value="bsi" required>
                  <label class="custom-control-label" for="paypal">Bank BSI</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="bri" name="paymentMethod" type="radio" class="custom-control-input" value="bri" required>
                  <label class="custom-control-label" for="paypal">Bank BRI</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="bca" name="paymentMethod" type="radio" class="custom-control-input" value="bca" required>
                  <label class="custom-control-label" for="paypal">Bank BCA</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="bni" name="paymentMethod" type="radio" class="custom-control-input" value="bni" required>
                  <label class="custom-control-label" for="paypal">Bank BNI</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="btn" name="paymentMethod" type="radio" class="custom-control-input" value="btn" required>
                  <label class="custom-control-label" for="paypal">Bank BTN</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Nama Pada Kartu</label>
                  <input type="text" name="nama_kartu" class="form-control" id="cc-name" placeholder="" required>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Nomor Kartu</label>
                  <input type="text" name="nomor_kartu" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" name="expiration" class="form-control" id="cc-expiration" placeholder="Kartu Kredit atau Debit">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-cvv">CVV</label>
                  <input type="text" class="form-control" name="cvv" id="cc-cvv" placeholder="Kartu Kredit atau Debit">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Konfirmasi Pembayaran</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div id="cetakPdf" class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Keranjangmu</span>
            <span id="noTrsc" class="badge badge-secondary badge-pill"></span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">

          	<?php $total = 0; ?>

          	@foreach($cart as $data)

	        		<li class="list-group-item d-flex justify-content-between lh-condensed">
	              <div>
	                <h6 class="my-0">{{ $data->nama }}</h6>
	                <small class="text-muted">{{ $data->toko }}</small>
	              </div>
	              <span class="text-muted">RP {{ $data->harga }}</span>
	            </li>

	            <?php $total += $data->harga; ?>

            @endforeach

          </ul>

          <ul class="list-group mb-3 z-depth-1">
          	<li class="list-group-item d-flex justify-content-between">
              <span>Total (IDR)</span>
              <strong>Rp {{ $total }}</strong>
            </li>
          </ul>
          <!-- Cart -->

          <!-- Promo code -->
          {{-- <form id="ilankJuga" class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Kode Promo" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Gunakan</button>
            </div>
          </form> --}}
          <!-- Promo code -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ env('APP_URL') }}/assets/js/mdb.min.js"></script>

    <script>
    	var nilaiRandom = Math.random();
    	nilaiRandom = nilaiRandom.toString();
    	nilaiRandom = nilaiRandom.split(".");
    	nilaiRandom = nilaiRandom.pop();
    	nilaiRandom = nilaiRandom.substr(1, 15);

    	document.getElementById("noTrsc").innerHTML = "#" + nilaiRandom;
    	document.getElementById("transactionNumber").value = nilaiRandom;
    	document.getElementById("headingNumber").innerHTML = "#" + nilaiRandom;
    </script>

  </body>
</html>