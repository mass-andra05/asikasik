<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    @include('layouts.welcome')
</head>
<body class="hold-transition sidebar-mini">
<div class="container mt--9 pb-4">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8">
        <div class="card bg-secondary shadow border-0" style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
        <!-- Content Wrapper. Contains page content -->
</head>
<div class="card-body px-lg-5 py-lg-5">
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">  
        @if (Route::has('login'))
        <div class="text-center">
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endauth
        </div>
    @endif
    </div>
  </div>
</div>

</body>
</html>
