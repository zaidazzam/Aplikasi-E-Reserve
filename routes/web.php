<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LayananController;
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


// Guest //
Route::get('/beranda', [GuestController::class, 'landing']);
Route::get('/beranda/homestay', [GuestController::class, 'categori']);
Route::get('/beranda/homestay/detail', [GuestController::class, 'homestayDetail']);
Route::get('/pembayaran', [GuestController::class, 'checkoutHomestay']);
Route::get('/blog', [GuestController::class, 'blog']);
Route::get('/blog/detail', [GuestController::class, 'blogDetail']);
Route::get('/paket', [GuestController::class, 'pakeHomestay']);
Route::get('/tentang', [GuestController::class, 'tentang']);
Route::get('/u-homestay', [GuestController::class, 'mitraHomestay']);
Route::get('/pembayaran/metode', [GuestController::class, 'pilihMetode']);
Route::get('/pembayaran/metode/konfirmasi', [GuestController::class, 'konfirmasiPembayaran']);


// Route::get('/dashboard', [DashboardController::class, 'konfirmasiPembayaran']);


// Dashboard //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Homestay //
Route::get('/datahomestay', [HomestayController::class, 'index'])->middleware(['auth']);
Route::get('/tambahhomestay', [HomestayController::class, 'create'])->middleware(['auth']);
Route::get('/edithomestay', [HomestayController::class, 'editHomestay'])->middleware(['auth']);
Route::get('/tambahhomestay/fasilitas/', [HomestayController::class, 'tambahFasilitas'])->middleware(['auth']);
Route::get('/tambahhomestay/gambar/', [HomestayController::class, 'tambahGambar'])->middleware(['auth']);


// Fasilitas Homestay
Route::get('/datafasilitas', [FasilitasController::class, 'index'])->middleware(['auth']);
Route::get('/tambahfasilitas', [FasilitasController::class, 'tambahFasilitas'])->middleware(['auth']);

// Fasilitas Homestay
Route::get('/datapaketwisata', [PaketWisataController::class, 'index'])->middleware(['auth']);
Route::get('/tambahpaketwisata', [PaketWisataController::class, 'tambahWisata'])->middleware(['auth']);
Route::get('/editpaketwisata', [PaketWisataController::class, 'editWisata'])->middleware(['auth']);



// Fasilitas Homestay
Route::get('/dataartikel', [ArtikelController::class, 'index'])->middleware(['auth']);
Route::get('/tambahartikel', [ArtikelController::class, 'tambahArtikel'])->middleware(['auth']);
Route::get('/editartikel', [ArtikelController::class, 'editArtikel'])->middleware(['auth']);


// Layanan Tambahan Homestay
Route::get('/datalayanan', [LayananController::class, 'index'])->middleware(['auth']);
Route::get('/tambahlayanan', [LayananController::class, 'tambahLayanan'])->middleware(['auth']);
Route::get('/editlayanan', [LayananController::class, 'editLayanan'])->middleware(['auth']);




require __DIR__.'/auth.php';
