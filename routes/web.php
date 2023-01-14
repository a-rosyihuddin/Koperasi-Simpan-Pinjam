<?php

use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\SuratContrroller;
use App\Models\Peminjam;
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


Route::resource('/', PeminjamController::class);
Route::get('/surat/{peminjam:id}', [SuratContrroller::class, 'surat']);
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/contoh', function () {
//     return view('contoh');
// });
// Route::get('/1', function () {
//     return view('PERJANJIAN-HUTANG');
// });
