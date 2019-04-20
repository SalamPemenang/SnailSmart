@extends('layouts.agen-app')
@section('judul')
Kirim Tabungan 
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
							<form action="{{route('agen.post.save')}}" method="post">
								@csrf
								<input type="hidden" name="id" value="{{$user->id}}">
								<input type="hidden" name="user_id" value="{{$user->id}}">
								<input type="hidden" name="agen_id" value="{{$agen->id}}">
								<input type="hidden" name="point" value="100">
								<input type="hidden" name="totalpoint" value="{{$agen->point}}">
								<input type="hidden" name="saldoagen" class="form-control" value="{{$agen->saldo}}">
								<input type="hidden" name="saveuser" class="form-control" value="{{$user->save}}">
								<div class="form-group mt-3">
									<label for="saldo">Nabung*</label>
									<input type="text" name="save" class="form-control" name="{{$user->save}}">
								</div>
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