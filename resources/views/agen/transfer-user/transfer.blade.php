@extends('layouts.agen-app')
@section('judul')
Kirim Saldo
@stop
@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

				</div>				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="card">
						<div class="card-body">
							<form action="{{route('agen.post.saldo')}}" method="post">
								@csrf
								<input type="hidden" name="id" value="{{$user->id}}">
								<input type="hidden" name="user_id" value="{{$user->id}}">
								<input type="hidden" name="point" value="100">
								<input type="hidden" name="totalpoint" value="{{$agen->point}}">
								<input type="hidden" name="saldouser" class="form-control" value="{{$user->saldo}}">
								<div class="form-group mt-3">
									<label for="saldo">Kirimkan Saldo Anda*</label>
									<br>
									<b style="color: red; font-size: 12px;">Catatan : Saldo Yang Akan Anda Kirimkan Akan Masuk Ke Saldo User</b>
									<br>
									<br>
									<h5>Saldo Anda {{$agen->saldo}}</h5>
									<br>
									<input type="number" name="saldo" class="form-control" name="{{$user->saldo}}" min="1" max="{{$agen->saldo}}">
								</div>

								<input type="hidden" name="agen_id" value="{{$agen->id}}">
								<input type="hidden" name="totalagen" class="form-control" value="{{$agen->saldo}}">
						
								<div class="form-group">
									<button class="btn btn-success">Kirim</button>
								</div>
							</form>
						</div>
					</div>	
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

				</div>	
			</div>
		</div>
	</div>
</div>
@stop