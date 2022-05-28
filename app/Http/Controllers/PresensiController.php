<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Presensi.Masuk');
    }

    public function keluar()
    {
        return view('Presensi.Keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if ($presensi){
            return redirect('presensi-masuk')->with('warning', 'Maaf Anda Sudah Melakukan Presensi Masuk');
        } else {
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'jammasuk' => $localtime,
            ]);
        } 

        return redirect('presensi-masuk')->with('success', 'Presensi Masuk Sukses');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function halamanrekap() {
        $presensi = Presensi::with('user')->get();
        return view('Presensi.Halaman-rekap-karyawan', compact('presensi'));
    }
   
    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl','asc')->get();
        return view('Presensi.Rekap-karyawan',compact('presensi'));
    }

    public function adminhalamanrekap() {
        $presensi = Presensi::with('user')->get();
        return view('Presensi.admin-Halaman-rekap-karyawan', compact('presensi'));
    }
   
    public function admintampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl','asc')->get();
        return view('Presensi.admin-Rekap-karyawan',compact('presensi'));
    }

    public function cetakLaporan() {
        $presensi = Presensi::with('user')->get();
        return view('Presensi.cetak-laporan', compact('presensi'));
    
        
      }

    public function presensipulang(){
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        
        $dt=[
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar == ""){
            $presensi->update($dt);
            return redirect('presensi-keluar')->with('success', 'Presensi Keluar Sukses');
        }else{
            return redirect('presensi-keluar')->with('warning', 'Maaf Anda Sudah Melakukan Presensi Keluar');
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
