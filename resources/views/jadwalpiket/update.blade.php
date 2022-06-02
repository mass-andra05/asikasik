<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - {{ $title }}</title>
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
                        <div class="card-body ">
                            <form action="/update" method="post">
                            @method('put')
                                @csrf
                                <table class="table">
                                <thead>
                                        <tr>
                                            <th class="col-lg-2">Senin</th>
                                            <th class="col-lg-2">Selasa</th>
                                            <th class="col-lg-2">Rabu</th>
                                            <th class="col-lg-2">Kamis</th>
                                            <th class="col-lg-2">Jum'at</th>
                                            <th class="col-lg-2">Sabtu</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <!-- Senin -->
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin1" id="exampleFormControlInput1" value="{{ $senin->nama1 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin2" id="exampleFormControlInput1" value="{{ $senin->nama2 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin3" id="exampleFormControlInput1" value="{{ $senin->nama3 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin4" id="exampleFormControlInput1" value="{{ $senin->nama4 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin5" id="exampleFormControlInput1" value="{{ $senin->nama5 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin6" id="exampleFormControlInput1" value="{{ $senin->nama6 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin7" id="exampleFormControlInput1" value="{{ $senin->nama7 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin8" id="exampleFormControlInput1" value="{{ $senin->nama8 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin9" id="exampleFormControlInput1" value="{{ $senin->nama9 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="senin10" id="exampleFormControlInput1" value="{{ $senin->nama10 }}" placeholder="" required>
                                                </div>
                                            </td>
                                            <!-- End - Senin -->
                                            <!-- Selasa -->
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa1" id="exampleFormControlInput1" value="{{ $selasa->nama1 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa2" id="exampleFormControlInput1" value="{{ $selasa->nama2 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa3" id="exampleFormControlInput1" value="{{ $selasa->nama3 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa4" id="exampleFormControlInput1" value="{{ $selasa->nama4 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa5" id="exampleFormControlInput1" value="{{ $selasa->nama5 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa6" id="exampleFormControlInput1" value="{{ $selasa->nama6 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa7" id="exampleFormControlInput1" value="{{ $selasa->nama7 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa8" id="exampleFormControlInput1" value="{{ $selasa->nama8 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa9" id="exampleFormControlInput1" value="{{ $selasa->nama9 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="selasa10" id="exampleFormControlInput1" value="{{ $selasa->nama10 }}" placeholder="" required>
                                                </div>
                                            </td>
                                            <!--End - Selasa -->
                                            <!--Rabu -->
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu1" id="exampleFormControlInput1" value="{{ $rabu->nama1 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu2" id="exampleFormControlInput1" value="{{ $rabu->nama2 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu3" id="exampleFormControlInput1" value="{{ $rabu->nama3 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu4" id="exampleFormControlInput1" value="{{ $rabu->nama4 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu5" id="exampleFormControlInput1" value="{{ $rabu->nama5 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu6" id="exampleFormControlInput1" value="{{ $rabu->nama6 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu7" id="exampleFormControlInput1" value="{{ $rabu->nama7 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu8" id="exampleFormControlInput1" value="{{ $rabu->nama8 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu9" id="exampleFormControlInput1" value="{{ $rabu->nama9 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="rabu10" id="exampleFormControlInput1" value="{{ $rabu->nama10 }}" placeholder="" required>
                                                </div>
                                            </td>
                                            <!--End - Rabu -->
                                            <!--Kamis  -->
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis1" id="exampleFormControlInput1" value="{{ $kamis->nama1 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis2" id="exampleFormControlInput1" value="{{ $kamis->nama2 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis3" id="exampleFormControlInput1" value="{{ $kamis->nama3 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis4" id="exampleFormControlInput1" value="{{ $kamis->nama4 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis5" id="exampleFormControlInput1" value="{{ $kamis->nama5 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis6" id="exampleFormControlInput1" value="{{ $kamis->nama6 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis7" id="exampleFormControlInput1" value="{{ $kamis->nama7 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis8" id="exampleFormControlInput1" value="{{ $kamis->nama8 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis9" id="exampleFormControlInput1" value="{{ $kamis->nama9 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="kamis10" id="exampleFormControlInput1" value="{{ $kamis->nama10 }}" placeholder="" required>
                                                </div>
                                            </td>
                                            <!--End - Kamis  -->
                                            <!-- Jum'at -->
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum1" id="exampleFormControlInput1" value="{{ $jum->nama1 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum2" id="exampleFormControlInput1" value="{{ $jum->nama2 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum3" id="exampleFormControlInput1" value="{{ $jum->nama3 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum4" id="exampleFormControlInput1" value="{{ $jum->nama4 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum5" id="exampleFormControlInput1" value="{{ $jum->nama5 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum6" id="exampleFormControlInput1" value="{{ $jum->nama6 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum7" id="exampleFormControlInput1" value="{{ $jum->nama7 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum8" id="exampleFormControlInput1" value="{{ $jum->nama8 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum9" id="exampleFormControlInput1" value="{{ $jum->nama9 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="jum10" id="exampleFormControlInput1" value="{{ $jum->nama10 }}" placeholder="" required>
                                                </div>
                                            </td>
                                            <!--End - Jum'at -->
                                            <!-- sabtu -->
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu1" id="exampleFormControlInput1" value="{{ $sabtu->nama1 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu2" id="exampleFormControlInput1" value="{{ $sabtu->nama2 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu3" id="exampleFormControlInput1" value="{{ $sabtu->nama3 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu4" id="exampleFormControlInput1" value="{{ $sabtu->nama4 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu5" id="exampleFormControlInput1" value="{{ $sabtu->nama5 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu6" id="exampleFormControlInput1" value="{{ $sabtu->nama6 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu7" id="exampleFormControlInput1" value="{{ $sabtu->nama7 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu8" id="exampleFormControlInput1" value="{{ $sabtu->nama8 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu9" id="exampleFormControlInput1" value="{{ $sabtu->nama9 }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sabtu10" id="exampleFormControlInput1" value="{{ $sabtu->nama10 }}" placeholder="" required>
                                                </div>
                                            </td>
                                            <!--End - sabtu -->
                                        </tr>
                                </tbody>
                            </table>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
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