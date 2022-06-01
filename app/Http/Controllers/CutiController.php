<?php

namespace App\Http\Controllers;

use App\Models\cuti;
use Illuminate\Http\Request;
use App\Http\Requests\StorecutiRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatecutiRequest;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cuti.cuti', [
            'title' => "Pengajuan Cuti",
            'cutis' => cuti::where('user', auth()->user()->name)->latest()->get(),
            'admins' => cuti::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuti.tambah', [
            'title' => "Tambah Cuti",
        ]);
    }

    public function status(Request $request, $id)
    {
        $cuti = cuti::where('id', $id)->first();
        $cuti->status = $request->status;

        $cuti->update();

        return redirect('/cuti')->with('success', 'Anda Berhasil Mengkonfimasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecutiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|max:255',
            'tanggal_awal' => 'required|max:255',
            'tanggal_akhir' => 'required|max:255',
            'file' => 'required|file|max:5024',
        ]);

        $file = $request->file('file');
        $explode = explode('.', $file->getClientOriginalName());
        $originalName = $explode[0];
        $extension = $file->getClientOriginalExtension();
        $rename = 'file_' . date('YmdHis') . '.' . $extension;
        $mime = $file->getClientMimeType();
        $filesize = $file->getSize();
        $path = $request->file('file')->storeAs('public/cuti', $rename);
        $filename = 

        $cuti = new cuti;

        $cuti->user = $request->user;
        $cuti->keterangan = $request->keterangan;
        $cuti->tanggal_awal = $request->tanggal_awal;
        $cuti->tanggal_akhir = $request->tanggal_akhir;

        $cuti->nama_file = $originalName. '.' . $extension ;
        $cuti->file = $path;
        $cuti->save();
        

        $request->session()->flash('success', 'Pengajuan Cuti Berhasil Terkirim');
        
        return redirect('/cuti');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecutiRequest  $request
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecutiRequest $request, cuti $cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuti $cuti)
    {
        if($cuti->file) {
            Storage::delete($cuti->file);
        }

        cuti::destroy($cuti->id);
        // kembalikan ke halaman cuti
        return redirect('/cuti')->with('success', 'Selamat Data Telah DIhapus!!');
    }
}
