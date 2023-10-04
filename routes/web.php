<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\HomeController;

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
//     return view('welcome');
// });




// Guest //
Route::get('/', [GuestController::class, 'landing']);
Route::get('/homestay', [GuestController::class, 'categori']);
Route::get('/homestay/detail/{id}', [GuestController::class, 'homestayDetail'])->name('homestay.detail');
Route::get('/pembayaran/{idhomestay}/{checkin}/{checkout}', [GuestController::class, 'checkoutHomestay']);
Route::get('/blog', [GuestController::class, 'blog']);
Route::get('/blog/detail/{id}', [GuestController::class, 'blogDetail'])->name('blog.detail');
Route::get('/paket/detail/{id}', [GuestController::class, 'detailPaket'])->name('pakets.detail');
Route::get('/layanan/detail/{id}', [GuestController::class, 'paketDetail'])->name('paket.detail');
Route::get('/paket', [GuestController::class, 'pakeHomestay']);
Route::get('/tentang', [GuestController::class, 'tentang']);
Route::get('/u-homestay', [GuestController::class, 'mitraHomestay']);
Route::get('/pembayaran/metode', [GuestController::class, 'pilihMetode']);
Route::get('/transaksi/detail/{id}', [GuestController::class, 'konfirmasiPembayaran'])->name('transaksi.detail');


// Route::get('/dashboard', [DashboardController::class, 'konfirmasiPembayaran']);


// Dashboard //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

// Pemilik Homestay
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth']);
Route::get('/datahomestaymitra', [HomeController::class, 'data'])->middleware(['auth']);
Route::get('/tambahhomestaymitra', [HomeController::class, 'tambah'])->middleware(['auth']);
Route::get('/edithomestaymitra', [HomeController::class, 'edit'])->middleware(['auth']);

// Homestay //
Route::get('/datahomestay', [HomestayController::class, 'index'])->name('homestays.index')->middleware(['auth', 'admin']);
Route::get('/tambahhomestay', [HomestayController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/homestays', [HomestayController::class, 'store'])->name('homestays.store');

// Display the update form
Route::get('/homestays/{homestays}/edit', [HomestayController::class, 'edit'])->name('homestays.edit');
Route::put('/homestays/{homestays}', [HomestayController::class, 'update'])->name('homestays.update');
Route::get('/tambahhomestay/fasilitas/', [HomestayController::class, 'tambahFasilitas'])->middleware(['auth', 'admin']);
Route::get('/tambahhomestay/gambar/', [HomestayController::class, 'tambahGambar'])->middleware(['auth', 'admin']);

Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/transaksi/pengeluaran', [TransaksiController::class, 'tambahPengeluaran'])->middleware(['auth', 'admin']);
Route::get('/transaksi/wisata', [TransaksiController::class, 'layananTransaksi'])->middleware(['auth', 'admin']);
Route::get('/transaksi/layanan', [TransaksiController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/transaksi/pendapatan/tambah', [TransaksiController::class, 'tambahPendapatan'])->middleware(['auth', 'admin']);


// Fasilitas Homestay
Route::get('/datafasilitas', [FasilitasController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/tambahfasilitas', [FasilitasController::class, 'tambahFasilitas'])->middleware(['auth', 'admin']);

// Fasilitas Homestay
Route::get('/datapaketwisata', [PaketWisataController::class, 'index'])->name('pakets.index')->middleware(['auth']);
Route::post('/pakets', [PaketWisataController::class, 'store'])->name('pakets.store');
Route::get('/tambahpaketwisata', [PaketWisataController::class, 'tambahWisata'])->middleware(['auth', 'admin']);
Route::get('/editpaketwisata', [PaketWisataController::class, 'editWisata'])->middleware(['auth', 'admin']);



// Fasilitas Homestay
Route::get('/dataartikel', [ArtikelController::class, 'index'])->name('artikels.index')->middleware(['auth', 'admin']);
Route::post('/artikels', [ArtikelController::class, 'store'])->middleware(['auth', 'admin'])->name('artikels.store');
Route::get('/tambahartikel', [ArtikelController::class, 'tambahArtikel'])->middleware(['auth', 'admin']);
Route::get('/editartikel', [ArtikelController::class, 'editArtikel'])->middleware(['auth', 'admin']);


// Layanan Tambahan Homestay
// Route::get('/datalayanan', [LayananController::class, 'index'])->middleware(['auth', 'admin'])->name('layanans.index');
// Route::post('/layanans', [LayananController::class, 'store'])->name('pakets.store');
// Route::get('/tambahlayanan', [LayananController::class, 'tambahLayanan'])->middleware(['auth', 'admin']);
// Route::get('/editlayanan', [LayananController::class, 'editLayanan'])->middleware(['auth', 'admin']);




require __DIR__.'/auth.php';
