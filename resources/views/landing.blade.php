@extends('layout/main')
@section('title','Home | djalandjalan.com')
@section('body')
<!-- Navigation -->
<div class="area-banner">
    <nav class="navbar navbar-expand-lg navbar-light navbar-inner nav-posi">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
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
                        <a class="nav-link nav-text" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-ijo nav-text" type="button" onclick="window.location.href = '{{ url('/register') }}';">
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
                        <button class="btn btn-ijo" type="button" onclick="window.location.href = '{{ url('/partner') }}';">
                            Tampilkan Semua
                        </button>
                    </div>

                </div>
            </div>

            <div class="row as2">
                @foreach ($trip as $t)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="strat">
                        <a href="#">
                            <div class="card">
                                <img src="{{ URL::asset('assets/assets/img/bromo.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body" style="line-height: 10px; padding: 10px">
                                    <h5 class="card-title colorText-2 ">{{ $t->place->name }}</h5>
                                    <p class="card-title colorText-1 ">{{ substr($t->user->full_name, 0, strpos($t->user->full_name, ' ')) }} / {{ $t->place->name }}</p>
                                    <p class="card-text card-small-text ">Tgl: <span>{{ date('d M Y', strtotime($t->depart_date)) }} - {{ date('d M Y', strtotime($t->return_date)) }}</span></p>
                                    <p class="card-text card-small-text">Titik Kumpul: <span>{{ substr($t->gather_point,0,25) }}...</span></p>
                                    <p class="card-text" style="float: right"><small class="text-muted">Butuh:<span>{{ $t->req_member }} orang lagi</span></small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
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
@endsection
