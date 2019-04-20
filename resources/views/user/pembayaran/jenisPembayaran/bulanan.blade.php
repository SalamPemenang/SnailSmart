@extends('layouts.user-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-4">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<div class="container mt-3">
						<h3>Halaman Pembayaran Bulanan</h3>
						<h6>Jumlah Saldo Anda Saat ini Rp.{{Auth::user()->saldo}}</h6>
						<div class="form-group">
							<label>Jumlah Biaya yang harus di bayar</label>
							<p>Rp.{{ $payment->bulanan }}</p>
						</div>
						<form action="{{ route('school.payment.proses', $payment->id) }}" method="POST">
							@csrf
							
							<input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
							<input type="hidden" name="idSchool" value="{{ $school->id }}">
							<input type="hidden" name="saldoUSer" value="{{ Auth::user()->saldo }}">
							<input type="hidden" name="saldoSchool" value="{{ $school->saldo }}">

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