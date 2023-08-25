<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeStayController;
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

Route::get('/beranda', [HomeStayController::class, 'landing']);
Route::get('/beranda/homestay', [HomeStayController::class, 'categori']);
Route::get('/beranda/homestay/detail', [HomeStayController::class, 'homestayDetail']);
Route::get('/pembayaran', [HomeStayController::class, 'checkoutHomestay']);
Route::get('/blog', [HomeStayController::class, 'blog']);
Route::get('/blog/detail', [HomeStayController::class, 'blogDetail']);
Route::get('/paket', [HomeStayController::class, 'pakeHomestay']);
Route::get('/tentang', [HomeStayController::class, 'tentang']);
Route::get('/u-homestay', [HomeStayController::class, 'mitraHomestay']);
Route::get('/pembayaran/metode', [HomeStayController::class, 'pilihMetode']);
Route::get('/pembayaran/metode/konfirmasi', [HomeStayController::class, 'konfirmasiPembayaran']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
