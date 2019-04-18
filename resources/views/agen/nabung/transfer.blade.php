@extends('layouts.agen-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="container mt-5">
			<div class="row">
				
				<h5 class="display-4s">Saldo User</h5>
				
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<form action="{{route('agen.post')}}" method="post">
								@csrf
								<input type="hidden" name="id" value="{{$user->id}}">
								<input type="hidden" name="user_id" value="{{$user->id}}">
								<input type="hidden" name="agen_id" value="{{$agen->id}}">
								<input type="hidden" name="totalagen" class="form-control" name="{{$agen->saldo}}" value="{{$agen->saldo}}">
								<input type="hidden" name="saldouser" class="form-control" name="{{$agen->saldo}}" value="{{$user->saldo}}">
								<div class="form-group mt-3">
									<label for="saldo">Nabung*</label>
									<input type="text" name="saldo" class="form-control" name="{{$user->save}}">
								</div>
								<div class="form-group">
									<button class="btn btn-success">Kirim</button>
								</div>
							</form>
						</div>
					</div>	
				</div>

			</div>
		</div>
	</div>
</div>
@stop