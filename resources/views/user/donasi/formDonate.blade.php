@extends('layouts.user-app')

@section('content')
	 <div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
	  	<div class="page-header row no-gutters py-4">
					<div class="container mt-3">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<div class="shadow-lg p-4 rounded mb-3">
								<form action="" method="post">
									@csrf
									<div class="form-group">
										<label for="name">Name*</label>
										<input type="text" name="user_id" id="name" class="form-control" value="{{Auth::user()->name}}" disabled="">
									</div>
									<div class="form-group">
										<label for="name">Lembaga*</label>
										<input type="text" name="government_id" id="name" class="form-control" value="{{$government->name}}" disabled="">
									</div>
									<div class="form-group">
										<label for="name">Bencana *</label>
										<input type="text" name="government_id" id="name" class="form-control" value="{{$category->category}}" disabled="">
									</div>
									<div class="form-group">
										<label for="donasi">Donasi*</label>
										<input type="text" name="donate" id="donasi" class="form-control">
									</div>
									<div class="form-group">
										<button class="btn btn-success">Donate</button>
									</div>
								</div>
							</form>

							</div>

						</div>
					</div>
	  	</div>
   </div>
@stop