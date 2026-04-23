<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use Carbon\Carbon;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ini role khusus admin//

Route::get('/arsip', function () {

    if(!Auth::check()){
        return redirect('/login');
    }

    if(strtolower(trim(Auth::user()->role)) !== 'admin'){
        return redirect('/dashboard')->with('error', 'Akses hanya untuk admin');
    }

    return view('menu.arsip');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ini khusus untuk warga dan admin apa bila blm login //
Route::middleware('auth')->group(function () {

    Route::get('/profil', function () {
    $profil = ProfilDesa::first();
    return view('menu.profil', compact('profil'));
});


// HALAMAN EDIT
Route::get('/profil/edit', function () {

    if(!Auth::check() || strtolower(trim(Auth::user()->role)) !== 'admin'){
    abort(403);
}

    $profil = ProfilDesa::first();
    return view('menu.profil_edit', compact('profil'));
});

// PROSES UPDATE
Route::post('/profil/update', function (Request $request) {

    if(!Auth::check() || strtolower(trim(Auth::user()->role)) !== 'admin'){
    abort(403);
}

    $profil = ProfilDesa::first();

    $profil->update([
        'nama_desa' => $request->nama_desa,
        'kecamatan' => $request->kecamatan,
        'kabupaten' => $request->kabupaten,
        'provinsi' => $request->provinsi,
        'kode_pos' => $request->kode_pos,
        'luas_wilayah' => $request->luas_wilayah,
        'visi' => $request->visi,
        'misi' => $request->misi,
    ]);

    return redirect('/profil')->with('success', 'Profil berhasil diupdate');
});

    Route::get('/pengajuan', fn() => view('menu.pengajuan'));
    Route::get('/status', fn() => view('menu.status'));
    Route::get('/perpindahan', fn() => view('menu.perpindahan'));
    
    /* ================= DATA PENDUDUK ================= */

Route::get('/data-penduduk', function () {

    $data = Penduduk::all();

$total = $data->count();
$laki = $data->where('jenis_kelamin', 'L')->count();
$perempuan = $data->where('jenis_kelamin', 'P')->count();

/* UMUR */
$balita = 0;
$anak = 0;
$dewasa = 0;
$lansia = 0;

foreach ($data as $d) {
    $umur = Carbon::parse($d->tanggal_lahir)->age;

    if ($umur <= 5) $balita++;
    elseif ($umur <= 17) $anak++;
    elseif ($umur <= 59) $dewasa++;
    else $lansia++;
}

/* ================= PENDIDIKAN ================= */
$sd = $data->where('pendidikan', 'SD')->count();
$smp = $data->where('pendidikan', 'SMP')->count();
$sma = $data->where('pendidikan', 'SMA')->count();
$diploma = $data->where('pendidikan', 'Diploma')->count();

/* ================= AGAMA ================= */
$islam = $data->where('agama', 'Islam')->count();
$kristen = $data->where('agama', 'Kristen')->count();
$katolik = $data->where('agama', 'Katolik')->count();
$hindu = $data->where('agama', 'Hindu')->count();
$budha = $data->where('agama', 'Budha')->count();

return view('menu.penduduk', compact(
    'data',
    'total','laki','perempuan',
    'balita','anak','dewasa','lansia',
    'sd','smp','sma','diploma',
    'islam','kristen','katolik','hindu','budha'
));
});


/* ===== TAMBAH ===== */
Route::post('/penduduk/store', function (Request $request) {

    if(strtolower(trim(Auth::user()->role)) !== 'admin'){
        abort(403);
    }

    Penduduk::create($request->all());

    return redirect('/data-penduduk');
});


/* ===== HAPUS ===== */
Route::get('/penduduk/hapus/{id}', function ($id) {

    if(strtolower(trim(Auth::user()->role)) !== 'admin'){
        abort(403);
    }

    Penduduk::find($id)->delete();

    return redirect('/data-penduduk');
});


/* ===== EDIT ===== */
Route::get('/penduduk/edit/{id}', function ($id) {

    if(strtolower(trim(Auth::user()->role)) !== 'admin'){
        abort(403);
    }

      $p = Penduduk::findOrFail($id);

    return view('menu.penduduk_edit', compact('p'));
});


Route::post('/penduduk/update/{id}', function (Request $request, $id) {

    $p = Penduduk::findOrFail($id);

    $p->update([
        'nik' => $request->nik,
        'nama' => $request->nama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_lahir' => $request->tanggal_lahir,
        'pekerjaan' => $request->pekerjaan,
    ]);

    return redirect('/data-penduduk')->with('success', 'Data berhasil diupdate');
});



/* ===== UPDATE ===== */
Route::post('/penduduk/update/{id}', function (Request $request, $id) {

    if(strtolower(trim(Auth::user()->role)) !== 'admin'){
        abort(403);
    }

    $p = Penduduk::find($id);

    $p->update($request->all());

    return redirect('/data-penduduk');
});

Route::get('/penduduk/create', function () {

    if(strtolower(trim(Auth::user()->role)) !== 'admin'){
        abort(403);
    }

    return view('menu.penduduk_create');
});


});


