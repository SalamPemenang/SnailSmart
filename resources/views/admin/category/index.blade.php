@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-12">
						<a href="{{route('admin.category.add')}}" class="btn btn-success">Tambah Category</a>
						<div class="table-responsive">
							<table class="table table-striped table-bordered dt-row nowrap mt-4">
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Category</th>
									<th>Ket</th>
									<th>Created_at</th>
									<th>Updated_at</th>
									<th colspan="2">Aksi</th>
								</tr>
								<?php $no = 1; ?>
								@foreach($category as $value)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$value->image}}</td>
									<td>{{$value->category}}</td>
									<td>{{$value->ket}}</td>
									<td>{{$value->created_at}}</td>
									<td>{{$value->updated_at}}</td>
									<td width="10px">
										<a href="{{route('admin.category.edit', $value->id)}}" class="btn btn-success btn-sm">Ubah</a>
									</td>
									<td>
										<form action="{{ route('admin.category.delete', ($value->id)) }}" method="POST">
											@csrf
											<input type="hidden" name="_method" value="DELETE">
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