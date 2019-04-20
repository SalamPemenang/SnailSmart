@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{ route('admin.user.update', ($user->id)) }}" method="post">
										@csrf
										<input type="hidden" name="_method" value="PUT">

										<div class="form-group">
											<label for="nik">NIK</label>
											<input type="text" name="nik" id="nik" class="form-control" value="{{$user->nik}}">
										</div>

										<div class="form-group">
											<label for="virtual_account">Virtual Account</label>
											<input type="text" name="virtual_account" id="virtual_account" class="form-control" value="{{$user->virtual_account}}">
										</div>

										<div class="form-group">
											<label for="name">Nama</label>
											<input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
										</div>

										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}">
										</div>

										<div class="form-group">
											<button class="btn btn-success">Simpan</button>
										</div>
									</form>
								</div>
						</div>
					</div>
			</div>
  </div>
</div>
@stop