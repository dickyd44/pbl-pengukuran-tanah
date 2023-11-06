<?php

use Twilio\Http\File;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilUkurController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\SuratTugasController;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/', DashboardController::class)->middleware('auth');
Route::resource('/permohonan', PermohonanController::class)->middleware('auth');
Route::resource('/hasil-ukur', HasilUkurController::class)->middleware('auth');
Route::resource('/surat-tugas', SuratTugasController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');

Route::get('/dokumen-surat-tugas/{id}', [DokumenController::class, 'dokumensurattugas'])->name('dokumen-surat-tugas')->middleware('auth');

// Route::get('/storage/{filename}', function ($filename) {
//     $path = storage_path('public/' . $filename);

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// });
