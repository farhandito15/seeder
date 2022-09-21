<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RuanganController;
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

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan');
