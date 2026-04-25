<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;



class PengajuanController extends Controller
{


public function index()
{
    if(Auth::user()->role == 'admin'){
        $data = \App\Models\Pengajuan::all();
        return view('menu.pengajuan_admin', compact('data'));
    }

    return view('menu.pengajuan');
}
    
    public function store(Request $request)
{
    Pengajuan::create([
    'user_id' => Auth::id(),
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
    'status' => 'Diproses'
]);

    return redirect('/pengajuan')->with('success', 'Berhasil dikirim');
}
}
