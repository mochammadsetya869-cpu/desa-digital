<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerpindahanPenduduk;
use Illuminate\Support\Facades\Auth;

class PerpindahanPendudukController extends Controller
{
    public function index()
    {
        // ADMIN
        if(Auth::user()->role == 'admin'){

            $data = PerpindahanPenduduk::all();

            return view('menu.perpindahan_admin', compact('data'));
        }

        // WARGA
        return view('menu.perpindahan');
    }

    public function store(Request $request)
    {
        PerpindahanPenduduk::create([

            'user_id' => Auth::id(),

            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,

            'alamat_asal' => $request->alamat_asal,
            'alamat_tujuan' => $request->alamat_tujuan,

            'provinsi_tujuan' => $request->provinsi_tujuan,
            'kabupaten_tujuan' => $request->kabupaten_tujuan,
            'kecamatan_tujuan' => $request->kecamatan_tujuan,
            'desa_tujuan' => $request->desa_tujuan,

            'alasan_pindah' => $request->alasan_pindah,
            'jumlah_anggota' => $request->jumlah_anggota,

            'status' => 'pending'
        ]);

        return redirect('/perpindahan')
            ->with('success', 'Permohonan berhasil dikirim');
    }

    // SETUJUI
    public function setujui($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $data->status = 'diproses';

        $data->save();

        return back();
    }

    // TOLAK
    public function tolak($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $data->status = 'ditolak';

        $data->save();

        return back();
    }

    // SELESAI
    public function selesai($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $data->status = 'selesai';

        $data->save();

        return back();
    }
}