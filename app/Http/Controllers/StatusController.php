<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\PerpindahanPenduduk;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
   public function index()
{
    if (strtolower(Auth::user()->role) === 'admin') {

        $pengajuan = Pengajuan::all();
        $perpindahan = PerpindahanPenduduk::all();

    } else {

        $pengajuan = Pengajuan::where('user_id', Auth::id())->get();

        $perpindahan = PerpindahanPenduduk::where('user_id', Auth::id())->get();
    }

    return view('menu.status', compact('pengajuan', 'perpindahan'));
}
}
