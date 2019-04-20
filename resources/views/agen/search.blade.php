@extends('layouts.agen-app')
@section('judul')
Cari User
@stop
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
									<button class="btn btn-success">Cari</button>	
							</form>
						</div>
					
				</div>

			</div>

		</div>

	</div>

</div>
@stop