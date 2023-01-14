<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Onefood</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link href="{{ env('APP_URL') }}/assets/img/OneFoodLightImproove.ico" rel="icon">
    <link href="assets/img/OneFoodTransparent.png" rel="apple-touch-icon">
    <!-- Custom CSS -->
    <link href="dashboard/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="dashboard/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dashboard/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}/assets/slick/slick/slick.css"/>

    <script src="{{ env('APP_URL') }}/jQuery/jquery-3.6.0.min.js"></script>
    <script src="{{ env('APP_URL') }}/jQuery/jquery.form.min.js"></script>

    <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.all.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/sweetalert2.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ env('APP_URL') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="dashboard/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="dashboard/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <b>OneFood</b>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="dashboard/assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                            </ul>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard/transaction-history/order-history.html" aria-expanded="false"><i class="mdi mdi-clock"></i><span
                                    class="hide-menu">Riwayat</span></a></li> -->
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="{{ env('APP_URL') }}" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard</h1> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="container-fluid col-md-6">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ringkasan Mingguan</h4>
                                <h6 class="card-subtitle">Rata-rata Penawaran</h6>
                                <div class="mt-5 pb-3 d-flex align-items-center">
                                    <span class="btn btn-primary btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-cart-outline fs-4" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Top Sales</h5>
                                        <span class="text-muted fs-6">Super Boba</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+68%</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-warning btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-star-circle fs-4" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Best Seller</h5>
                                        <span class="text-muted fs-6">TakoMen</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+68%</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-success btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-comment-multiple-outline text-white fs-4" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Ulasan Terbanyak</h5>
                                        <span class="text-muted fs-6">BurCang</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+68%</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-info btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-diamond fs-4 text-white" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Termurah</h5>
                                        <span class="text-muted fs-6">Nasi Padang Barokah</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="register.png" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>
            </div>
                  

                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">STATISTIK TOKO</h4>
                                        <h5 class="card-subtitle"></h5>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Nama Toko</th>
                                                <th class="border-top-0">Pemilik</th>
                                                <th class="border-top-0">Alamat</th>
                                                <th class="border-top-0">Menu bestseller</th>
                                                <th class="border-top-0">Harga</th>
                                                <th class="border-top-0">Pendapatan/hari</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-info text-white">NP</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Nasi Padang Barokah</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Endang Handayani</td>
                                                <td>Jl.Paus No.22</td>
                                                <td>
                                                    <label class="badge bg-danger">Nasi Padang Rendang</label>
                                                </td>
                                                <td>20k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.840.000</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-orange text-white">NB</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Nasi Bebek Madura</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Mami Andini</td>
                                                <td>Jl.Kesadaran, Blok G</td>
                                                <td>
                                                    <label class="badge bg-info">Nasi Bebek</label>
                                                </td>
                                                <td>23k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.560.000</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-success text-white">AJ</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Aneka Jus Buah</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Muthia Putri</td>
                                                <td>Jl.Mawar, Blok C</td>
                                                <td>
                                                    <label class="badge bg-success">Jus Mangga</label>
                                                </td>
                                                <td>10k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.280.000</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-purple text-white">TM</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">TokoMen</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Adenami Angel</td>
                                                <td>Jl.Elang No.1</td>
                                                <td>
                                                    <label class="badge bg-purple">Mentai</label>
                                                </td>
                                                <td>35k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.1.500.000</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-info text-white">SB</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Super Boba</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Rangga Hermansyah</td>
                                                <td>Jl. in Aja Dulu</td>
                                                <td>
                                                    <label class="badge bg-danger">Born Sugar Fresh Milk</label>
                                                </td>
                                                <td>25k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.2.200.000</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-info text-white">BM</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">BakMie</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Sabilah Rahma</td>
                                                <td>Jl.Otista, No.7</td>
                                                <td>
                                                    <label class="badge bg-danger">Bakso</label>
                                                </td>
                                                <td>15k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.2.010.000</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-info text-white">BC</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Burcang</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Hajima Yati</td>
                                                <td>Jl.Merpati</td>
                                                <td>
                                                    <label class="badge bg-danger">Bubur Kacang Ijo</label>
                                                </td>
                                                <td>10k</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp.280.000</h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex" style="width: 100%;">
                                    <div class="d-flex justify-content-between" style="width: 100%; align-items: center; align-content: center;">
                                        <h4 class="card-title">Keranjang Saya</h4>
                                        <form style="display: flex; align-items: center; align-content: center;" class="mb-2" action="confirm-checkout" method="POST">
                                            @csrf
                                            <button class="btn btn-primary" type="submit" name="submit">Checkout Keranjang</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Toko</th>
                                                <th class="border-top-0">Makanan/Minuman</th>
                                                <th class="border-top-0">Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($cart as $data)

                                            <tr>
                                                <td>
                                                    <h4 class="m-b-0 font-16">{{ $data->toko }}</h4>
                                                </td>
                                                <td>{{ $data->nama }}</td>
                                                <td>
                                                    <h5 class="m-b-0">Rp. {{ $data->harga }}</h5>
                                                </td>
                                                <td>
                                                    <form action="deleteCart" method="POST" id="hapusItem">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                                        <button class="btn btn-danger" style="color: white;"><b>X</b></button>
                                                    </form>

                                                    @if(session('hapusBerhasil'))

                                                        <script>
                                                            Swal.fire({
                                                              position: 'center',
                                                              icon: 'success',
                                                              title: 'Berhasil Dihapus',
                                                              showConfirmButton: false,
                                                              timer: 2000
                                                            });
                                                        </script>

                                                    @endif
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Komentar Terbaru</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="dashboard/assets/images/users/1.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Hutatimur</h6>
                                        <span class="m-b-15 d-block">Gak pernah nyesel dah pesen lewan sini,pengirimannya cepat BGT OMG!!</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span> <span
                                                class="action-icons">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="dashboard/assets/images/users/4.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Ijaltak</h6>
                                        <span class="m-b-15 d-block">Selalu mendapatkan Hot Promo dan gratis ongkir. </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-end">April 19, 2021</span>
                                            <span class="action-icons active">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="dashboard/assets/images/users/5.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Baimal</h6>
                                        <span class="m-b-15 d-block">Mantep banget selalu dapet cashback.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Mei 01, 2021</span>
                                            <span class="action-icons">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="dashboard/assets/images/users/1.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Cahyati</h6>
                                        <span class="m-b-15 d-block">Gila banyak banget potongan harga sama vocer diskonya!!</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Mei 16, 2021</span> <span
                                                class="action-icons">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="dashboard/assets/images/users/1.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Hajime</h6>
                                        <span class="m-b-15 d-block">Love banget si awikwok</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Mei 29, 2021</span> <span
                                                class="action-icons">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Flexy Admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard/dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dashboard/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dashboard/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dashboard/dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="dashboard/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="dashboard/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dashboard/dist/js/pages/dashboards/dashboard1.js"></script>
    <script type="text/javascript" src="{{ env('APP_URL') }}/assets/slick/slick/slick.min.js"></script>
</body>

</html>