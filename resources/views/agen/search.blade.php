@extends('layouts.agen-app')
@section('judul')
Cari User
@stop
@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-sm-left mb-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
				<div class="card card-small">
					<div class="card-header border-bottom">
						<h6 class="m-0">Silahkan Cari User</h6>
					</div>
					<div class="card-body pt-0">
						<b style="color: red">Catatan : Harus Nomor Virtual Account ! User</b>
						<br>
						<form action="{{route('agen.get')}}" method="get">
							<div class="row">
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<input type="text" class="form-control" placeholder="Masukan virtual account user" name="virtual_account">	
							</div>
							<br><br>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<button class="btn btn-success btn-block">Cari</button>
							</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop