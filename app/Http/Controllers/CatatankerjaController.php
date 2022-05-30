<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\catatankerja;
use Illuminate\Http\Request;
use App\Http\Requests\StorecatatankerjaRequest;
use App\Http\Requests\UpdatecatatankerjaRequest;

class CatatankerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catatankerja.catatankerja', [
            'title' => "Catatan Kerja",
            'catatankerjas' => catatankerja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catatankerja.tambah', [
            'title' => "Tambah Catatan",
            'users' => User::where('level', 'karyawan')->latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecatatankerjaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catatankerja = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'user' => 'required'
        ]);
        
        catatankerja::create($catatankerja);

        $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/catatankerja');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catatankerja  $catatankerja
     * @return \Illuminate\Http\Response
     */
    public function show(catatankerja $catatankerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catatankerja  $catatankerja
     * @return \Illuminate\Http\Response
     */
    public function edit(catatankerja $catatankerja)
    {
        return view('catatankerja.editcatatankerja', [
            'catatan' => $catatankerja,
            'title' => 'Update catatan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecatatankerjaRequest  $request
     * @param  \App\Models\catatankerja  $catatankerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catatankerja $catatankerja)
    {
        $rules = [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ];

        $vali = $request->validate($rules);

        // $vali['excerpt'] = Str::limit(striptags($request->isi), 30);
        
        // search laravel = update | insert
        catatankerja::where('id', $catatankerja->id)
                ->update($vali);


        // kembalikan ke halaman post
        return redirect('/catatankerja')->with('bisa', 'Selamat Data Telah Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catatankerja  $catatankerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(catatankerja $catatankerja)
    {
        catatankerja::destroy($catatankerja->id);
        // kembalikan ke halaman catatankerja
        return redirect('/catatankerja')->with('bisa', 'Selamat Data Telah Dihapus!!');
    }
}
