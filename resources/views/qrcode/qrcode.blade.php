

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Kartu Barqode</title>

    <!-- PENGATURAN CSS CETAK PDF LUR -->

    <style>
        .box {
            position: relative;
        }
        .card {
            width: 100px;
        }
        .logo {
            position: relative;
            top: 150px;
            right: 50px;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: purple;
        }
        .logo p {
            text-align: right;
            margin-right: 16pt;
        }
        .logo img {
            position: absolute;
            margin-top: -5pt;
            width: 40px;
            height: 40px;
            right: 16pt;
        }
        .nama {
           
            position: absolute;
            text-align: center;
            top: 300px;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: yellow ;
        }
        .barcode {
            position: absolute;
            top: 180px;
            left: 45px;
            border: 1px solid #fff;
            padding: 5px;
            background: #fff;
        }
        .text-left {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
    </style>


</head>
<body>
    <section style="border: 1px solid #ffff">
        <table width="200px">
                        <td class="">
                            <div class="box">
                            <div class="logo  text-center">
                                    <p>{{ config('app.name') }}</p>
                                </div>
                            <img src="{{ asset ('frontend/img/member.png') }}" alt="card" width="200px">
                              <div class="barcode text-center">
                                {!! $qrcode !!}
                                </div>
                            </div>
                        </td>
                   </table>
                </section>
            </body>
        </html>
@include('layouts.footer')
<script type="text/javascript">
    window.print();
    </script>