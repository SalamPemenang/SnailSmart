@extends('layouts.admin-app')

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-12">
						<a href="{{route('admin.government.add')}}" class="btn btn-primary">Tambah Lembaga</a>
						<div class="table-responsive">
							<table class="table table-striped table-bordered dt-row nowrap mt-4">
								<tr>
									<th>No</th>
									<th>NPSN</th>
									<th>No Rek</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Website</th>
									<th colspan="2">Aksi</th>
								</tr>
								<?php $no = 1; ?>
								@foreach($government as $value)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$value->no_rek}}</td>
									<td>{{$value->npsn}}</td>
									<td>{{$value->name}}</td>
									<td>{{$value->email}}</td>
									<td>{{$value->phone}}</td>
									<td>{{$value->website}}</td>
									<td width="10px">
										<a href="{{ route('admin.government.edit', ($value->id)) }}" class="btn btn-success btn-sm">Ubah</a>
									</td>
									<td>
										<form action="{{route('admin.government.delete', $value->id)}}" method="post">
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