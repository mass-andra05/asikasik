<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Rekap Absensi</title>
    @include('Template.head')

</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">

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
            @if(session()->has('bisa'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('bisa') }}
                        </div>
                        @endif
                        <div class="container  col-md-">
                        <div class="card-header"><h2>{{ $title }}<h2></div>
                        <div class="card-body">
                            @if(auth()->user()->level =="admin")
                            <a class="badge bg-warning  border-0 p-2 color-white" href="/jadwalpiket/1/edit" >Update</a>
                            @endif
                            <div class="card-header">{{ $title }}</div>
                            <table class="table">
                                <thead>
                                        <tr>
                                            <th scope="col">Senin</th>
                                            <th scope="col">Selasa</th>
                                            <th scope="col">Rabu</th>
                                            <th scope="col">Kamis</th>
                                            <th scope="col">Jum'at</th>
                                            <th scope="col">Sabtu</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>
                                                {{ $senin->nama1 }} <br><hr>
                                                {{ $senin->nama2 }}<br><hr>
                                                {{ $senin->nama3 }}<br><hr>
                                                {{ $senin->nama4 }}<br><hr>
                                                {{ $senin->nama5 }}<br><hr>
                                                {{ $senin->nama6 }}<br><hr>
                                                {{ $senin->nama7 }}<br><hr>
                                                {{ $senin->nama8 }}<br><hr>
                                                {{ $senin->nama9 }}<br><hr>
                                                {{ $senin->nama10 }}<br><hr>
                                            </td>
                                            <td>
                                            {{ $selasa->nama1 }} <br><hr>
                                                {{ $selasa->nama2 }}<br><hr>
                                                {{ $selasa->nama3 }}<br><hr>
                                                {{ $selasa->nama4 }}<br><hr>
                                                {{ $selasa->nama5 }}<br><hr>
                                                {{ $selasa->nama6 }}<br><hr>
                                                {{ $selasa->nama7 }}<br><hr>
                                                {{ $selasa->nama8 }}<br><hr>
                                                {{ $selasa->nama9 }}<br><hr>
                                                {{ $selasa->nama10 }}<br><hr>
                                            </td>
                                            <td>
                                            {{ $rabu->nama1 }} <br><hr>
                                                {{ $rabu->nama2 }}<br><hr>
                                                {{ $rabu->nama3 }}<br><hr>
                                                {{ $rabu->nama4 }}<br><hr>
                                                {{ $rabu->nama5 }}<br><hr>
                                                {{ $rabu->nama6 }}<br><hr>
                                                {{ $rabu->nama7 }}<br><hr>
                                                {{ $rabu->nama8 }}<br><hr>
                                                {{ $rabu->nama9 }}<br><hr>
                                                {{ $rabu->nama10 }}<br><hr>
                                            </td>
                                            <td>
                                            {{ $kamis->nama1 }} <br><hr>
                                                {{ $kamis->nama2 }}<br><hr>
                                                {{ $kamis->nama3 }}<br><hr>
                                                {{ $kamis->nama4 }}<br><hr>
                                                {{ $kamis->nama5 }}<br><hr>
                                                {{ $kamis->nama6 }}<br><hr>
                                                {{ $kamis->nama7 }}<br><hr>
                                                {{ $kamis->nama8 }}<br><hr>
                                                {{ $kamis->nama9 }}<br><hr>
                                                {{ $kamis->nama10 }}<br><hr>
                                            </td>
                                            <td>
                                            {{ $jum->nama1 }} <br><hr>
                                                {{ $jum->nama2 }}<br><hr>
                                                {{ $jum->nama3 }}<br><hr>
                                                {{ $jum->nama4 }}<br><hr>
                                                {{ $jum->nama5 }}<br><hr>
                                                {{ $jum->nama6 }}<br><hr>
                                                {{ $jum->nama7 }}<br><hr>
                                                {{ $jum->nama8 }}<br><hr>
                                                {{ $jum->nama9 }}<br><hr>
                                                {{ $jum->nama10 }}<br><hr>
                                            </td>
                                            <td>
                                            {{ $sabtu->nama1 }} <br><hr>
                                                {{ $sabtu->nama2 }}<br><hr>
                                                {{ $sabtu->nama3 }}<br><hr>
                                                {{ $sabtu->nama4 }}<br><hr>
                                                {{ $sabtu->nama5 }}<br><hr>
                                                {{ $sabtu->nama6 }}<br><hr>
                                                {{ $sabtu->nama7 }}<br><hr>
                                                {{ $sabtu->nama8 }}<br><hr>
                                                {{ $sabtu->nama9 }}<br><hr>
                                                {{ $sabtu->nama10 }}<br><hr>
                                            </td>
                                        </tr>
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
</body>
</html>
