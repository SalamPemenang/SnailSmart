@extends('layouts.agen-app')
@section('judul')
User Yang Dicari
@stop
@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-sm-left mb-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-4">
						<div class="card card-small h-100">
							<div class="card-header border-bottom">
								<h6 class="m-0">Users Yang Di Cari</h6>
							</div>
							<br>
							<div class="card-body d-flex py-0">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										@foreach($user as $value)
										<img src="{{asset('img/profile/'. $value->photo)}}" alt="" width="100%" height="100%" class="img-thumbnail">
										@endforeach
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										Name  
										<br>
										Virtual Akun 

									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										: {{$value->name}}
										<br>
										: {{$value->virtual_account}}
									</div>
									<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 view-report text-center">
										<br>
										<a href="{{route('agen.saldo', $value->id)}}">
											<button class="btn btn-primary">Kirim Ke saldo</button>
										</a>
										<a href="{{route('agen.save', $value->id)}}">
											<button class="btn btn-info">Kirim Ke Tabungan</button>
										</a>
										<br><br>
										<a href="{{route('agen.search')}}">
											<button class="btn btn-success">Kembali Mencari User</button>
										</a>
									</div>

								</div>
							</div>
							<br><br>
							<div class="card-footer d-flex py-0">
								<span style="color: red; font-size: 10px;">
									Catatan : Kirim Ke saldo(Anda Akan Mengirim Saldo Anda Ke Saldo User)
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kirim Ke Tabungan(Anda Akan Mengirim Saldo Anda Ke Tabungan User)
								</span>
							</div>
							<br>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop