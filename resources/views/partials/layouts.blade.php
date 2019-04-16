<div class="container-fluid">
  <div class="row">
    <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
      <div class="main-navbar">
        <nav class="navbar align-items-stretch bg-white flex-md-nowrap border-bottom p-0">
          <a class="navbar-brand lh w-100 mr-0" href="#">
            <div class="d-table m-auto">
              <img id="main-logo" class="d-inline-block mw align-top mr-1" src="{{asset('img/green logo.png')}}" alt="">
              <span class="d-none d-md-inline ml-10">To-pay</span>
            </div>
          </a>
          <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
            <i class="material-icons">&#xE5C4;</i>
          </a>
        </nav>
      </div>
      <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
          <div class="input-group-prepend">
          </div>
        </div>
      </form>
      <div class="nav-wrapper">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <span>Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link "  href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="material-icons">&#xE879;</i>
            <span>
              {{ __('Keluar') }}
            </span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End Main Sidebar -->
  <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
    <div class="main-navbar sticky-top" style="background-color: #20c997">
      <!-- Main Navbar -->
      <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">

            </div>
          </div>
        </form>
        <ul class="navbar-nav border-left flex-row ">
          <li class="nav-item border-right dropdown notifications">
            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="nav-link-icon__wrapper">
                <i class="material-icons">&#xE7F4;</i>
                <span class="badge badge-pill badge-danger">2</span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">
                <div class="notification__icon-wrapper">
                  <div class="notification__icon">
                    <i class="material-icons">&#xE6E1;</i>
                  </div>
                </div>
                <div class="notification__content">
                  <span class="notification__category">Analytics</span>
                  <p>Your website’s active users count increased by
                    <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="notification__icon-wrapper">
                    <div class="notification__icon">
                      <i class="material-icons">&#xE8D1;</i>
                    </div>
                  </div>
                  <div class="notification__content">
                    <span class="notification__category">Sales</span>
                    <p>Last week your store’s sales count decreased by
                      <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                    </div>
                  </a>
                  <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3 text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle mr-2" src="{{asset('img/profile/'. Auth::user()->photo)}}">
                  <span class="text-white">{{Auth::user()->name}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item" href="{{route('profile')}}">
                    <i class="material-icons text-dark">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item text-danger" href="#">
                      <i class="material-icons text-danger">&#xE879;</i>  <span href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Keluar') }}
                    </span>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form> </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>