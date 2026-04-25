<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index()
    {
        $data = Pengajuan::where('user_id', Auth::id())->get();

        return view('menu.status', compact('data'));
    }
}
