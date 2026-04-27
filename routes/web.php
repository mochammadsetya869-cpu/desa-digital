<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengajuanController;

use App\Models\ProfilDesa;
use App\Models\Penduduk;
use App\Http\Controllers\StatusController;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| GROUP AUTH
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    ================= PROFIL DESA =================
    */

    Route::get('/profil', function () {
        $profil = ProfilDesa::first();
        return view('menu.profil', compact('profil'));
    });

    Route::get('/profil/edit', function () {
        if (strtolower(Auth::user()->role) !== 'admin') {
            abort(403);
        }

        $profil = ProfilDesa::first();
        return view('menu.profil_edit', compact('profil'));
    });

    Route::post('/profil/update', function (Request $request) {
        if (strtolower(Auth::user()->role) !== 'admin') {
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


    /*
    ================= MENU LAIN =================
    */

    Route::get('/arsip', function () {
        if (strtolower(Auth::user()->role) !== 'admin') {
            return redirect('/dashboard')->with('error', 'Akses hanya untuk admin');
        }

        return view('menu.arsip');
    });

    Route::get('/status', [StatusController::class, 'index']);
    Route::get('/perpindahan', fn() => view('menu.perpindahan'));


    /*
    ================= PENGAJUAN =================
    */

    Route::get('/pengajuan', [PengajuanController::class, 'index']);
    Route::post('/pengajuan/store', [PengajuanController::class, 'store']);


    /*
    ================= DATA PENDUDUK =================
    */

    Route::get('/data-penduduk', [PendudukController::class, 'index']);

    // CREATE
    Route::get('/penduduk/create', function () {
        if (strtolower(Auth::user()->role) !== 'admin') {
            abort(403);
        }

        return view('menu.penduduk_create');
    });

    Route::post('/penduduk/store', function (Request $request) {

        if (strtolower(Auth::user()->role) !== 'admin') {
            abort(403);
        }

        $request->validate([
            'nik' => 'required|unique:penduduk,nik',
        ]);

        Penduduk::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan' => $request->pendidikan,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
        ]);

        return redirect('/data-penduduk')->with('success', 'Data berhasil ditambahkan');
    });


    // EDIT
    Route::get('/penduduk/edit/{id}', function ($id) {
        if (strtolower(Auth::user()->role) !== 'admin') {
            abort(403);
        }

        $p = Penduduk::findOrFail($id);

        return view('menu.penduduk_edit', compact('p'));
    });

    Route::post('/penduduk/update/{id}', function (Request $request, $id) {
        if (strtolower(Auth::user()->role) !== 'admin') {
            abort(403);
        }

        $p = Penduduk::findOrFail($id);

        $p->update($request->all());

        return redirect('/data-penduduk')->with('success', 'Data berhasil diupdate');
    });


    // DELETE
    Route::get('/penduduk/hapus/{id}', function ($id) {
        if (strtolower(Auth::user()->role) !== 'admin') {
            abort(403);
        }

        Penduduk::findOrFail($id)->delete();

        return redirect('/data-penduduk')->with('success', 'Data berhasil dihapus');
    });

});