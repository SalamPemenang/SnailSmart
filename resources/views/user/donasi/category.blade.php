@extends('layouts.user-app')
@section('judul')
Donasi
@stop
@section('content')
 <div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-12">
						<div class="container">
								<h2 class="display-4s">Sebarkan Kebaikan Dengan Bantuan Anda.</h2>
								
							<div class="col-md-12 mt-5">
								<form action="{{route('donasi.government')}}" method="get" accept="charset-utf8">
								<div class="row">
									@foreach($category as $key)
										<div class="col-md-4">
												<div class="shadow-lg p-4 rounded mb-4">
													
													<div class="col-md-12">
															<h5 class="display-4s text-center">{{$key->category}}</h5>
													</div>
													
													<img src="{{asset('img/'. $key->image)}}" alt="" width="100%" height="250px">
														<input type="radio" name="category_id" id="choose" class="input-hidden" value="{{$key->id}}"/>
														<button for="choose" class="btn btn-success mt-3">
															Pilih
														</button>
													
													
												</div>
										</div>
										@endforeach
								</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
	</div>
</div>
@stop