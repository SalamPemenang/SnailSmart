@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="shadow-lg p-4 mb-3 rounded">
									<form action="{{route('admin.agen.request.update', $request->id)}}" method="post">
										@csrf
										<input type="hidden" name="_method" value="PUT">
										<div class="form-group">
											<label for="answer1">Jawaban 1*</label>
											<input type="text" name="answer1" id="answer1" class="form-control" value="{{$request->answer1}}">
										</div>
										<div class="form-group">
											<label for="answer2">Jawaban 2*</label>
											<input type="text" name="answer2" id="answer2" class="form-control" value="{{$request->answer2}}">
										</div>
										<div class="form-group">
											<label for="answer3">Jawaban 3*</label>
											<input type="text" name="answer3" id="answer3" class="form-control" value="{{$request->answer3}}">
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