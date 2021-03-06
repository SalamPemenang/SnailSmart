@extends('layouts.admin-app')
@section('judul')
@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{route('admin.agen.update', $agen->id)}}" method="post">
										@csrf
										<input type="hidden" name="_method" value="PUT">
										<div class="form-group">
											<label for="nik">NIK*</label>
											<input type="text" name="nik" id="nik" class="form-control" value="{{$agen->nik}}">
										</div>
										<div class="form-group">
											<label for="no_rek">No Rek*</label>
											<input type="text" name="no_rek" id="no_rek" class="form-control" value="{{$agen->no_rek}}">
										</div>
										<div class="form-group">
											<label for="name">Nama*</label>
											<input type="text" name="name" id="name" class="form-control" value="{{$agen->name}}">
										</div>
										<div class="form-group">
											<label for="email">Email*</label>
											<input type="text" name="email" id="email" class="form-control" value="{{$agen->email}}">
										</div>
										<div class="form-group">
											<label for="phone">Phone*</label>
											<input type="text" name="phone" id="phone" class="form-control" value="{{$agen->phone}}">
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