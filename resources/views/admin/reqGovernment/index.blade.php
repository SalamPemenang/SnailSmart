@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered dt-row nowrap mt-4">
								<tr>
									<th>No</th>
									<th>User ID</th>
									<th>Answer 1</th>
									<th>Answer 2</th>
									<th>Answer 3</th>
									<th>Created_at</th>
									<th>Updated_at</th>
									<th colspan="2">Aksi</th>
								</tr>
								<?php $no = 1; ?>
								@foreach($request as $value)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$value->user_id}}</td>
									<td>{{$value->answer1}}</td>
									<td>{{$value->answer2}}</td>
									<td>{{$value->answer3}}</td>
									<td>{{$value->created_at}}</td>
									<td>{{$value->updated_at}}</td>
									<td width="10px">
										<a href="" class="btn btn-success btn-sm">Ubah</a>
									</td>
									<td>
										<form action="">
											<button class="btn btn-danger btn-sm">Hapus</button>
										</form>
									</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>
  </div>
</div>
@stop