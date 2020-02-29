@extends('layout/auth')
@section('title','Register | djalandjalan.com')
@section('body')
<div class="limiter" style="background-color: #2ED1A2;">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30" style="width: 600px;">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-25">
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('assets/assets/img/djalandjalanlogo.png') }}" style="width: 50%;"></a>
                </span>

                <div class="wrap-input100 m-b-10">
                    <input class="input100" type="text" name="namaLengkap" placeholder="Nama Lengkap">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-user"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-envelope"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-15" data-validate="Handphone is required">
                    <input class="input100" type="text" name="noHp" placeholder="No. Handphone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-phone-handset"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-15" data-validate="Tanggal Lahir is required">
                    <input class="input100" type="text" name="tglLahir" placeholder="Tanggal Lahir">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-calendar-full"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-15" data-validate="Handphone is required">
                    <span>Jenis Kelamin :</span>
                    <input type="radio" value="Laki" name="gender"> Laki-Laki &emsp;
                    <input type="radio" value="Perempuan" name="gender"> Perempuan

                </div>

                <div class="wrap-input100 validate-input m-b-15" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-lock"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="!!!">
                    <input class="input100" type="password" name="confirm_pass" placeholder="Ketik Ulang Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-checkmark-circle"></span>
                    </span>
                </div>

                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="aggrePolicy">
                    <label class="label-checkbox100" for="ckb1">
                        <span style="font-size: 12px;">Saya menyetujui Aturan Pengguna dan Kebijakan Privasi djalandjalan.com</span>
                    </label>
                </div>

                <div class="container-login100-form-btn p-t-5">
                    <button class="login100-form-btn">
                        Daftar
                    </button>
                </div>

                <div class="text-center w-full p-t-20 p-b-22">
                    <span class="txt1">
                        Atau daftar dengan
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
                        Sudah punya akun?
                    </span>

                    <a class="txt1 bo1 hov1" href="{{ url('/login') }}">
                        Masuk
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
