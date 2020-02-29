<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/heroic-features.css') }}" rel="stylesheet">

</head>

<body>

    @yield('body')

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
