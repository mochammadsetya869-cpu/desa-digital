<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::all();

        $total = $data->count();
        $laki = $data->where('jenis_kelamin', 'L')->count();
        $perempuan = $data->where('jenis_kelamin', 'P')->count();

        // ================= UMUR =================
        $balita = 0;
        $anak = 0;
        $dewasa = 0;
        $lansia = 0;

        foreach ($data as $p) {
            $umur = \Carbon\Carbon::parse($p->tanggal_lahir)->age;

            if ($umur <= 5) {
                $balita++;
            } elseif ($umur <= 17) {
                $anak++;
            } elseif ($umur <= 59) {
                $dewasa++;
            } else {
                $lansia++;
            }
        }
        // ================= PENDIDIKAN =================
        $tidak = $data->filter(fn($p) =>
            str_contains(strtolower(trim($p->pendidikan ?? '')), 'tidak')
        )->count();

        $sd = $data->filter(fn($p) =>
            str_contains(strtolower(trim($p->pendidikan ?? '')), 'sd')
        )->count();

        $smp = $data->filter(fn($p) =>
            str_contains(strtolower(trim($p->pendidikan ?? '')), 'smp')
        )->count();

        $sma = $data->filter(fn($p) =>
            str_contains(strtolower(trim($p->pendidikan ?? '')), 'sma')
        )->count();
        
        $diploma = $data->filter(function ($p) {
            $pendidikan = strtolower(trim($p->pendidikan ?? ''));

            return str_contains($pendidikan, 'diploma') ||
                str_contains($pendidikan, 'sarjana');
        })->count();

        // ================= PEKERJAAN =================
        $petani = $data->where('pekerjaan', 'Petani')->count();
        $buruh = $data->where('pekerjaan', 'Buruh')->count();
        $wiraswasta = $data->where('pekerjaan', 'Wiraswasta')->count();
        $pns = $data->where('pekerjaan', 'PNS/TNI/Polri')->count();
        $tidakKerja = $data->where('pekerjaan', 'Tidak Bekerja')->count();
        $pensiunan = $data->where('pekerjaan', 'Pensiunan')->count();


        // ================= AGAMA =================
        $islam = $data->filter(fn($p) => strtolower($p->agama) == 'islam')->count();
        $kristen = $data->filter(fn($p) => strtolower($p->agama) == 'kristen')->count();
        $katolik = $data->filter(fn($p) => strtolower($p->agama) == 'katolik')->count();
        $hindu = $data->filter(fn($p) => strtolower($p->agama) == 'hindu')->count();
        $budha = $data->filter(fn($p) => strtolower($p->agama) == 'budha')->count();

        // ================= DATA KK (DINAMIS) =================
        $jumlahKK = ceil($total / 4); // asumsi 1 KK = 4 orang
        $rataAnggota = $jumlahKK ? round($total / $jumlahKK, 1) : 0;

        return view('menu.penduduk', compact(
            'data',
            'total','laki','perempuan',
            'balita','anak','dewasa','lansia',

            // pendidikan
            'tidak','sd','smp','sma','diploma',

            // pekerjaan
            'petani','buruh','wiraswasta','pns','tidakKerja', 'pensiunan',

            // agama
            'islam','kristen','katolik','hindu','budha',

            // kk
            'jumlahKK','rataAnggota'
        ));
    }

    public function create()
    {
        return view('menu.penduduk_create');
    }

    public function store(Request $request)
    {
        Penduduk::create($request->all());
        return redirect('/data-penduduk');
    }

    public function edit($id)
    {
        $p = Penduduk::findOrFail($id);
        return view('menu.penduduk_edit', compact('p'));
    }

    public function update(Request $request, $id)
    {
        $p = Penduduk::findOrFail($id);
        $p->update($request->all());
        return redirect('/data-penduduk');
    }

    public function destroy($id)
    {
        Penduduk::destroy($id);
        return redirect('/data-penduduk');
    }
}