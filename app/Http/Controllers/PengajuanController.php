<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('menu.pengajuan');
    }
    
    public function store(Request $request)
{
    Pengajuan::create([
        'jenis_surat' => $request->jenis_surat,
        'nik' => $request->nik,
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'alamat' => $request->alamat,
        'agama' => $request->agama,
        'pekerjaan' => $request->pekerjaan,
        'keterangan' => $request->keterangan,
    ]);

    return redirect('/pengajuan')->with('success', 'Berhasil dikirim');
}
}
