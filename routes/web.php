<?php

use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\SuratContrroller;
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::resource('/peminjam', PeminjamController::class);
    Route::resource('pegawai', UserController::class);
    Route::get('/surat/{peminjam:id}', [SuratContrroller::class, 'surat'])->name('cetak_surat');
    Route::get('/detail-peminjam/{peminjam:id}', [SuratContrroller::class, 'detail'])->name('detail_peminjam');
    Route::get('/dashboard', [SuratContrroller::class, 'dashboard'])->name('dashboard');
    Route::get('/detail-peminjamd/{peminjam:id}', [SuratContrroller::class, 'detailDashboard'])->name('detailDashboard');
    Route::get('/search-peminjam', [PeminjamController::class, 'search'])->name('peminjam.search');
});

Route::middleware('guest')->group(function () {
    Route::get('/', [SuratContrroller::class, 'index'])->name('login');
    Route::post('/login', [SuratContrroller::class, 'login'])->name('login.action');
});
Route::post('/logout', [SuratContrroller::class, 'logout'])->name('logout');
