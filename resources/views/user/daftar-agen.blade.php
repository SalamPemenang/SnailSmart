@extends('layouts.user-app')
@section('judul')
Daftar Jadi Agen
@stop
@section('content')
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<h5>
			<b>ayooo jadi agen !!!&nbsp;Lihat Dahulu Syarat Dan Ketentuan Menjadi Agen</b>
		</h5>
		<b style="color: red">Catatan : Tolong Baca Ketentuan dan syarat Menjadi Agen Sebelum Menaftarkan Diri Anda Menjadi Agen</b>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="card card-small mb-3 text-center">
				<br>
				<h4>syarat dan ketentuan Jadi Agen Di To-Pay</h4>
				<div class="card-body text-left">
					Syarat dan ketentuan menjadi Agen di To-Pay :
					<br>
					<br>
					1. 18 Tahun Dan mempunyai KTP
					<br>
					2. Mempunyai Rekening Permata Bank
					<br>
					3. Harus siap melayani user yang menabung minimal 12jam
					<br><br>
					Agen bisa mengirimkan uang ke user,saldo dari agen bisa dikirim ke tabungan dan saldo user. <br> Setiap Pengiriman Agen Mendapatkan 100 point 
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="card card-small mb-3">
				<div class="card-body">
					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif
					<form class="add-new-post" action="{{route('daftar-agen.post')}}" method="post">
						@csrf
						<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
						<h5>Pilih Salah Satu </h5>
						<label>
							Agen
							<input type="radio" name="type" placeholder="Jawaban Anda" required="" value="Agen">
						</label>
						&nbsp;
						<label>
							Sekolah
							<input type="radio" name="type" placeholder="Jawaban Anda" required="" value="Sekolah">
						</label>
						&nbsp;
						<label>
							Lembaga Donasi
							<input type="radio" name="type" placeholder="Jawaban Anda" required="" value="Lembaga Donasi">	
						</label>
						<br>
						<label>Alamat lengkap Anda <b style="color: red">*Harus</b></label>
						<input class="form-control form-control-lg mb-3" type="text" name="answer1" placeholder="Jawaban Anda" required="">
						<label>Email Yang Akan Di Pakai Oleh Akun Agen <br><b style="color: red">*Cek Akun Yang Telah Dimasukan di Gmail</b></label>
						<input class="form-control form-control-lg mb-3" type="email" name="answer2" placeholder="Jawaban Anda" required="">
						<label>Rekening Asli <b style="color: red">*Harus</b></label>
						<input class="form-control form-control-lg mb-3" type="number" name="answer3" placeholder="Jawaban Anda" required="" min="0">
						<button class="btn btn-success">Kirim</button>
						<div id="editor-container" class="add-new-post__editor mb-1"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@stop