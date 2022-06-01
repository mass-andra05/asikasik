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
                        <div class="container  col-md-">
                        <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/cuti" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">User</label>
                                    <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="Nama User ... " value="{{ auth()->user()->name }}" required disabled>
                                    <input type="hidden" class="form-control" name="user" id="exampleFormControlInput1" placeholder="Nama User ... " value="{{ auth()->user()->name }}" required>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                                    <select class="form-control  @error('keterangan') is-invalid @enderror" id="exampleFormControlTextarea1" name="keterangan" required>
                                    <option selected></option>
                                    <option value="sakit">sakit</option>
                                    <option value="izin">izin</option>
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Awal Cuti</label>
                                    <input type="date" class="form-control  @error('tanggal_awal') is-invalid @enderror" name="tanggal_awal" id="exampleFormControlInput1" placeholder="Tanggal Awal Cuti ... " required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Akhir Cuti</label>
                                    <input type="date" class="form-control  @error('tanggal_akhir') is-invalid @enderror" name="tanggal_akhir" id="exampleFormControlInput1" placeholder="Tanggal Akhir Cuti ... " required>
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="form-label">Foto / File</label>
                                    <input type="file" class="form-control  @error('file') is-invalid @enderror" name="file" id="file" placeholder="Silakan Masukkan ..." required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
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
