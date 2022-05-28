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
                                <li class="breadcrumb-item active">Rekap Prersensi Karyawan</li>
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
                        <div class="card-header"><h2>Rekap Presensi Karyawan<h2></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                                    Lihat <i class="fas fa-print"></i>
                                </a>
                            </div>
                            <div class="container-fluid content">
                            <div class="container text-center col-md-">
                            <div class="card-header">Riwayat Presensi Karyawan</div>
                                <table class="table">
                                <thead>
                                    <tr>
                                     <th scope="col">Nama Karyawan</th>
                                     <th scope="col">Tanggal</th>
                                     <th scope="col">Jam Masuk</th>
                                     <th scope="col">Jam Keluar</th>
                                     <th scope="col">Jumlah Jam Kerja</th>
                                     <th scope="col">Lokasi</th>
                                 </tr>
                                </thead>
                                <tbody>
                                   @foreach ($presensi as $item)  
                                  @if ($item->user->name == auth()->user()->name)    
                                    <tr>
                                      <td>{{ $item->user->name }}</td>
                                     <td>{{ $item->tgl }}</td>
                                     <td>{{ $item->jammasuk }}</td>
                                     <td>{{ $item->jamkeluar }}</td>
                                     <td>{{ $item->jamkerja }}</td>
                                     <td>
                                     <a class="btn btn-secondary border-0 shadow-none" href="https://www.google.com/maps/search/{{ $item->latitude }},{{ $item->longitude }}?sa=X&ved=2ahUKEwjusPjP-KP3AhWLRmwGHQAzB2sQ8gF6BAgCEAE" target="_blank" role="button"><span data-feather="map-pin">Maps</span></a>
                                     </td>
                                    </tr>
                                  @endif  
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
