<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Hasil Fiter Data Pertanggal Prersensi</title>
    @include('layouts.welcome')

</head>
<body class="hold-transition sidebar-mini">
<div class="container mt--9 pb-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-8">
        <div class="card bg-secondary shadow border-0">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
            <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Hasil Fiter Data Pertanggal Prersensi</li>
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
                        <div class="card-header"><h2>Hasil Fiter Data Pertanggal</div>
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

                            <div>
                            <center>
                            <div class="container text-center col-md-">
                            <div class="card-header">Riwayat Presensi Karyawan</div>
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
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
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
</div>
</div>
           <!-- /.content-wrapper -->
        <!-- Main Footer -->
        @include('layouts.footer')
</body>
</html>