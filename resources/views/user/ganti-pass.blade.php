@extends('layouts.user-app')
@section('judul')
Ganti Kata sandi
@stop
@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-lg-12 col-md-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Halaman Ganti Kata sandi</span>
      <h3 class="page-title">Silahkan Ganti Sandi Anda</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-12" id="block">
        <div class="card card-small mb-4">
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <div class="row">
                <div class="card-body">
					@if (session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
					@endif
					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif
					<form class="form-horizontal" method="POST" action="{{route('edit-Kata-sandi')}}">
						@csrf
						
						<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
							<label for="new-password" class="col-md-4 control-label">Password Asal Anda</label>
							
							<div class="col-md-6">
								<input id="current-password" type="password" class="form-control" name="current-password" required>
								
								@if ($errors->has('current-password'))
								<span class="help-block">
									<strong>{{ $errors->first('current-password') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
							<label for="new-password" class="col-md-4 control-label">Sandi Baru</label>
							
							<div class="col-md-6">
								<input id="new-password" type="password" class="form-control" name="new-password" required>
								
								@if ($errors->has('new-password'))
								<span class="help-block">
									<strong>{{ $errors->first('new-password') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group">
							<label for="new-password-confirm" class="col-md-4 control-label">Ketik Sandi Baru</label>
							
							<div class="col-md-6">
								<input id="new-password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Ganti Sandi
								</button>
							</div>
						</div>
					</form>
					<a href="{{route('profile')}}" class="btn btn-success">Kembali ke Profile</a>
				</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8" id="show" style="display: none">
        <div class="card card-small mb-4">
          <div class="card-header border-bottom">
            <h6 class="m-0">Ubah Kata sandi</h6>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <div class="row">
                <div class="col">
                  <form method="POST" action="{{route('edit-Kata-sandi')}}">
                    @csrf
                    <div class="form-row">
                     </div>
                     <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="feEmailAddress">Masuksan Kata sandi Asal</label>
                        <input type="password" name="password" placeholder="Masukan Kata sandi Asal" class="form-control">
                      </div>
                     </div>
                     <div id="save">
                      <button type="submit" class="btn btn-success">Ganti Kata sandi</button>
                    </div>
                  </form>
                  <br>
                  <button onclick="batalgantipass()" class="btn btn-default">Batal</button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
</div>
</div>
@stop