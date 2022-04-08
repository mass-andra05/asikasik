<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }} - Cetak Laporan Presensi</title>
  
  @include('template.head')
</head>
<body>
  <!-- Awal Content -->
  <section>
    <div class="container-fluid content"style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
      <div class="container text-center col-md-8">
      <br>
       <h1> <b>{{ config('app.name') }} <b></h1>
        <p>Tanggal : {{ date('d-M-Y') }} </p>
        <hr class="mt-4 mb-5">
        <h1>Data Presensi Karyawan</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Karyawan</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jam Masuk</th>
              <th scope="col">Jam Keluar</th>
              <th scope="col">Jumlah Jam Kerja</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($presensi as $item)    
              <tr>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->jammasuk }}</td>
                <td>{{ $item->jamkeluar }}</td>
                <td>{{ $item->jamkerja }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- Akhir Content -->
  <script type="text/javascript">
    window.print();
    </script>
  @include('template.footer')
</body>
</html>