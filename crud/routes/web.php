<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/tambah-mahasiswa', [MahasiswaController::class, 'create'])->name('tambah.mahasiswa');
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store'])->name('simpan.mahasiswa');
Route::get('/detail-mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('detail.mahasiswa');
