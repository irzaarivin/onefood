<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.all.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/sweetalert2.min.css">

    <style>
      html,
      body {
        height: 100%;
      }

      body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 500px;
        padding: 15px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">

      @if (session('status'))

        <script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Berhasil terkirim',
            showConfirmButton: false,
            timer: 2000
          });
        </script>
        <div class="mb-4 font-medium text-sm text-green-600">
            Kami telah mengirimi anda link untuk mereset password, silahkan cek inbox email anda.
        </div>

      @else

        <form action="" method="POST">
          <h1 class="h3 mb-3 fw-normal">Lupa Password</h1>

          @csrf

          <div class="mb-3">
            <input name="email" class="form-control form-control-lg" type="email" placeholder="Email...">
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Kirim Link</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>

      @endif

    </main>
  </body>
</html>
