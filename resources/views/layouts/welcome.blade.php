<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- Favicon -->
    <link href="{{ url('argon') }}/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ url('argon') }}/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="{{ url('argon') }}/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ url('argon') }}/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="bg-default">
    <!-- Navbar -->
    @auth
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        
            <a class="navbar-brand" href="{{ route('home') }}">
           
               {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
            @if (auth()->user()->level =="admin,karyawan")
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ route('home') }}">
                                <h1>{{ config('app.name') }}</h1>
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <!-- Navbar items -->
                
                <ul class="navbar-nav ml-auto">




                 <!-- @if (auth()->user()->level =="karyawan")
                 <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Presensi
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('presensi-masuk') }}" class="nav-link">
                  <i class="fas fa-sign-in-alt sm"></i>
                  <p>Presensi Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('presensi-keluar') }}" class="nav-link">
                  <i class="fas fa-sign-out-alt sm"></i>
                  <p>Presensi Keluar</p>
                </a>
              </li>
            </ul>
          </li> -->

                 <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <span class="nav-link-inner--text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('presensi-masuk') }}" class="nav-link ">
                            <i class="fas fa-sign-in-alt"></i>
                            <span class="nav-link-inner--text">Absen Masuk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('presensi-keluar') }}" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-link-inner--text">Absen Keluar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('filter-data') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <span class="nav-link-inner--text">Presensi Keseluruhan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="/cuti" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <span class="nav-link-inner--text">Cuti</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pengumuman" class="nav-link">
                        <i class="fas fa-bullhorn"></i>
                            <span class="nav-link-inner--text">Pengumuman</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/jadwalpiket" class="nav-link">
                        <i class="fas fa-calendar-check"></i>
                            <span class="nav-link-inner--text">Jadwal Piket</span>
                        </a>
                    </li>
                   
                    @endif
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="{{ route('logout') }}">
                            <i class="ni ni-user-run"></i>
                            <span class="nav-link-inner--text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </nav>
    @endauth

    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Selamat Datang!</h1>
                            <p class="text-lead text-light">Ayo Presensi Sekarang! <br>
                            Jangan Sampai Terlambat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
      
    <!--   Core   -->
    <script src="{{ url('argon') }}/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('argon') }}/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    @stack('scripts')

    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });

    </script>
    <script src="{{ asset('js/myscript.js') }}"></script>
    
</body>

</html>
