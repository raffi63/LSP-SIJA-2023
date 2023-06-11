<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', function() {
return view('home');
})->name('home')->middleware('auth');

// Route::get('/downloadpdf', [laporanController::class, 'downloadpdf']);

Route::group(['middleware' => 'apoteker'], function () {
    // Rute-rute yang hanya dapat diakses oleh Apoteker
    Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');
    Route::resource('distributor', \App\Http\Controllers\distributorController::class)->middleware('auth');
    Route::resource('obat', \App\Http\Controllers\obatController::class)->middleware('auth');
});

Route::group(['middleware' => 'pemilik'], function () {
    // Rute-rute yang hanya dapat diakses oleh Pemilik
    Route::get('/laporan', function () {return view('laporan');});
    Route::get('/laporanadmin', [App\Http\Controllers\HomeController::class, 'laporanadmin'])->name('laporanadmin');
    Route::get('/laporanadmin1', [App\Http\Controllers\HomeController::class, 'laporanadmin1'])->name('laporanadmin1');
});

Route::group(['middleware' => 'gudang'], function () {
    // Rute-rute yang hanya dapat diakses oleh Gudang
    Route::resource('pembelian', \App\Http\Controllers\pembelianController::class)->middleware('auth');
    Route::resource('detail_pembelian', \App\Http\Controllers\detail_pembelianController::class)->middleware('auth');
});

Route::group(['middleware' => 'kasir'], function () {
    // Rute-rute yang hanya dapat diakses oleh Kasir
    Route::resource('penjualan', \App\Http\Controllers\penjualanController::class)->middleware('auth');
    Route::resource('detail_penjualan', \App\Http\Controllers\detail_penjualanController::class)->middleware('auth');
});

