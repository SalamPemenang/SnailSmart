@extends('layouts.user-app')

@section('content')
<div class="main-content-container container-fluid px-4">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-4">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<div class="container mt-3">
						<h3>Halaman Pembayaran Ujian Nasional</h3>
						<h6>Jumlah Saldo Anda Saat ini Rp.{{Auth::user()->saldo}}</h6>

						<div class="form-group">
							@if($bill->type_bill !== $bill->remaining)
								<label>Sisa Biaya yang harus di bayar</label>
							@else
								<label>Jumlah Biaya yang harus di bayar</label>
							@endif
							
							<p>Rp.{{ $bill->remaining }}</p>
						</div>
						
						<form action="{{ route('school.payment.proses', $payment->id) }}" method="POST">
							@csrf
							
							<input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
							<input type="hidden" name="idBill" value="{{ $bill->id }}">
							<input type="hidden" name="idSchool" value="{{ $school->id }}">
							<input type="hidden" name="saldoUser" value="{{ Auth::user()->saldo }}">
							<input type="hidden" name="saldoSchool" value="{{ $school->saldo }}">
							<input type="hidden" name="ket" value="Bayar SPP Nasional">
							<input type="hidden" name="type" value="{{ $bill->remaining }}">

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