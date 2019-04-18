@extends('layouts.agen-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="container mt-4">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="form-group">
						<form action="{{route('')}}" method="post">
							<select name="id" id="" class="form-control">
								<option value="">-Pilih Kategori-</option>
								@foreach($user as $key)
									<option value="{{$key->id}}">{{$key->name}}</option>
								@endforeach
							</select>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop