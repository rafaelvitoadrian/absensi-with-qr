<?php

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

// Route::get('/', function () {
//     return view('operator.scan');
// });

// Route Mahasiswa Baru 
Route::prefix('admin')->group(function () {
    Route::resource('mahasiswa', \App\Http\Controllers\Admin\MahasiswaController::class);
    
});

Route::get('mahasiswa/cetak',[\App\Http\Controllers\Admin\MahasiswaController::class,'cetak'])->name('mahasiswa.cetak');

// Route Validasi dengan QR
// Validasi QR 1 (Hari Pertama)
Route::post('validasi/qr',[\App\Http\Controllers\Admin\MahasiswaController::class,'validasiQR'])->name('validasiqr');

//Validasi QR 2 (Hari Kedua)
Route::post('validasi/qr2',[\App\Http\Controllers\Admin\MahasiswaController::class,'validasiQR2'])->name('validasiqr2');

//Validasi QR 3 (Hari Ketiga)
Route::post('validasi/qr3',[\App\Http\Controllers\Admin\MahasiswaController::class,'validasiQR3'])->name('validasiqr3');

//VIew Validasi QR 1 - 3
Route::prefix('operator')->middleware('can:isAdminOperator')->group(function () {
    Route::get('/scan', [App\Http\Controllers\HomeController::class, 'scan'])->name('scan');
    Route::get('/scan1',[\App\Http\Controllers\Admin\MahasiswaController::class,'scan1'])->name('scan1');
    Route::get('/scan2',[\App\Http\Controllers\Admin\MahasiswaController::class,'scan2'])->name('scan2');
    Route::get('/scan3',[\App\Http\Controllers\Admin\MahasiswaController::class,'scan3'])->name('scan3');
});


Auth::routes(['register'=> false, 'reset' => false]);



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

