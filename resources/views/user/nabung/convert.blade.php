@extends('layouts.user-app')

@section('judul')
Convert
@stop

@section('content')
	
	<div class="main-content-container container-fluid px-4">
		<div class="page-header row no-gutters py-4">
			<div class="container mt-5">
				<div class="row justify-content-center">
					<div class="col-md-8">	
						<div class="card">
							<div class="card-body">
								<form action="{{route('convert.update', $user->id)}}" method="post">
									@csrf
									<input type="hidden" name="_method" value="PUT">
								<div class="form-group">
									<h3>Convert Tabungan Ke Saldo</h3>
								</div>
								<div class="form-group mt-5">
									Tabungan yang tersedia Rp.{{Auth::user()->save}}
								</div>
								<div class="form-group mt-3">
									Saldo aplikasi yang tersedia Rp.{{Auth::user()->saldo}}
								</div>
								<div class="form-group mt-3">
									<input type="hidden" name="save" value="{{$user->save}}">
									<input type="hidden" name="saldo" value="{{$user->saldo}}">
									<input type="text" name="convert" class="form-control" placeholder="Masukan Uang Untuk Di Convert">
								</div>
								<div class="form-group">
									<button class="btn btn-success">Convert</button>
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