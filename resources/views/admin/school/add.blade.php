@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{route('admin.school.store')}}" method="post">
										@csrf
										<div class="form-group">
											<label for="npsn">NPSN*</label>
											<input type="text" name="npsn" id="npsn" class="form-control">
										</div>
										<div class="form-group">
											<label for="no_rek">No Rek*</label>
											<input type="text" name="no_rek" id="no_rek" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Nama Sekolah*</label>
											<input type="text" name="name" id="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="email">Email*</label>
											<input type="text" name="email" id="email" class="form-control">
										</div>
										<div class="form-group">
											<label for="password">Password*</label>
											<input type="password" name="password" id="password" class="form-control">
										</div>
										<div class="form-group">
											<label for="address">Alamat*</label>
											<textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
										</div>
										<div class="form-group">
											<label for="phone">No Telp*</label>
											<input type="text" name="phone" id="phone" class="form-control">
										</div>
										<div class="form-group">
											<label for="website">Website Sekolah*</label>
											<input type="text" name="website" id="website" class="form-control">
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