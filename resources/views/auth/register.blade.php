<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/title logo.png" type="image/png">
    @include('partials.assets-head-login')
</head>

<body>
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">

            <img src="img/logo.png" width="60" alt="">
            <span class="topay"><b>To-Pay</b></span>
            <br><br>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="nk-form mb-5">
                    <h4 style="font-size: 20px">Ayoo Daftar Sekarang</h4>
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Masukan Email Anda">

                           @if ($errors->has('email'))
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                     <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Masukan Nama Anda">

                     @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-key"></i></span>
                <div class="nk-int-st">
                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Masukan Password">

                 @if ($errors->has('password'))
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="input-group mg-t-15">
            <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-key"></i></span>
            <div class="nk-int-st">
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Ulangi Password">
         </div>
     </div>
     <div class="row">
        <br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <button type="submit" class="btn btn-success btn-block">Daftar</button>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <a href="login" style="color: white">Sudah Punya Akun ?</a>
    </div>
    <br><br>
</div>

<!-- Login Register area End-->
@include('partials.assets-head-login')

</html