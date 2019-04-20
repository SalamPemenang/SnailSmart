@extends('layouts.user-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-4">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<div class="container mt-3">
						<h3>Halaman Pembayaran Prakerin</h3>
						<form action="{{ route('school.payment.proses', $payment->id) }}" method="POST">
							@csrf
							
							<input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
							<input type="hidden" name="idSchool" value="{{ $school->id }}">
							<input type="hidden" name="saldoUser" value="{{ Auth::user()->saldo }}">
							<input type="hidden" name="saldoSchool" value="{{ $school->saldo }}">

							<div class="form-group">
								<label for="name">Jumlah Yang Harus dibayar</label>
								<p>Rp.{{ $payment->pkl }}</p>
							</div>

							<div class="form-group">
								<input type="text" name="nominal" class="form-control" placeholder="Masukan Nominal Disini">
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