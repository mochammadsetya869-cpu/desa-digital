<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use App\Models\PerpindahanPenduduk;
use Barryvdh\DomPDF\Facade\Pdf;

class ArsipController extends Controller
{
    public function index()
    {
        if (strtolower(Auth::user()->role) !== 'admin') {
            return redirect('/dashboard')
                ->with('error', 'Akses hanya untuk admin');
        }

        $pengajuan = Pengajuan::where('status', 'selesai')
                        ->latest()
                        ->get();

        $perpindahan = PerpindahanPenduduk::where('status', 'selesai')
                        ->latest()
                        ->get();

        return view('menu.arsip', compact(
            'pengajuan',
            'perpindahan'
        ));
    }

    public function lihatPengajuan($id)
    {
        $data = Pengajuan::findOrFail($id);

        return view('menu.detail_pengajuan', compact('data'));
    }

    public function lihatPerpindahan($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        return view('menu.detail_perpindahan', compact('data'));
    }

    public function downloadPengajuan($id)
    {
        $data = Pengajuan::findOrFail($id);

        $pdf = Pdf::loadView('pdf.pengajuan_pdf', compact('data'));

        return $pdf->download('pengajuan-'.$data->id.'.pdf');
    }

    public function downloadPerpindahan($id)
    {
        $data = PerpindahanPenduduk::findOrFail($id);

        $pdf = Pdf::loadView('pdf.perpindahan_pdf', compact('data'));

        return $pdf->download('perpindahan-'.$data->id.'.pdf');
    }

}