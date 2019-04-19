    <!doctype html>
    <html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Masuk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/title logo.png" type="image/png">
        @include('partials.assets-head-login')
    </head>

    <body>
        <div class="login-content">
            <!-- Login -->
            <div class="nk-block toggled">

                <img src="img/logo.png" width="60" alt="">
                <span class="topay"><b>To-Pay</b></span>
                <br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="nk-form mb-5">
                        <h4 style="font-size: 20px">Masukan Akun anda</h4>
                        <div class="input-group">
                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                            <div class="nk-int-st">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email anda">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-group mg-t-15">
                            <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-key"></i></span>
                            <div class="nk-int-st">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <button type="submit" class="btn btn-success btn-block">Masuk</button>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                            </div>
                            <br><br>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="{{route('password.request')}}" style="color: white">Lupa Sandi ?</a>
                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="register" style="color: white;">Belum Punya Akun ?</a>
                     </div>
                </div>
                <div class="nk-block toggled">
                    <div class="nk-form mb-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5>Masuk Sebagai</h5>
                                <hr>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                             <a href="{{route('agen.login')}}">
                                 <button class="btn btn-primary btn-block">Agen</button>
                             </a>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="{{route('school.login')}}">
                                <button class="btn btn-primary btn-block">Sekolah</button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <a href="{{route('government.login')}}">
                             <button class="btn btn-primary btn-block">Lembaga Donasi</button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
    </div>
</div>
@include('partials.assets-foot-login')
</body>

</html>