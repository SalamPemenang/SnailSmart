@extends('layouts.user-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
		<div class="container mt-3">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card shadow-lg rouded">
						<div class="card-body">
							<form action="{{route('saldo.add', $saldo->id)}}" method="post">
								@csrf
							<div class="form-group">
								<input type="text" name="user_id" class="form-control" value="{{Auth::user()->name}}">
							</div>
							<div class="form-group">
								<input type="text" name="debit" class="form-control" placeholder="Debit..." value="{{$saldo->debit}}">
							</div>
							<div class="form-group">
								<input type="text" name="kredit" class="form-control" placeholder="Kredit..." {{$saldo->kredit}}>
							</div>
							<div class="form-group">
								<button class="btn btn-default">Save</button>
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