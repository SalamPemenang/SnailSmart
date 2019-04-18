@extends('layouts.user-app')

@section('content')
 <div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-12">
						<div class="container">
							<a href="{{route('donasi.category')}}">Kembali</a>
								<h4 class="display-4s mt-3">
								@if($id)Salurkan donasi anda kepada lembaga yang telah bekerja sama dengan kami. @else 404 not found @endif
								</h4>
								
							<div class="col-md-12 mt-5">
								
								<div class="row">
									@foreach($government as $data => $key)
										<div class="col-md-4">
												<div class="shadow-lg p-4 rounded mb-4">
													<div class="col-md-12">
															<h5 class="display-4s text-center">{{$key->name}}</h5>
													</div>

													<img src="{{asset('img/'. $key->image)}}" alt="" width="100%" height="250px">
												
														<a href="{{route('donasi.form', $key->id)}}" class="btn btn-success mt-3">Pilih</a>
													
													
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