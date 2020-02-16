<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Djalandjalan.com</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/heroic-features.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Navigation -->
    <div class="area-banner">
        <nav class="navbar navbar-expand-lg navbar-light navbar-inner nav-posi">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img id="home-logo" src="{{ URL::asset('assets/assets/img/djalandjalanlogo.png') }}" width="150" height="auto" alt="" style="position: relative">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="#tentangKami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="#footer">Bantuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-ijo nav-text" type="button" onclick="window.location.href = '#';">
                                Daftar
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="position: relative;">
            <div class="intro-home" style="width: 75%; margin-top: 150px">
                <span class="fontBaloo">Pengen liburan bingung dengan<span style="color: #2ED1A2"> siapa?</span></span><br>
                <span style="width: 75%">Yuk cari teman travelling yang cocok dengan kamu dengan disini !</span><br>
            </div>
            <div class="search">
                <input type="search" class="form-control" placeholder="Cari Destinasi Keinginanmu. Contoh: Bromo">
                <i class="fa fa-search"></i>
            </div>

            <div class="div-bottom">
                <a href="#"><img src="{{ URL::asset('assets/assets/img/twitter1.png') }}" class="medsos"></a>
                <a href="#"><img src="{{ URL::asset('assets/assets/img/path1.png') }}" class="medsos"></a>
                <a href="#"><img src="{{ URL::asset('assets/assets/img/ig1.png') }}" class="medsos"></a>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container" style="position: relative;">
        <!-- Icon Category -->
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div class="box">
                    <h4 class="text-center colorText-Brown">Cari Kebutuhan Travellingmu</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#">
                                <img class="icon-category" src="{{ URL::asset('assets/assets/img/team.png') }}">
                                <p>Partner</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="disabled">
                                <img class="icon-category" src="{{ URL::asset('assets/assets/img/camp.png') }}">
                                <p>Persewaan Alat</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="disabled">
                                <img class="icon-category" src="{{ URL::asset('assets/assets/img/world.png') }}">
                                <p>Agen Travel</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="disabled">
                                <img class="icon-category" src="{{ URL::asset('assets/assets/img/place.png') }}">
                                <p>Tour Guide</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div style="background-color: #faf5e7;">
            <!-- Mungkin Kamu Cari -->
            <div>
                <h3 class="btn-block colorText-Brown">Mungkin Kamu Cari</h3>
                <div class="row as">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <img src="{{ URL::asset('assets/assets/img/gunung.png') }}" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <img src="{{ URL::asset('assets/assets/img/pantai.png') }}" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <img src="{{ URL::asset('assets/assets/img/airterjun.png') }}" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <img src="{{ URL::asset('assets/assets/img/roadtrip.png') }}" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <img src="{{ URL::asset('assets/assets/img/airterjun.png') }}" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partners -->
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div style="margin-bottom: 2%; line-height: 10px">
                            <h3 class="btn-block colorText-Brown">Partners</h3>
                            <p> Cari teman travelling yang cocok dengan kamu</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="position: relative">
                        <div style="position: absolute; bottom: 0;margin-bottom: 2%; right: 0; margin-right: 15px">
                            <button class="btn btn-ijo" type="button" onclick="window.location.href = 'partner.php';">
                                Tampilkan Semua
                            </button>
                        </div>

                    </div>
                </div>

                <div class="row as2">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <div class="card">
                                    <img src="{{ URL::asset('assets/assets/img/bromo.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="line-height: 10px; padding: 10px">
                                        <h5 class="card-title colorText-2 ">Gunung Bromo</h5>
                                        <p class="card-title colorText-1 ">Ryan / Malang</p>
                                        <p class="card-text card-small-text ">Tgl: <span>25 Agustus 2020 - 26 Agustus 2020</span></p>
                                        <p class="card-text card-small-text">Titik Kumpul: <span>Stasiun Malang</span></p>
                                        <p class="card-text" style="float: right"><small class="text-muted">Butuh:<span>4 orang lagi</span></small></p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <div class="card">
                                    <img src="{{ URL::asset('assets/assets/img/bromo.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="line-height: 10px; padding: 10px">
                                        <h5 class="card-title colorText-2 ">Gunung Bromo</h5>
                                        <p class="card-title colorText-1 ">Ryan / Malang</p>
                                        <p class="card-text card-small-text ">Tgl: <span>25 Agustus 2020 - 26 Agustus 2020</span></p>
                                        <p class="card-text card-small-text">Titik Kumpul: <span>Stasiun Malang</span></p>
                                        <p class="card-text" style="float: right"><small class="text-muted">Butuh:<span>4 orang lagi</span></small></p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <div class="card">
                                    <img src="{{ URL::asset('assets/assets/img/bromo.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="line-height: 10px; padding: 10px">
                                        <h5 class="card-title colorText-2 ">Gunung Bromo</h5>
                                        <p class="card-title colorText-1 ">Ryan / Malang</p>
                                        <p class="card-text card-small-text ">Tgl: <span>25 Agustus 2020 - 26 Agustus 2020</span></p>
                                        <p class="card-text card-small-text">Titik Kumpul: <span>Stasiun Malang</span></p>
                                        <p class="card-text" style="float: right"><small class="text-muted">Butuh:<span>4 orang lagi</span></small></p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <div class="card">
                                    <img src="{{ URL::asset('assets/assets/img/bromo.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="line-height: 10px; padding: 10px">
                                        <h5 class="card-title colorText-2 ">Gunung Bromo</h5>
                                        <p class="card-title colorText-1 ">Ryan / Malang</p>
                                        <p class="card-text card-small-text ">Tgl: <span>25 Agustus 2020 - 26 Agustus 2020</span></p>
                                        <p class="card-text card-small-text">Titik Kumpul: <span>Stasiun Malang</span></p>
                                        <p class="card-text" style="float: right"><small class="text-muted">Butuh:<span>4 orang lagi</span></small></p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="strat">
                            <a href="#">
                                <div class="card">
                                    <img src="{{ URL::asset('assets/assets/img/bromo.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="line-height: 10px; padding: 10px">
                                        <h5 class="card-title colorText-2 ">Gunung Bromo</h5>
                                        <p class="card-title colorText-1 ">Ryan / Malang</p>
                                        <p class="card-text card-small-text ">Tgl: <span>25 Agustus 2020 - 26 Agustus 2020</span></p>
                                        <p class="card-text card-small-text">Titik Kumpul: <span>Stasiun Malang</span></p>
                                        <p class="card-text" style="float: right"><small class="text-muted">Butuh:<span>4 orang lagi</span></small></p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Explore Malang -->
    <div class="container">
        <h1 class="btn-block text-center colorText-1">#ExploreMalang</h1>
        <h4 class="btn-block text-center colorText-1">Nikmati keindahan alam Bumi Malang Raya</h4>
        <div class="row" style="text-align: center">
            <div class="col-md-4 grid-explore">
                <a href="#">
                    <img src="{{ URL::asset('assets/assets/img/grid1.png') }}" alt="Lights" style="width:100%">
                    <div class="overlay-bg">
                        <p>Gunung Bromo</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <img src="{{ URL::asset('assets/assets/img/grid2.png') }}" alt="Lights" style="width:100%">
                    <div class="overlay-bg">
                        <p>Ranu Kumbolo<p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <img src="{{ URL::asset('assets/assets/img/grid3.png') }}" alt="Lights" style="width:100%">
                    <div class="overlay-bg">
                        <p>Pantai Tiga Warna</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <img src="{{ URL::asset('assets/assets/img/grid4.png') }}" alt="Lights" style="width:100%">
                    <div class="overlay-bg">
                        <p>Air Terjun Sumber Pitu</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <img src="{{ URL::asset('assets/assets/img/grid5.png') }}" alt="Lights" style="width:100%">
                    <div class="overlay-bg">
                        <p>Gunung Semeru</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <img src="{{ URL::asset('assets/assets/img/grid6.png') }}" alt="Lights" style="width:100%">
                    <div class="overlay-bg">
                        <p>Sumber Air Jenong</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="container about" id="tentangKami" style="margin-top: 5%; margin-bottom: 5%">
        <h3 class="btn-block text-center colorText-1">djalandjalan.com</h3>
        <div class="row" style="margin-top: 4%">
            <div class="col-md-6">
                <h5 class="colorText-1">tidak ada teman jalan-jalan? cari di djalandjalan.com! </h5><br>
                <p>Cari teman yang cocok untuk kamu ajak djalandjalan ke destinasi keinginanmu. Kamu juga bisa cari
                    trip yang sesuai dengan apa yang kamu inginkan. Destinasi, tanggal keberangkatan, titik kumpul, jumlah
                    anggota? semua bisa diatur!. Iya, semudah itu kamu bisa djalandjalan sesukamu dengan Djalandjalan.com </p>
            </div>
            <div class="col-md-6">
                <img src="{{ URL::asset('assets/assets/img/girls.jpg') }}" style="height: 300px; object-fit: cover">
            </div>
        </div>
        <div class="row" style="margin-top: 4%">
            <div class="col-md-6">
                <img src="{{ URL::asset('assets/assets/img/about2.png') }}" style="height: 300px; object-fit: cover">
            </div>
            <div class="col-md-6">
                <h5 class="colorText-1">susah cari tempat penyewaan alat? cari di djalandjalan.com! </h5><br>
                <p>Cari teman yang cocok untuk kamu ajak djalandjalan ke destinasi keinginanmu. Kamu juga bisa cari
                    trip yang sesuai dengan apa yang kamu inginkan. Destinasi, tanggal keberangkatan, titik kumpul, jumlah
                    anggota? semua bisa diatur!. Iya, semudah itu kamu bisa djalandjalan sesukamu dengan Djalandjalan.com </p>
            </div>
        </div>
        <div class="row" style="margin-top: 4%">
            <div class="col-md-6">
                <h5 class="colorText-1">tidak ada teman jalan-jalan? cari di djalandjalan.com! </h5><br>
                <p>Cari teman yang cocok untuk kamu ajak djalandjalan ke destinasi keinginanmu. Kamu juga bisa cari
                    trip yang sesuai dengan apa yang kamu inginkan. Destinasi, tanggal keberangkatan, titik kumpul, jumlah
                    anggota? semua bisa diatur!. Iya, semudah itu kamu bisa djalandjalan sesukamu dengan Djalandjalan.com </p>
            </div>
            <div class="col-md-6">
                <img src="{{ URL::asset('assets/assets/img/girls.jpg') }}" style="height: 300px; object-fit: cover">
            </div>
        </div>
        <div class="row" style="margin-top: 4%">
            <div class="col-md-6">
                <img src="{{ URL::asset('assets/assets/img/about2.png') }}" style="height: 300px; object-fit: cover">
            </div>
            <div class="col-md-6">
                <h5 class="colorText-1">susah cari tempat penyewaan alat? cari di djalandjalan.com! </h5><br>
                <p>Cari teman yang cocok untuk kamu ajak djalandjalan ke destinasi keinginanmu. Kamu juga bisa cari
                    trip yang sesuai dengan apa yang kamu inginkan. Destinasi, tanggal keberangkatan, titik kumpul, jumlah
                    anggota? semua bisa diatur!. Iya, semudah itu kamu bisa djalandjalan sesukamu dengan Djalandjalan.com </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer" style="background-color: white">
        <div class="container pt-5 border-bottom">
            <div class="row">
                <div class="col-md-3 col-sm-12 mb-3 text-center">
                    <img id="home-logo" src="{{ URL::asset('assets/assets/img/djalandjalanlogo.png') }}" width="100%" height="auto" alt="" style="position: relative">
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="col-md-3 col-sm-6 col-6 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Produk</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Partners</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="href=" #">Persewaan Alat</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Agen Travel</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Tour Guide</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-6 p-0 mb-3 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Agen</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Cara Gabung</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Keuntungan</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Beriklan di djalandjalan.com</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Dukungan</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Tentang Kami</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Bantuan</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Syarat & Ketentuan</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Temukan Kami</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                <a href="#"><img src="{{ URL::asset('assets/assets/img/twitter1.png') }}"></a>
                                <a href="#"><img src="{{ URL::asset('assets/assets/img/path1.png') }}"></a>
                                <a href="#"><img src="{{ URL::asset('assets/assets/img/ig1.png') }}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="py-4 d-flex justify-content-center align-items-center">
                        <div class="container">
                            <p class="m-0 text-center">Copyright &copy; djalandjalan.com 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="{{ URL::asset('assets/js/slick.js') }}"></script>

</body>

</html>
