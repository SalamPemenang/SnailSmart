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
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="card card-small mb-3">
				<div class="card-body">
					<form class="add-new-post">
						<input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title">
						<div id="editor-container" class="add-new-post__editor mb-1"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop