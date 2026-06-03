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

            $request->validate(
            [
                'nik' => 'required|digits:16',
            ],
            [
                'nik.required' => 'NIK wajib diisi',
                'nik.digits' => 'NIK harus terdiri dari 16 digit',
            ]);

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

    

    // SELESAI
    public function selesai($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $data->status = 'selesai';

        $data->save();

        return back();
    }

    public function detail($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        return view('menu.perpindahan_detail_admin', compact('data'));
    }

    public function tolak(Request $request, $id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $data->status = 'ditolak';

        $data->catatan_admin = $request->catatan_admin;

        $data->save();

        return redirect('/perpindahan');
    }


    public function edit($id)
    {
        if(Auth::user()->role == 'admin'){
            return redirect('/dashboard')
                ->with('error','Admin tidak dapat mengedit data perpindahan');
        }

        $data = PerpindahanPenduduk::findOrFail($id);

        return view('menu.perpindahan_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jumlah_anggota = $request->jumlah_anggota;

        $data->alamat_asal = $request->alamat_asal;
        $data->alamat_tujuan = $request->alamat_tujuan;

        $data->provinsi_tujuan = $request->provinsi_tujuan;
        $data->kabupaten_tujuan = $request->kabupaten_tujuan;
        $data->kecamatan_tujuan = $request->kecamatan_tujuan;
        $data->desa_tujuan = $request->desa_tujuan;

        $data->alasan_pindah = $request->alasan_pindah;

        $data->status = 'pending';

        $data->catatan_admin = null;

        $data->save();

        return redirect('/status');
    }
}