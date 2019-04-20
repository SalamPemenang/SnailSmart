@extends('layouts.user-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-4">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<a href="{{route('school')}}">Kembali</a>
						<h4 class="display-4s mt-3">
							@if(!$id)
								 404 not found , Silahkan pilih Sekolah terlebih dahulu
							@else
								Silahkan Pilih Pembayaran
							@endif
						</h4>

						<div class="col-md-12 mt-5">
							<div class="row">
								
								@foreach( $payment as $p )
								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Tahunan</h5>
											<p class="display-4s text-center">Rp.{{ $p->tahunan }}</p>
										</div>

										<a href="{{route('school.tahunan', Auth::user()->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Bulanan</h5>
											<p class="display-4s text-center">Rp.{{ $p->bulanan }}</p>
										</div>

										<a href="{{route('school.bulanan', $p->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Daftar Ulang</h5>
											<p class="display-4s text-center">Rp.{{ $p->daftar_ulang }}</p>
										</div>

										<a href="{{route('school.dalang', $p->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Praktik</h5>
											<p class="display-4s text-center">Rp.{{ $p->praktik }}</p>
										</div>

										<a href="{{route('school.praktik', $p->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Prakerin</h5>
											<p class="display-4s text-center">Rp.{{ $p->pkl }}</p>
										</div>

										<a href="{{route('school.prakerin', $p->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Ujian Akhir</h5>
											<p class="display-4s text-center">Rp.{{ $p->ujianakhir }}</p>
										</div>

										<a href="{{route('school.ujianAkhir', $p->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="shadow-lg p-3 rounded mb-3">
										<div class="col-md-12">
											<h5 class="display-4s text-center">Ujian Nasional</h5>
											<p class="display-4s text-center">Rp.{{ $p->ujiannasional }}</p>
										</div>

										<a href="{{route('school.ujianNasional', $p->id)}}" class="btn btn-success mt-3">Pilih</a>
									</div>
								</div>
								@endforeach

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop					