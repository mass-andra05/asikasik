<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Tambah Cuti</title>
    @include('layouts.welcome')

</head>
<body class="hold-transition sidebar-mini">
<div class="container mt--9 pb-4">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
        <div class="card bg-secondary shadow border-0" style="background-image: url({{ asset('frontend/img/bg.webp')}})"; >
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Cuti</li>
                            </ol>
                        
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>


            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                        <div class="container">
                        <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body col-lg-15">
                            <form  class="form-valide" action="/cuti" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-1">
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
        </div>
    </div>
</div>
        <!-- /.content-wrapper -->
        @include('layouts.footer')
        @include('sweetalert::alert')
</body>
</html>