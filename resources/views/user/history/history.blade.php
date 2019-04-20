@extends('layouts.user-app')
@section('judul')
History Buku Tabungan
@stop
@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="col-lg-12 col-sm-4 text-center text-sm-left mb-0">
			<span class="text-uppercase page-subtitle">Halaman Hsitory Buku Tabungan</span>
			<div class="col-lg-12" id="block">
				<div class="card card-small mb-4">
					<div class="card-header border-bottom">
						<h6 class="m-0">Keluar Dan Masuk Uang Anda</h6>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item p-3">
							<table class="table table-hover">
								<tr>
									<th>Uang Masuk</th>
									<th>Uang Keluar</th>
									<th>Saldo Tabungan</th>
								</tr>
								@foreach($history as $H)
								<tr>
									<td><b>Rp.</b>{{$H->debit}}</td>
									<td><b>Rp.</b>{{$H->kredit}}</td>
									<td></td>
								</tr>
								@endforeach
								<tr>
									<td></td>
									<td></td>
									<td><b>Rp.</b>{{Auth::user()->save}}</td>
								</tr>
							</table>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@stop