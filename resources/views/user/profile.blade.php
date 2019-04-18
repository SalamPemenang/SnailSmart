@extends('layouts.user-app')

@section('judul')
Profile
@stop

@section('content')
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-lg-12 col-md-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Halaman Profile</span>
      <h3 class="page-title">Selamat Datang di Halaman profile anda </h3>
      <br>
      @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-small mb-4 pt-3">
        <div class="card-header border-bottom text-center">
          <div class="mb-3 mx-auto">
            <img class="rounded-circle" src="{{asset('img/profile/'.Auth::user()->photo)}}" alt="User Avatar" width="150"> </div>


            <form method="POST" enctype="multipart/form-data" action="{{route('edit-foto-profile')}}" >
              @csrf
              <label onchange="this.form.submit();" for="in" class="share-button btn btn-primary">
                Ganti Foto Profile
                <input style="display: none" type="file" id="in" name="photo">
              </label>
            </form>  


            <h4 class="mb-0">{{Auth::user()->name}}</h4>
            <span class="text-muted d-block mb-2">
              <span><b>No Rekening</b></span> : {{Auth::user()->no_rek}}
            </span>
            <span class="text-muted d-block mb-2">
              <span><b>Nomor telepon</b></span> : {{Auth::user()->phone}}
            </span>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-4">
              <strong class="text-muted d-block mb-2">Alamat</strong>
              <span>{{Auth::user()->address}}</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8" id="block">
        <div class="card card-small mb-4">
          <div class="card-header border-bottom">
            <h6 class="m-0">Tentang Akun</h6>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <div class="row">
                <div class="col">
                  <form method="POST" action="{{route('edit-profile')}}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feFirstName">First Name</label>
                        <input required type="text" class="form-control" id="Name" placeholder="Name" value="{{Auth::user()->name}}" disabled="" name="name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="feFirstName">Nomor Telepon</label>
                        <input required type="text" class="form-control" id="telp" placeholder="Nomor Telepon" value="{{Auth::user()->phone}}" disabled="" name="phone">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feEmailAddress">Email</label>
                        <input required type="email" class="form-control" id="email" placeholder="Email" value="{{Auth::user()->email}}" disabled="" name="email"> </div>
                        <div class="form-group col-md-6">
                         <label for="feInputAddress">Nik</label>
                         <input required type="text" class="form-control" id="nik" placeholder="nik" name="nik" value="{{Auth::user()->nik}}" disabled="">
                       </div>
                     </div>
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feEmailAddress">No Virtual Account</label>
                        <input required type="text" class="form-control" id="virtual_account" placeholder="Nomor virtual_account" value="{{Auth::user()->virtual_account}}" disabled="" name="virtual_account"> </div>
                        <div class="form-group col-md-6">
                         <label for="feInputAddress">Alamat</label>
                         <input required type="text" class="form-control" id="Address" placeholder="Alamat" value="{{Auth::user()->address}}" disabled="" name="address">
                       </div>
                     </div>
                     <div id="save">
                      <button onclick="myFunction()" class="btn btn-success">Update Akun</button>
                    </div>
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12col-xs-12 text-right">
          <a href="{{route('ganti-kata-sandi')}}">Ubah Kata sandi ?</a>
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

<script>
  function myFunction() {
    document.getElementById("save").innerHTML = '<button type="submit" class="btn btn-success">save</button>&nbsp;<button onclick="batal()" class="btn btn-default">Batal</button>'
    document.getElementById("Name").disabled = false;
    document.getElementById("telp").disabled = false;
    document.getElementById("email").disabled = false;
    document.getElementById("nik").disabled = false;
    document.getElementById("virtual_account").disabled = false;
    document.getElementById("Address").disabled = false;

  }
  function batal() {
    document.getElementById("save").innerHTML = '<button onclick="myFunction()" class="btn btn-success">Update Akun</button>'
    document.getElementById("Name").disabled = true;
    document.getElementById("telp").disabled = true;
    document.getElementById("email").disabled = true;
    document.getElementById("nik").disabled = true;
    document.getElementById("virtual_account").disabled = true;
    document.getElementById("Address").disabled = true;

  }
</script>
@stop
