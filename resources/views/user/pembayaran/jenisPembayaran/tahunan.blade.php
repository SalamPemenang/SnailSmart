@extends('layouts.user-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-4">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<div class="container mt-3">
						<h3>Halaman Pembayaran Tahunan</h3>
						<form action="{{ route('school.payment.proses', $payment->id) }}" method="POST">
							@csrf
							
							<input type="hidden" name="id" value="{{ Auth::user()->id }}">
							<input type="hidden" name="saldo" value="{{ Auth::user()->saldo }}">

							<div class="form-group">
								<label for="name">Jumlah Yang Harus dibayar</label>
								<p>Rp.{{ $payment->tahunan }}</p>
							</div>

							<div class="form-group">
								<select name="nominal" class="form-control">
									<option value="">-Silahkan Pilih Nominal-</option>
									<option value="50000">50.000</option>
									<option value="100000">100.000</option>
									<option value="200000">200.000</option>
									<option value="500000">500.000</option>
									<option value="1000000">1.000.000</option>
								</select>
							</div>

							<button type="submit" class="btn btn-success">Kirim</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop					