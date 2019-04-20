@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{ route('admin.lembaga.store', ($government->id)) }}" method="post">
										@csrf
										<input type="hidden" name="id" value="{{$government->id}}">

										<div class="form-group">
											<label for="npsn">NPSN</label>
											<input type="text" name="npsn" id="npsn" class="form-control" value="{{$government->npsn}}">
										</div>

										<div class="form-group">
											<label for="no_rek">No Rek</label>
											<input type="text" name="no_rek" id="no_rek" class="form-control" value="{{$government->no_rek}}">
										</div>

										<div class="form-group">
											<label for="name">Nama</label>
											<input type="text" name="name" id="name" class="form-control" value="{{$government->name}}">
										</div>

										<div class="form-group">
											<label for="address">Alamat</label>
											<input type="text" name="address" id="address" class="form-control" value="{{$government->address}}">
										</div>

										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control" value="{{$government->phone}}">
										</div>

										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" class="form-control" value="{{$government->email}}">
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