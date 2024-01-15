<?php

namespace App\Http\Controllers;

use App\Models\rujukan;
use App\Models\User;
use App\Models\dokter;
use App\Models\layanan;
use App\Models\terimaRujukan;
use App\Charts\Statistik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class adminController extends Controller
{
    public function tambah()
    {
        return view('admin.tambah');
    }
    public function adminStats(Request $request, Statistik $Statistik)
    {
        $chart = $Statistik->build();
        $data = rujukan::all(['name', 'noktp', 'alamat', 'keluhan', 'kecamatan', 'desa', 'kodepos']);

        return view('admin.stats', compact('data', 'chart'));
    }
    public function postTambahDokter(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'spesialis' => 'required',
            'gambar' => 'required|image|max:5120',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $dokter = new dokter;

        $dokter->name = $request->name;
        $dokter->email = $request->email;
        $dokter->spesialis = $request->spesialis;
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $dokter->gambar = $filename;
        }

        $dokter->save();
        if ($dokter) {
            return back()->with('success', 'Dokter baru berhasil ditambah!');
        } else {
            return back()->with('failed', 'Gagal menambah dokter baru!');
        }
    }

    public function editDokter($id)
    {
        $dokter = dokter::find($id);
        return view('admin.editDokter', compact('dokter'));
    }
    public function postEditDokter(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'spesialis' => 'required',
        ]);
        $dokter = dokter::find($id);
        $dokter->name = $request->name;
        $dokter->email = $request->email;
        $dokter->spesialis = $request->spesialis;

        $dokter->save();
        if ($dokter) {
            return back()->with('success', 'dokter berhasil diupdate!');
        } else {
            return back()->with('failed', 'dokter gagal diupdate!');
        }
    }
    public function deleteDokter($id)
    {
        $dokter = dokter::find($id);

        $dokter->delete();
        if ($dokter) {
            return back()->with('success', 'Data dokter berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data dokter!');
        }
    }

    public function deleteUser($id)
    {
        $data = User::find($id);

        $data->delete();
        if ($data) {
            return back()->with('success', 'Data pengguna berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data pengguna!');
        }
    }


    public function homeAdmin()
    {
        $data = User::all(['id', 'name', 'email', 'jenis_kelamin', 'noktp', 'level']);
        return view('admin.home', compact('data'));
    }

    public function admindokter()
    {
        $data = Dokter::get();
        return view('admin.dokter', compact('data'));
    }

    public function adminservices()
    {
        $data = layanan::all();
        return view('admin.services', compact('data'));
    }
    public function adminTambahLayanan()
    {
        return view('admin.tambahLayanan');
    }

    public function postTambahLayanan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|max:5120',
        ]);

        $layanan = new layanan;

        $layanan->judul = $request->judul;
        $layanan->isi = $request->isi;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $layanan->gambar = $filename;
        }

        $layanan->save();
        if ($layanan) {
            return back()->with('success', 'Layanan baru berhasil ditambah!');
        } else {
            return back()->with('failed', 'Gagal menambah layanan baru!');
        }
    }

    public function deleteLayanan($id)
    {
        $layanan = layanan::find($id);

        $layanan->delete();
        if ($layanan) {
            return back()->with('success', 'Data layanan berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data layanan!');
        }
    }

    public function adminrujukan()
    {
        $data = rujukan::all();
        return view('admin.rujukan', compact('data'));
    }
    public function adminTerimaRujukan($id)
    {
        $data = rujukan::where('id', $id)->get();
        return view('admin.terimaRujukan', compact('data'));
    }
    public function postTambahRujukan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'noktp' => 'required',
            'alamat' => 'required',
            'keluhan' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kodepos' => 'required',
        ]);

        $user = new rujukan;

        $user->name = $request->name;
        $user->noktp = $request->noktp;
        $user->alamat = $request->alamat;
        $user->keluhan = $request->keluhan;
        $user->kecamatan = 'Bandar Laksamana';
        $user->desa = $request->desa;
        $user->kodepos = '28762';
        $user->status = 'Belum diterima';

        $user->save();
        if ($user) {
            return back()->with('success', 'Rujukan berhasil dikirim!. Silahkan tunggu beberapa saat!');
        } else {
            return back()->with('failed', 'Rujukan gagal dikirim!, silahkan coba lagi');
        }
    }
    public function postSudahDiterima($id)
    {
        $rujukan = rujukan::find($id);
    
        if ($rujukan) {
            $rujukan->status = 'Sudah diterima';
            $rujukan->save();
    
            return back()->with('success', 'Status rujukan berhasil diperbarui.');
        } else {
            return back()->with('failed', 'Gagal memperbarui status rujukan.');
        }
    }
    public function postTerimaRujukan(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'noktp' => 'required',
            'keluhan' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'noantrian' => 'required',
            'dokter' => 'required',
            'ruangan' => 'required',
            'jam' => 'required|date_format:H:i',
        ]);

        $admin = new terimaRujukan();

        $admin->name = $request->name;
        $admin->noktp = $request->noktp;
        $admin->keluhan = $request->keluhan;
        $admin->alamat = $request->alamat;
        $admin->kecamatan = $request->kecamatan;
        $admin->desa = $request->desa;
        $admin->noantrian = $request->noantrian;
        $admin->dokter = $request->dokter;
        $admin->ruangan = $request->ruangan;
        $admin->jam = $request->jam;

        $admin->save();
        if ($admin) {
            return back()->with('success', 'tanggapan berhasil dikembalikan');
        } else {
            return back()->with('failed', 'tanggapan gagal dikembalikan, silahkan coba lagi');
        }
    
    }

    public function cetakDataRujukan1()
    {
        $data = DB::table('terima_rujukan')
            ->select('terima_rujukan.*')
            ->get();
        $pdf = PDF::loadView('user.cetakRujukan', ['data' => $data]);
        return $pdf->stream();
    }

    public function cetakDataRujukan($id)
    {
        $data = terimaRujukan::where('id', $id)->get(); // Mengambil data berdasarkan ID yang diterima
        $pdf = PDF::loadView('user.cetakRujukan', ['data' => $data]);
        return $pdf->stream();
    }


    public function userrujukan()
    {
        return view('user.rujukan');
    }
    public function hasilRujukan1()
    {
        $data = terimaRujukan::all(['id', 'name', 'keluhan', 'noantrian', 'dokter', 'ruangan', 'jam']);
        return view('user.hasilRujukan', compact('data'));
    }
    public function hasilRujukan()
    {
        // Ambil noktp pengguna yang saat ini masuk
        $userNoktp = Auth::user()->noktp;

        // Ambil hanya data rujukan yang terkait dengan noktp pengguna yang saat ini masuk
        $data = terimaRujukan::where('noktp', $userNoktp)->get();
        return view('user.hasilRujukan', compact('data'));
    }
    public function userdokter()
    {
        $dokter = Dokter::get();
        return view('user.dokter', compact('dokter'));
    }
    public function userservices()
    {
        $data = layanan::get();
        return view('user.services', compact('data'));
    }
}
