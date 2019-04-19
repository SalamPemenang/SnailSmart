@extends('layouts.user-app')
@section('judul')
Verifikasi Email
@stop
@section('content')
<div class="error">
            <div class="error__content">
                @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link Verifikasi Telah Dikirimkan Ke email anda') }}
                        </div>
                    @endif
              <h2>OOppss !!!</h2>
              <h3>{{ __('Verifikasi Dulu Email Anda') }}</h3>
              <p>Tolong cek Email Anda Terlebih Dahulu Dan segera Verifikasi Email Anda.</p><p>Jika Link Tidak Ada Di email Anda</p>
              <button type="button" class="btn btn-accent btn-pill"><a href="{{ route('verification.resend') }}" style="color: white">{{ __('Klik Di sini Untuk mengirim ulank Link') }}</a></button>
            </div>
          </div>
@endsection
