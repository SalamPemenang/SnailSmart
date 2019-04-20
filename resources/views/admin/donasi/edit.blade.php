@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{ route('admin.donasi.store', ($donasi->id)) }}" method="post">
										@csrf
										<input type="hidden" name="id" value="{{$donasi->id}}">
										<div class="form-group">
											<label for="user_id">Nama User</label>
											<input type="text" name="user_id" id="user_id" class="form-control" value="{{$donasi->user_id}}">
										</div>

										<div class="form-group">
											<label for="government_id">Nama Lembaga</label>
											<input type="text" name="government_id" id="government_id" class="form-control" value="{{$donasi->government_id}}">
										</div>

										<div class="form-group">
											<label for="donate">Jumlah Donasi</label>
											<input type="text" name="donate" id="donate" class="form-control" value="{{$donasi->donate}}">
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