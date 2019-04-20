@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{ route('admin.school.update', ($school->id)) }}" method="post">
										@csrf
										<input type="hidden" name="_method" value="PUT">

										<div class="form-group">
											<label for="npsn">NPSN</label>
											<input type="text" name="npsn" id="npsn" class="form-control" value="{{$school->npsn}}">
										</div>

										<div class="form-group">
											<label for="no_rek">No Rekening</label>
											<input type="text" name="no_rek" id="no_rek" class="form-control" value="{{$school->no_rek}}">
										</div>

										<div class="form-group">
											<label for="name">Nama Sekolah</label>
											<input type="text" name="name" id="name" class="form-control" value="{{$school->name}}">
										</div>

										<div class="form-group">
											<label for="address">Alamat</label>
											<textarea name="address" id="address" cols="30" rows="10" class="form-control">{{$school->address}}</textarea>
										</div>

										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control" value="{{$school->phone}}">
										</div>

										<div class="form-group">
											<label for="website">Website</label>
											<input type="text" name="website" id="website" class="form-control" value="{{$school->website}}">
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