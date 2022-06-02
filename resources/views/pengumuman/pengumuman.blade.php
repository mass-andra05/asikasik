<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - {{ $title }}</title>

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
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        @if(session()->has('bisa'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('bisa') }}
                        </div>
                        @endif
                        <div class="card-header"><h2>{{ $title }}<h2></div>
                        <div class="card-header">
                            @if(auth()->user()->level =="admin")
                        <a class="btn btn-primary" href="/pengumuman/create" role="button">Tambah Pengumuman</a>
                        @endif
                        <div class="card-body">
                                <table class="table">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pengumuman</th>
                                            <th scope="col">Isi Pengumuman</th>
                                            <th scope="col">Tanggal</th>
                                            @if(auth()->user()->level =="admin")
                                            <th scope="col">Action</th>
                                            @endif
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $pengumumans as $pengumuman )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengumuman->nama }}</td>
                                            <td>{{ $pengumuman->isi }}</td>
                                            <td>{{ $pengumuman->tanggal }}</td>
                                            <td>
                                                @if(auth()->user()->level =="admin")
                                            <a class="badge bg-warning  border-0 p-2 d-inline" href="/pengumuman/{{ $pengumuman->id }}/edit" >Update</a>
                                            <form action="/pengumuman/{{ $pengumuman->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Are Yout Sure Delete ')">Delete</button>
                                            </form>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                 </tbody>
                             </table>
                            </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
    @endif
</body>
</html>

<!-- FRONTEND -->
@if(auth()->user()->level =="karyawan")
<div class="container mt--9 pb-4">
    <div class="row justify-content-center">
        <div class="col-lg-15 col-md-12">
            <div class="card bg-secondary shadow border-0" style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
                <div class="card-body px-lg- py-lg-5">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                            <div class="card-body p-0 table-responsive">
                                <table class="table table-striped table-hover mb-0">
                                <thead>
                                <div class="card-header"><h1>{{ $title }}<h1></div>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pengumuman</th>
                                            <th scope="col">Isi Pengumuman</th>
                                            <th scope="col">Tanggal</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $pengumumans as $pengumuman )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengumuman->nama }}</td>
                                            <td>{{ $pengumuman->isi }}</td>
                                            <td>{{ $pengumuman->tanggal }}</td>
                                        </tr>
                                @endforeach
                                 </tbody>
                                </table>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
@endif

