<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\PendaftaranController;

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

Route::get('/', function () {
    return view('index', ['title' => 'Homepage']); // Menampilkan halaman dashboard
});

Route::resource('pendaftaran', PendaftaranController::class); // Mengatur rute untuk halaman pendaftaran
Route::get('/get-mahasiswa/{nim}', [PendaftaranController::class, 'getMahasiswa']); // Mendapatkan data mahasiswa berdasarkan NIM

Route::resource('hasil', HasilController::class); // Mengatur rute untuk halaman hasil
