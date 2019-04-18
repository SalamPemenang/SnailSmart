@extends('layouts.user-app')

@section('judul')
Beranda
@stop

@section('content')
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Beranda</span>
                <h3 class="page-title">Selamat Datang {{Auth::user()->name}}</h3>
     {{--            <a href="{{route('saldo', Auth::user()->id)}}">Saldo</a>
      --}}         </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    @stop
