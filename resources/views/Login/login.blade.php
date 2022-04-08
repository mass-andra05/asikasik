
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{ config('app.name') }} - Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('AdminLte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset ('AdminLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('AdminLte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Smart</b>Attadence</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login Sekarang Untuk Memulai</p>
      <div class="card">
         <div class="card-body register-card-body">
      <form action="{{route ('postlogin')}}" method="post">
          {{ csrf_field() }}
        
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email"required autofocus>
          <span class="help-block with-errors"></span>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password"required autofocus>
          <span class="help-block with-errors"></span>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>

      
      <!-- /.card-body<p class="mb-0">
        <a href="{{route ('registrasi')}}"class="text-center">Belum Punya Akun? Silahkan Registrasi</a>
      </p>
    </div>
     /.card-body -->



  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@include('sweetalert::alert')
<!-- jQuery -->
<script src="{{ asset ('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
@include('Template.script')
</body>
</html>
