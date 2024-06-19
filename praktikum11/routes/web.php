<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/admin/dokter', [DokterController::class, 'index']);
Route::get('/admin/dokter/create', [DokterController::class, 'create'])->name('dokters.create');
Route::post('/admin/dokter/store', [DokterController::class, 'store'])->name('dokters.store');
Route::get('/admin/dokter/{dokter}', [DokterController::class, 'show'])->name('dokters.show');
Route::get('/admin/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('dokters.edit');
Route::put('/admin/dokter/{dokter}', [DokterController::class, 'update'])->name('dokters.update');
Route::delete('/admin/dokter/{dokter}', [DokterController::class, 'destroy'])->name('dokters.destroy');


Route::get('/admin/unit_kerja', [UnitKerjaController::class, 'index']);

Route::get('/admin/periksa', [PeriksaController::class, 'index']);

Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
