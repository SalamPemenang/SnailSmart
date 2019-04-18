@extends('layouts.agen-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	
	<div class="page-header row no-gutters py-4">
		
		<div class="container mt-4">
			
			<div class="row">
				
				<div class="col-md-12">

					
					
						<div class="row">
							<form action="{{route('agen.get')}}" method="get">
								<div class="col-md-8">
										<input type="text" class="form-control" placeholder="Masukan virtual account user" name="virtual_account">	
								</div>

									<div class="col-md-8">
										<input type="text" class="form-control" placeholder="Masukan nama user" name="name">	
								</div>
									<button class="btn btn-success">Cari</button>	
							</form>
						</div>
					
				</div>


				<div class="col-md-12 mt-5">
					<div class="row">
							@foreach($user as $value)
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
								
									<div class="col-md-12">
											<img src="{{asset('img/profile/'. $value->photo)}}" alt="" width="100%" height="300px" class="rounded-circle">
									</div>
											
											{{$value->name}}
											{{$value->virtual_account}}
									<a href="{{route('agen.edit', $value->id)}}">Kirim</a>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>

					<ul class="pagination ml-3 mt-4">
					  <li class="page-item">{{$user->links()}}</li>
					</ul>

					</div>

			</div>

		</div>

	</div>

</div>
@stop