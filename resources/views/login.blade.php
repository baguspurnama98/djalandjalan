@extends('layout/auth')
@section('title','Login | djalandjalan.com')
@section('body')
<div class="limiter" style="background-color: #2ED1A2;">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
            <form class="login100-form validate-form" action="{{ url('/login') }}" method="POST">
                @csrf
                <span class="login100-form-title p-b-55">
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('assets/assets/img/djalandjalanlogo.png') }}" style="width: 100%;"></a>
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-envelope"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-lock"></span>
                    </span>
                </div>

                <div class="container-login100-form-btn p-t-5">
                    <button type="submit" class="login100-form-btn">
                        Masuk
                    </button>
                </div>

                <div class="text-center w-full p-t-20 p-b-22">
                    <span class="txt1">
                        Atau masuk dengan
                    </span>
                </div>

                <a href="#" class="btn-face m-b-10">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="#" class="btn-google m-b-10">
                    <img src="{{ URL::asset('assets/assets/img/icon-google.png') }}" alt="GOOGLE">
                    Google
                </a>

                <div class="text-center w-full p-t-25">
                    <span class="txt1">
                        Belum punya akun?
                    </span>

                    <a class="txt1 bo1 hov1" href="{{ url('/register') }}">
                        Daftar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
