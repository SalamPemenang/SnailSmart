<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/title logo.png" type="image/png">
     <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/owl.carousel.css">
        <link rel="stylesheet" href="/log-regassets/css/owl.theme.css">
        <link rel="stylesheet" href="/log-regassets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/wave/waves.min.css">
    <!-- Notika icon CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/notika-custom-icon.css">
    <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/main.css">
    <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/style.css">
    <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="/log-regassets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
        <script src="/log-regassets/js/vendor/modernizr-2.8.3.min.js"></script>
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
        <button type="submit" class="btn btn-login btn-success btn-float">
            <i class="notika-icon notika-left-arrow"></i>
        </button>
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
                               <!-- jquery
                                ============================================ -->
                                <script src="log-regassets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
        <script src="log-regassets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
        <script src="log-regassets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
        <script src="log-regassets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
        <script src="log-regassets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
        <script src="log-regassets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
        <script src="log-regassets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
        <script src="log-regassets/js/counterup/jquery.counterup.min.js"></script>
        <script src="log-regassets/js/counterup/waypoints.min.js"></script>
        <script src="log-regassets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
        <script src="log-regassets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
        <script src="log-regassets/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="log-regassets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
        <script src="log-regassets/js/flot/jquery.flot.js"></script>
        <script src="log-regassets/js/flot/jquery.flot.resize.js"></script>
        <script src="log-regassets/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
        <script src="log-regassets/js/knob/jquery.knob.js"></script>
        <script src="log-regassets/js/knob/jquery.appear.js"></script>
        <script src="log-regassets/js/knob/knob-active.js"></script>
    <!--  Chat JS
        ============================================ -->
        <script src="log-regassets/js/chat/jquery.chat.js"></script>
    <!--  wave JS
        ============================================ -->
        <script src="log-regassets/js/wave/waves.min.js"></script>
        <script src="log-regassets/js/wave/wave-active.js"></script>
    <!-- icheck JS
        ============================================ -->
        <script src="log-regassets/js/icheck/icheck.min.js"></script>
        <script src="log-regassets/js/icheck/icheck-active.js"></script>
    <!--  todo JS
        ============================================ -->
        <script src="log-regassets/js/todo/jquery.todo.js"></script>
    <!-- Login JS
        ============================================ -->
        <script src="log-regassets/js/login/login-action.js"></script>
    <!-- plugins JS
        ============================================ -->
        <script src="log-regassets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
        <script src="log-regassets/js/main.js"></script>
    </body>

    </html