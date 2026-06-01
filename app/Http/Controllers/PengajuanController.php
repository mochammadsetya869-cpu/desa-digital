<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;



class PengajuanController extends Controller
{


public function index(Request $request)
    {
        if(Auth::user()->role == 'admin'){
            $data = Pengajuan::all();
            return view('menu.pengajuan_admin', compact('data'));
        }

        $jenis = $request->jenis; // ← ini penting

        return view('menu.pengajuan', compact('jenis'));
    }
        
        public function store(Request $request)
    {
        $data = new Pengajuan();

        $data->user_id = Auth::id();

        $data->jenis_surat = $request->jenis_surat;

        $data->nik = $request->nik;

        $data->nama = $request->nama;

        $data->tempat_lahir = $request->tempat_lahir;

        $data->tanggal_lahir = $request->tanggal_lahir;

        $data->jenis_kelamin = $request->jenis_kelamin;

        $data->alamat = $request->alamat;

        $data->agama = $request->agama;

        $data->pekerjaan = $request->pekerjaan;

        $data->keterangan = $request->keterangan;

        $data->status = 'pending';

        $data->save();

        return redirect('/pengajuan')
            ->with('success', 'Berhasil dikirim');
    }

    public function detail($id)
    {
        $data = Pengajuan::findOrFail($id);

        return view('menu.pengajuan_detail_admin', compact('data'));
    }

    public function tolak(Request $request, $id)
    {
        $data = Pengajuan::findOrFail($id);

        $data->status = 'ditolak';

        $data->catatan_admin = $request->catatan_admin;

        $data->save();

        return redirect('/pengajuan');
    }

    public function edit($id)
    {
        $data = Pengajuan::findOrFail($id);

        return view('menu.pengajuan_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pengajuan::findOrFail($id);

        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->jenis_surat = $request->jenis_surat;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->keterangan = $request->keterangan;

        $data->status = 'pending';

        $data->catatan_admin = null;

        $data->save();

        return redirect('/status');
    }
}
