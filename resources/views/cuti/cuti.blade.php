<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Cuti</title>

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
            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-header"><h2>{{ $title }}<h2></div>
                        <div class="card-header">
                        @if(auth()->user()->level =="karyawan")
                        <a class="btn btn-primary" href="/cuti/create" role="button">Tambah Cuti</a>
                        @endif
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Awal Cuti</th>
                                            <th scope="col">Akhir Cuti</th>
                                            <th scope="col">File / Foto</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @if(auth()->user()->level =="karyawan")
                                    @foreach( $cutis as $cuti )
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cuti->user }}</td>
                                        <td>{{ $cuti->tanggal_awal }}</td>
                                        <td>{{ $cuti->tanggal_akhir }}</td>
                                        <td><a method="post" href="{{ asset('storage/' . $cuti->file) }}" target="_blank">{{ $cuti->nama_file }}</td>
                                        <td>{{ $cuti->keterangan }}</td>
                                        <td>
                                        @if( $cuti->status === 'diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-success" style="color:white; ">Diterima</span>
                                            @elseif ( $cuti->status === 'tidak diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-danger" style="color:white; ">Tidak Diterima</span>
                                            @else
                                            <strong>Pengajuan Cuti</strong><br> 
                                            <span class="badge badge-warning" style="color:white; ">Dalam Proses</span>
                                        @endif
                                        </td>
                                        <td>
                                        <form action="/cuti/{{ $cuti->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Untuk Menghapus ')">Delete</button>
                                        </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    @foreach( $admins as $admin )
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admin->user }}</td>
                                        <td>{{ $admin->tanggal_awal }}</td>
                                        <td>{{ $admin->tanggal_akhir }}</td>
                                        <td><a method="post" href="{{ asset('storage/' . $admin->file) }}">{{ $admin->nama_file }}</td>
                                        <td>{{ $admin->keterangan }}</td>
                                        <td>
                                        @if( $admin->status === 'diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-success" style="color:white; ">Diterima</span>
                                            @elseif ( $admin->status === 'tidak diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-danger" style="color:white; ">Tidak Diterima</span>
                                            @else
                                            <strong>Pengajuan Cuti</strong><br> 
                                            <span class="badge badge-warning" style="color:white; ">Dalam Proses</span>
                                        @endif
                                        </td>
                                        <td>
                                        @if(empty($admin->status))
                                        <form action="/cuti/status/{{ $admin->id }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="status" value="diterima">
                                            <button class="badge bg-success border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Dengan Ini ')">Terima</button>
                                        </form>
                                        <br>
                                        <form action="/cuti/status/{{ $admin->id }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="status" value="tidak diterima">
                                            <button class="badge bg-danger border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Dengan Ini ')">Tidak Diterima</button>
                                        </form>
                                        
                                        @else
                                        <span class="badge badge-warning" style="color:white; ">Status Telah Ada</span>
                                        @endif
                                        <form action="/cuti/{{ $admin->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Untuk Menghapus ')">Delete</button>
                                        </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                 </tbody>
                             </table>
                            </div>
                            </div>
                        </div><!-- /.container-fluid -->
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

             <!-- Main content -->
             <div class="content">
            <div class="container-fluid content">
            <a class="btn btn-primary" href="/cuti/create" role="button">Tambah Cuti</a>
                    <div class="card-body p-0 table-responsive">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if(auth()->user()->level =="karyawan")
                        @endif
                        <table class="table table-striped table-hover mb-0">
                            <br>
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Awal Cuti</th>
                                            <th scope="col">Akhir Cuti</th>
                                            <th scope="col">File / Foto</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @if(auth()->user()->level =="karyawan")
                                    @foreach( $cutis as $cuti )
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cuti->user }}</td>
                                        <td>{{ $cuti->tanggal_awal }}</td>
                                        <td>{{ $cuti->tanggal_akhir }}</td>
                                        <td><a method="post" href="{{ asset('storage/' . $cuti->file) }}" target="_blank">{{ $cuti->nama_file }}</td>
                                        <td>{{ $cuti->keterangan }}</td>
                                        <td>
                                        @if( $cuti->status === 'diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-success" style="color:white; ">Diterima</span>
                                            @elseif ( $cuti->status === 'tidak diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-danger" style="color:white; ">Tidak Diterima</span>
                                            @else
                                            <strong>Pengajuan Cuti</strong><br> 
                                            <span class="badge badge-warning" style="color:white; ">Dalam Proses</span>
                                        @endif
                                        </td>
                                        <td>
                                        <form action="/cuti/{{ $cuti->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Untuk Menghapus ')">Delete</button>
                                        </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    @foreach( $admins as $admin )
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admin->tanggal }}</td>
                                        <td>{{ $admin->user }}</td>
                                        <td><a method="post" href="{{ asset('storage/' . $admin->file) }}">{{ $admin->nama_file }}</td>
                                        <td>{{ $admin->keterangan }}</td>
                                        <td>
                                        @if( $admin->status === 'diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-success" style="color:white; ">Diterima</span>
                                            @elseif ( $admin->status === 'tidak diterima' )
                                            <strong>Cuti</strong> <br> 
                                            <span class="badge badge-danger" style="color:white; ">Tidak Diterima</span>
                                            @else
                                            <strong>Pengajuan Cuti</strong><br> 
                                            <span class="badge badge-warning" style="color:white; ">Dalam Proses</span>
                                        @endif
                                        </td>
                                        <td>
                                        @if(empty($admin->status))
                                        <form action="/cuti/status/{{ $admin->id }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="status" value="diterima">
                                            <button class="badge bg-success border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Dengan Ini ')">Terima</button>
                                        </form>
                                        <br>
                                        <form action="/cuti/status/{{ $admin->id }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="status" value="tidak diterima">
                                            <button class="badge bg-danger border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Dengan Ini ')">Tidak Diterima</button>
                                        </form>
                                        
                                        @else
                                        <span class="badge badge-warning" style="color:white; ">Status Telah Ada</span>
                                        @endif
                                        <form action="/cuti/{{ $admin->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 color-white" onclick="return confirm(' Apakah Kamu Yakin Untuk Menghapus ')">Delete</button>
                                        </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                 </tbody>
                             </table>
                            </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('layouts.footer')
        @include('sweetalert::alert')
</body>
</html>
@endif


