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
              </div>
            </div>
             <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="{{asset('img/profile/'.Auth::user()->photo)}}" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">{{Auth::user()->name}}</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Tentang Akun</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="First Name" value="{{Auth::user()->name}}"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" value="{{Auth::user()->email}}"> </div>
                              <div class="form-group col-md-6">
                               <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="Alamat">
                               </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update Akun</button>
                          </form>
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
