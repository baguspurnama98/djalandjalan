@extends('layout/main')
@section('title','Home | djalandjalan.com')
@section('body')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FAF5E7">
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

<div class="img-line">
    <div class="title-page">
        <h3>Partners</h3>
        <p> Cari teman travelling yang cocok dengan kamu</p>
        <div class="search" style="">
            <input type="search" class="form-control" placeholder="Cari Destinasi Keinginanmu. Contoh: Bromo">
            <i class="fa fa-search"></i>
        </div>
    </div>
</div>



<!-- Page Content -->
<div class="container" style="position: relative;">
    <div class="row" style="margin-top: 10%">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-style: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center">
                    <img class="" src="assets/img/warning.png" style="width:25%">
                    <p>Kamu belum masuk</p>
                    <p>Masuk ke akun kamu dulu</p>
                    <button class="btn btn-ijo nav-text" type="button" onclick="window.location.href = 'login.html';">
                        Login
                    </button>
                    <p>Belum punya akaun? Daftar yuk</p>
                    <button class="btn btn-ijo nav-text" type="button" onclick="window.location.href = 'login.html';">
                        Daftar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
