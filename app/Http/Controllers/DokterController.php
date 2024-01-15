<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function postRegister(Request $request) {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email:dns',
        'jenisKelamin' => 'required',
        'password' => 'required|min:8|max:20|confirmed',
        'noktp' => 'required|max:16'
        ]);
        
        $user = new Dokter();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);
        $user->noktp = $request->noktp;
        $user->save();

        if($user){
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    }
    public function postLogin(Request $request) {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);
        if(Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->level == 'dokter') {
                return redirect('/user/dokter');
            }
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
