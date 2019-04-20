@extends('layouts.user-app')
@section('judul')
Beranda
@stop
@section('content')
	<div class="main-content-container container-fluid px-4">
		<div class="page-header row no-gutters py-4">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-sm-left mb-0">
					<span class="text-uppercase page-subtitle">Beranda</span>
					<h3 class="page-title">Selamat Datang {{Auth::user()->name}}</h3>
				</div>
		</div>
	</div>
@stop