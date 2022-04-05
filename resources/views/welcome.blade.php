<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('frontend/app.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
</head>
<body>

  <!-- Awal Navbar -->
<p></p>

  <nav>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container container-fluid">
        <a class="navbar-brand" href="#">
            <h3><strong>Smart Attendence</strong></h3>
        </a>
        <div class="button ml-auto">
          <a href="{{route ('login')}}" class="btn-daftar">Login</a>
          <a href="{{route ('registrasi')}}" class="btn-masuk">Registrasi</a>
        </div>
      </div>
    </nav>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Content -->
  <section>
    <div class="container-fluid">
      <div class="container text-center">
        <h1 class="text-content">Ayo Presensi Sekarang! <br>
         Jangan Sampai Terlambat
        </h1>
        <a href="{{route ('login')}}" class="btn-presensi">Presensi Sekarang Juga!</a>
      </div>
    </div>
  </section>
  <!-- Akhir Content -->

  <footer class="container text-center text-sm">
    @include('Template.footer')

  </footer>
  
  <script src="{{ asset('frontend/js/bootstrap.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
