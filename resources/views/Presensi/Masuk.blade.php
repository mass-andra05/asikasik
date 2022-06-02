<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Presensi Masuk</title>
    @include('layouts.welcome')
    <script src="{{ asset('Js/jam.js') }}"></script>
</head>

<div class="container mt--9 pb-4">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-5">
      <div class="card bg-secondary shadow border-0" style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
        <div class="card-body px-lg-10 py-lg-5">
          <div class="content-wrapper">
            <div class="row mb-2">
            <body class="hold-transition sidebar-mini" onload="realtimeClock()">
                <div class="container text-center col-md-20">
                <div class="container text-center col-md-20">
                <div class="col-sm-7">
                      <ol class="breadcrumb float">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Presensi Masuk</li>
                      </ol>
                </div>
                <h1 class="text-dark"> Silahkan Presensi Masuk</h1>
          <form action="{{ route('simpan-masuk') }}" method="post">
          @csrf
            <label id="clock" style="font-size: 80px;"></label>  
                <br>
            <input type="hidden" name="latitude" id="latitude" class="latitude" required value="">
            <input type="hidden" name="longitude" id="longitude" class="longitude" required value="">
            <button class="btn btn-primary btn-presensi" type="submit">Klik Untuk Presensi Masuk</button>
            <br><br>
          </form>
            <div class="form-group row">
                    <div class="col-sm-2"><label class="col-form-label">SCAN QR</label></div>
                        <div class="col-sm-10">
                            <input  type="text" class="form-control" id="result">
                        </div>
                    </div>
                        <div id="reader" width="200px"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            
@include('layouts.footer')
@include('sweetalert::alert')


    <script type="text/javascript">
	$(document).ready(function() {
		navigator.geolocation.getCurrentPosition(function (position) {
   			 tampilLokasi(position);
		}, function (e) {
		    alert('Geolocation Tidak Mendukung Pada Browser Anda');
		}, {
		    enableHighAccuracy: true
		});
	});
	
	function tampilLokasi(posisi) {
			var latitude 	= posisi.coords.latitude;
			var longitude 	= posisi.coords.longitude;
	
			const latitude_value = document.querySelector('.latitude');
			latitude_value.setAttribute('value', latitude);
			const longitude_value = document.querySelector('.longitude');
			longitude_value.setAttribute('value', longitude);
	}
	
</script>


<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
// handle the scanned code as you like, for example:
//   console.log(`Code matched = ${decodedText}`, decodedResult);
$("#result").val(decodedText)
}

function onScanFailure(error) {
// handle scan failure, usually better to ignore and keep scanning.
// for example:
console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
"reader",
{ fps: 10, qrbox: {width: 250, height: 250} },
/* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
</body>
</html>
