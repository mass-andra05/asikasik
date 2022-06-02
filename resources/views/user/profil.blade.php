<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Profil</title>


    @if(auth()->user()->level =="karyawan")
    @include('layouts.welcome')
    @endif

    @if(auth()->user()->level =="admin")
    @include('Template.head')
    @endif

</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">

    @if(auth()->user()->level =="admin")
        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Profil</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            
              <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="font-weight-bold">Profile</h3>
                <div class="text-center">
                <img src="{{ asset ('AdminLte/dist/img/user2-160x160.jpg') }}"  class="img-circle " alt="User Image">
            </div>
            <br>
                <div class="form-group">
                            <label for="password_baru">Nama</label>
                            <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Email</label>
                            <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Status</label>
                            <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->level }}">
                        </div>
                    </div>
                </div>
        <div class="card-header"></div></div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                    <h3 class="font-weight-bold">Ganti Password</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <form action=" {{ route('update-password', Auth::user()->name) }} " method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password">
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Password Baru</label>
                            <input type="password" class="form-control  @error('password_baru') is-invalid @enderror" id="password_baru" name="password_baru">
                            @error('password_baru')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control  @error('konfirmasi_password') is-invalid @enderror" id="konfirmasi_password" name="konfirmasi_password">
                            @error('konfirmasi_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
        <!-- /.content -->
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        @include('sweetalert::alert')
        <!-- Main Footer -->
        @include('Template.footer')
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
    @endif

    <!-- FRONTEND -->
    @if(auth()->user()->level =="karyawan")
    <div class="container mt--9 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="card bg-secondary shadow border-0" style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
                        <div class="card-body px-lg-5 py-lg-5">
                        <div class="content-wrapper">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Profil</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
               
            <!-- Main content -->
            <div class="content">
            <div class="card-header">
                    <h5 class="font-weight-bold">Profile</h5>
                </div>
                <div class="card-body">
                <div class="image text-center">
                <img src="{{ asset ('AdminLte/dist/img/user2-160x160.jpg') }}"  class="img-circle" alt="User Image">
            </div>
                <div class="form-group">
                            <label for="password_baru">Nama User</label>
                            <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Email</label>
                            <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Status</label>
                            <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->level }}">
                        </div>

                    <div class="card-header">
                        <h5 class="font-weight-bold">Ganti Password</h5>
                    </div>
                    <br>
                    <div class="form-group">
                    <form action=" {{ route('update-password', Auth::user()->name) }} " method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password">
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Password Baru</label>
                            <input type="password" class="form-control  @error('password_baru') is-invalid @enderror" id="password_baru" name="password_baru">
                            @error('password_baru')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control  @error('konfirmasi_password') is-invalid @enderror" id="konfirmasi_password" name="konfirmasi_password">
                            @error('konfirmasi_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('sweetalert::alert')
@include('layouts.footer')
    </div>
</body>
</html>
@endif
