<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data User';
        $data['q'] = $request->q;
        $data['rows'] = User::where('name', 'like', '%' . $request->q . '%')->get();
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah User';
        $data['levels'] = ['admin' => 'Admin', 'user' => 'User'];
        return view('user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'level' => 'required',
    //         'email' => 'required|unique:tb_user',
    //         'password' => 'required',
    //     ]);

    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->level = $request->level;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->save();
    //     return redirect('user')->with('success', 'Tambah Data Berhasil');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'karyawan',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('user')->with('success', 'Tambah Data Berhasil');

    }
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $user;
        $data['levels'] = ['admin' => 'Admin', 'karyawan' => 'karyawan'];
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required',
        ]);

        $user->name = $request->name;
        $user->level = $request->level;
        $user->email = $request->email;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->save();
        return redirect('user')->with('success', 'Ubah Data Berhasil');
    }

    public function generate ($id){
        $user = User::findOrFail($id);
        $qrcode = QrCode::size(100)->generate($user->name);
        return view('qrcode.qrcode',compact('qrcode'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('user')->with('success', 'Hapus Data Berhasil');
    }

    public function setting() {
        $data = array('title' => 'Setting Profil');
        return view('user.setting', $data);
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, User $user)
    {
        $user = auth()->user();
        $request->validate([
            'password'                => 'required|',
            'password_baru'           => 'required|min:6|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password'     => 'required|min:6'
        ]);

        if (Hash::check($request->password, $user->password)) {
            if ($request->password == $request->konfirmasi_password) {
                return redirect('profil')->with('warning','Password gagal diperbarui, tidak ada yang berubah pada kata sandi');
            } else {
                $user->password = Hash::make($request->konfirmasi_password);
                $user->save();
                return redirect('profil')->with('success','Password berhasil diperbarui');
            }
        } else {
            return redirect('profil')->with('warning','Password tidak cocok dengan kata sandi lama');
        }
    }
}