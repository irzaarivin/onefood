<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card py-4">
                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success text-center">Link verifikasi yang baru telah kami kirim.</div>
                        @endif
                        <div class="text-center mb-5">
                            <h3>Verifikasi Alamat Email</h3>
                            <p>Kamu harus memverifikasi alamat email kamu terlebih dahulu untuk mengakses halaman ini.</p>
                        </div>
                        <h3 class="text-center" id="timeOut"></h3>
                        <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                            @csrf
                            <button type="submit" class="btn btn-primary" id="tombol">Kirim Ulang Link Verifikasi</button>
                        </form>
                    </div>
                    <p class="mt-3 mb-0 text-center">
                        <small>Ada masalah dengan proses verifikasi atau salah memasukkan email? Silahkan <a href="/login">mendaftar dengan alamat email lain.</a></small></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        document.getElementById('timeOut').style.display = "none";

    </script>

    @if (session('status') == 'verification-link-sent')

        <script>
            
            var batas = 60;
            document.getElementById('timeOut').style.display = "block";
            document.getElementById('tombol').setAttribute('class', 'btn btn-danger disabled');
            document.getElementById('timeOut').textContent = batas;

            var mundur = setInterval(function(){

                batas--;
                
                if(batas <= 0) {
                    document.getElementById('timeOut').style.display = "none";
                    document.getElementById('tombol').setAttribute('class', 'btn btn-primary');
                    return clearInterval(mundur);
                } else {
                    document.getElementById('timeOut').textContent = batas;
                    document.getElementById('tombol').setAttribute('class', 'btn btn-danger disabled');
                }
                
            }, 1000);

        </script>

    @endif

        
    
</body>
</html>
    