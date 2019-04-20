@extends('layouts.agen-app')

@section('content')

<div class="main-content-container container-fluid px-4">
	
	<div class="page-header row no-gutters py-4">

	<div class="container">
		<div class="col-md-12 mt-5">
			<div class="row">
				@foreach($user as $value)
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">

							<div class="col-md-12">
								<img src="{{asset('img/profile/'. $value->photo)}}" alt="" width="100%" height="300px" class="rounded-circle">
							</div>
							{{$value->name}}
							{{$value->virtual_account}}
							<a href="{{route('agen.saldo', $value->id)}}">Saldo</a>
							<a href="{{route('agen.save', $value->id)}}">Save</a>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
		</div>
@stop