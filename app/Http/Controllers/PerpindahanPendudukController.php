<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerpindahanPenduduk;

class PerpindahanPendudukController extends Controller
{
    public function index()
    {
        return view('perpindahan.index');
    }

    public function store(Request $request)
    {
        PerpindahanPenduduk::create([
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
        ]);

        return redirect('/status')
            ->with('success', 'Pengajuan perpindahan berhasil dikirim');
    }
}