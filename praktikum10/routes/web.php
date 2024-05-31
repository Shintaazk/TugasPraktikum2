<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index']);

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
