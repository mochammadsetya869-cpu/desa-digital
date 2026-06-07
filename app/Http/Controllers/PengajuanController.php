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
        $request->validate(
        [
            'nik' => 'required|digits:16',
        ],
        [
            'nik.required' => 'NIK wajib diisi',
            'nik.digits' => 'NIK harus terdiri dari 16 digit',
        ]);

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

        $data->nomor_kk = $request->nomor_kk;
        $data->status_perkawinan = $request->status_perkawinan;
        $data->alasan_pengajuan = $request->alasan_pengajuan;

        $data->nama_anak = $request->nama_anak;
        $data->nik_anak = $request->nik_anak;
        $data->sekolah_tujuan = $request->sekolah_tujuan;
        $data->tujuan_penggunaan = $request->tujuan_penggunaan;

        $data->hubungan_pelapor = $request->hubungan_pelapor;
        $data->nama_almarhum = $request->nama_almarhum;
        $data->nik_almarhum = $request->nik_almarhum;
        $data->penyebab_meninggal = $request->penyebab_meninggal;
        $data->tempat_meninggal = $request->tempat_meninggal;

        $data->penghasilan_bulanan = $request->penghasilan_bulanan;

        $data->nama_usaha = $request->nama_usaha;
        $data->jenis_usaha = $request->jenis_usaha;
        $data->alamat_usaha = $request->alamat_usaha;
        $data->tahun_berdiri = $request->tahun_berdiri;

        $data->alamat_asal = $request->alamat_asal;
        $data->alamat_domisili = $request->alamat_domisili;
        $data->tanggal_mulai_menetap = $request->tanggal_mulai_menetap;

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
        if(Auth::user()->role == 'admin'){
            return redirect('/dashboard')
                ->with('error','Admin tidak dapat mengedit pengajuan warga');
        }

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

        $data->nomor_kk = $request->nomor_kk;
        $data->status_perkawinan = $request->status_perkawinan;
        $data->alasan_pengajuan = $request->alasan_pengajuan;

        $data->nama_anak = $request->nama_anak;
        $data->nik_anak = $request->nik_anak;
        $data->sekolah_tujuan = $request->sekolah_tujuan;
        $data->tujuan_penggunaan = $request->tujuan_penggunaan;

        $data->hubungan_pelapor = $request->hubungan_pelapor;
        $data->nama_almarhum = $request->nama_almarhum;
        $data->nik_almarhum = $request->nik_almarhum;
        $data->penyebab_meninggal = $request->penyebab_meninggal;
        $data->tempat_meninggal = $request->tempat_meninggal;

        $data->penghasilan_bulanan = $request->penghasilan_bulanan;

        $data->nama_usaha = $request->nama_usaha;
        $data->jenis_usaha = $request->jenis_usaha;
        $data->alamat_usaha = $request->alamat_usaha;
        $data->tahun_berdiri = $request->tahun_berdiri;

        $data->alamat_asal = $request->alamat_asal;
        $data->alamat_domisili = $request->alamat_domisili;
        $data->tanggal_mulai_menetap = $request->tanggal_mulai_menetap;

        $data->status = 'pending';

        $data->catatan_admin = null;

        $data->save();

        return redirect('/status');
    }
}
