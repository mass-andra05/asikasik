<?php

namespace App\Http\Controllers;

use App\Models\pengumuman;
use Illuminate\Http\Request;
use App\Http\Requests\StorepengumumanRequest;
use App\Http\Requests\UpdatepengumumanRequest;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengumuman.pengumuman', [
            'title' => "Pengumuman",
            'pengumumans' => pengumuman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.tambahpengumuman', [
            'title' => "Tambah Pengumuman",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepengumumanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengumuman = $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'tanggal' => 'required|max:255',
        ]);
        
        pengumuman::create($pengumuman);

        $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/pengumuman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengumuman $pengumuman)
    {
        return view('pengumuman.editpengumuman', [
            'pengumuman' => $pengumuman,
            'title' => 'Update Pengumuman'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepengumumanRequest  $request
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengumuman $pengumuman)
    {
        $rules = [
            'nama' => 'required|max:255',
            'isi' => 'required',
            'tanggal' => 'required',
        ];

        $vali = $request->validate($rules);

        // $vali['excerpt'] = Str::limit(strip_tags($request->isi), 30);
        
        // search laravel = update | insert
        pengumuman::where('id', $pengumuman->id)
                ->update($vali);


        // kembalikan ke halaman post
        return redirect('/pengumuman')->with('bisa', 'Selamat Data Telah Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {

        pengumuman::destroy($pengumuman->id);
        // kembalikan ke halaman pengumuman
        return redirect('pengumuman')->with('bisa', 'Selamat Data Telah Dihapus!!');
    }
}
