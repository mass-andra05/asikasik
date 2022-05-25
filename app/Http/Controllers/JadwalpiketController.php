<?php

namespace App\Http\Controllers;

use App\Models\jadwalpiket;
use Illuminate\Http\Request;
use App\Http\Requests\StorejadwalpiketRequest;
use App\Http\Requests\UpdatejadwalpiketRequest;

class JadwalpiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jadwalpiket.jadwalpiket', [
            'title' => "Jadwal Piket",
            'senin' => jadwalpiket::where('id', '1')->first(),
            'selasa' => jadwalpiket::where('id', '2')->first(),
            'rabu' => jadwalpiket::where('id', '3')->first(),
            'kamis' => jadwalpiket::where('id', '4')->first(),
            'jum' => jadwalpiket::where('id', '5')->first(),
            'sabtu' => jadwalpiket::where('id', '6')->first(),
        ]);
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
     * @param  \App\Http\Requests\StorejadwalpiketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejadwalpiketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwalpiket  $jadwalpiket
     * @return \Illuminate\Http\Response
     */
    public function show(jadwalpiket $jadwalpiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwalpiket  $jadwalpiket
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwalpiket $jadwalpiket)
    {
        return view('jadwalpiket.update', [
            'title' => "Update Jadwal Piket",
            'senin' => jadwalpiket::where('id', '1')->first(),
            'selasa' => jadwalpiket::where('id', '2')->first(),
            'rabu' => jadwalpiket::where('id', '3')->first(),
            'kamis' => jadwalpiket::where('id', '4')->first(),
            'jum' => jadwalpiket::where('id', '5')->first(),
            'sabtu' => jadwalpiket::where('id', '6')->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejadwalpiketRequest  $request
     * @param  \App\Models\jadwalpiket  $jadwalpiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwalpiket $jadwalpiket)
    {
        // senin
        $jadwal = jadwalpiket::where('id', '1')->first();
        $jadwal->nama1 = $request->senin1;
        $jadwal->nama2 = $request->senin2;
        $jadwal->nama3 = $request->senin3;
        $jadwal->nama4 = $request->senin4;
        $jadwal->nama5 = $request->senin5;
        $jadwal->nama6 = $request->senin6;
        $jadwal->nama7 = $request->senin7;
        $jadwal->nama8 = $request->senin8;
        $jadwal->nama9 = $request->senin9;
        $jadwal->nama10 = $request->senin10;
    	
    	$jadwal->update();
        // selasa
        $jadwal2 = jadwalpiket::where('id', '2')->first();
        $jadwal2->nama1 = $request->selasa1;
        $jadwal2->nama2 = $request->selasa2;
        $jadwal2->nama3 = $request->selasa3;
        $jadwal2->nama4 = $request->selasa4;
        $jadwal2->nama5 = $request->selasa5;
        $jadwal2->nama6 = $request->selasa6;
        $jadwal2->nama7 = $request->selasa7;
        $jadwal2->nama8 = $request->selasa8;
        $jadwal2->nama9 = $request->selasa9;
        $jadwal2->nama10 = $request->selasa10;
    	
    	$jadwal2->update();
        // rabu
        $jadwal3 = jadwalpiket::where('id', '3')->first();
        $jadwal3->nama1 = $request->rabu1;
        $jadwal3->nama2 = $request->rabu2;
        $jadwal3->nama3 = $request->rabu3;
        $jadwal3->nama4 = $request->rabu4;
        $jadwal3->nama5 = $request->rabu5;
        $jadwal3->nama6 = $request->rabu6;
        $jadwal3->nama7 = $request->rabu7;
        $jadwal3->nama8 = $request->rabu8;
        $jadwal3->nama9 = $request->rabu9;
        $jadwal3->nama10 = $request->rabu10;
    	
    	$jadwal3->update();
        // kamis
        $jadwal4 = jadwalpiket::where('id', '4')->first();
        $jadwal4->nama1 = $request->kamis1;
        $jadwal4->nama2 = $request->kamis2;
        $jadwal4->nama3 = $request->kamis3;
        $jadwal4->nama4 = $request->kamis4;
        $jadwal4->nama5 = $request->kamis5;
        $jadwal4->nama6 = $request->kamis6;
        $jadwal4->nama7 = $request->kamis7;
        $jadwal4->nama8 = $request->kamis8;
        $jadwal4->nama9 = $request->kamis9;
        $jadwal4->nama10 = $request->kamis10;
    	
    	$jadwal4->update();
        // jumat
        $jadwal5 = jadwalpiket::where('id', '5')->first();
        $jadwal5->nama1 = $request->jum1;
        $jadwal5->nama2 = $request->jum2;
        $jadwal5->nama3 = $request->jum3;
        $jadwal5->nama4 = $request->jum4;
        $jadwal5->nama5 = $request->jum5;
        $jadwal5->nama6 = $request->jum6;
        $jadwal5->nama7 = $request->jum7;
        $jadwal5->nama8 = $request->jum8;
        $jadwal5->nama9 = $request->jum9;
        $jadwal5->nama10 = $request->jum10;
    	
    	$jadwal5->update();
        // sabtu
        $jadwal6 = jadwalpiket::where('id', '6')->first();
        $jadwal6->nama1 = $request->sabtu1;
        $jadwal6->nama2 = $request->sabtu2;
        $jadwal6->nama3 = $request->sabtu3;
        $jadwal6->nama4 = $request->sabtu4;
        $jadwal6->nama5 = $request->sabtu5;
        $jadwal6->nama6 = $request->sabtu6;
        $jadwal6->nama7 = $request->sabtu7;
        $jadwal6->nama8 = $request->sabtu8;
        $jadwal6->nama9 = $request->sabtu9;
        $jadwal6->nama10 = $request->sabtu10;
    	
    	$jadwal6->update();


        // kembalikan ke halaman post
        return redirect('/jadwalpiket')->with('bisa', 'Selamat Data Berhasil!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwalpiket  $jadwalpiket
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwalpiket $jadwalpiket)
    {
        //
    }
}
