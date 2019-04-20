@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{route('admin.category.post')}}" enctype="multipart/form-data" method="post">
										@csrf
										<div class="form-group">
											<label for="category">Kategori*</label>
											<input type="text" name="category" id="category" class="form-control">
										</div>
										<div class="form-group">
											<label for="ket">Keterangan*</label>
											<textarea name="ket" id="ket" cols="30" rows="5" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label for="image">Gambar*</label>
											<input type="file" name="image" id="image" class="form-control">
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