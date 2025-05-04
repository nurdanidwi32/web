<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/dashboard', [PegawaiController::class, 'dashboard']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);