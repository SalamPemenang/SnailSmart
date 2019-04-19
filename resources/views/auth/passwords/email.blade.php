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

                <img src="/img/logo.png" width="60" alt="">
                <span class="topay"><b>To-Pay</b></span>
                <br>
                <div class="card ">
                  <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row text-left">
                            <label for="email" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: white">{{ __('E-Mail Address') }}</label>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-success btn-block" style="background-color: #00febf; border-color: #00febf; color: black;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    @include('partials.assets-foot-login')
</body>

</html>