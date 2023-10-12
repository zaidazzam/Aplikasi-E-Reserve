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
use App\Http\Controllers\ImageHomestayController;
use App\Http\Controllers\PemilikHomestay\DashboardController as PemilikHomestayDashboardController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ServiceTambahanController;


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
Route::get('/paket', [GuestController::class, 'pakeHomestay']);
Route::get('/tentang', [GuestController::class, 'tentang']);
Route::get('/u-homestay', [GuestController::class, 'mitraHomestay']);
Route::get('/pembayaran/metode', [GuestController::class, 'pilihMetode']);
Route::get('/transaksi/detail/{id}', [GuestController::class, 'konfirmasiPembayaran'])->name('transaksi.detail');
Route::post('/homestay/ulasan/{id}', [GuestController::class, 'ulasanStore'])->name('ulasan.store');


// Route::get('/dashboard', [DashboardController::class, 'konfirmasiPembayaran']);


// Dashboard //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');


// Homestay //
Route::get('/datahomestay', [HomestayController::class, 'index'])->name('homestays')->middleware(['auth', 'admin']);
Route::get('/tambahhomestay', [HomestayController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/homestays', [HomestayController::class, 'store'])->name('homestays.store');

// Display the update form
Route::get('/homestays/{homestays}/edit', [HomestayController::class, 'edit'])->name('homestays.edit')->middleware(['auth', 'admin']);
Route::put('/homestays/{homestays}', [HomestayController::class, 'update'])->name('homestays.update')->middleware(['auth', 'admin']);
Route::get('/tambahhomestay/fasilitas/{homestay_id}', [HomestayController::class, 'tambahFasilitas'])->middleware(['auth', 'admin'])->name('homestays.tambahfasilitas');
Route::post('/tambahhomestay/fasilitas/{homestay_id}/{fasilitas_id}', [HomestayController::class, 'tambahFasilitasStore'])->middleware(['auth', 'admin'])->name('homestays.tambahfasilitasStore');
Route::delete('/tambahhomestay/fasilitas/{homestay_id}/{fasilitas_id}', [HomestayController::class, 'deleteFasilitas'])->middleware(['auth', 'admin'])->name('homestays.deleteFasilitas');
Route::get('/tambahhomestay/gambar/{homestays}', [HomestayController::class, 'tambahGambar'])->name('homestays.image')->middleware(['auth', 'admin']);

Route::delete('/image/delete/{id}', [ImageHomestayController::class, 'destroy'])->name('image.delete')->middleware(['auth', 'admin']);


Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::post('/image/homestay', [ImageHomestayController::class, 'store'])->name('image_homestay.store')->middleware(['auth', 'admin']);
Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/transaksi/history', [TransaksiController::class, 'history'])->middleware(['auth', 'admin']);
Route::get('/transaksi/refund', [TransaksiController::class, 'refund'])->middleware(['auth', 'admin']);

Route::get('/transaksi/pengeluaran', [TransaksiController::class, 'tambahPengeluaran'])->middleware(['auth', 'admin']);
Route::get('/transaksi/wisata', [TransaksiController::class, 'layananTransaksi'])->middleware(['auth', 'admin']);
Route::get('/transaksi/service', [TransaksiController::class, 'serviceTransaksi'])->middleware(['auth', 'admin']);


Route::get('/transaksi/layanan', [TransaksiController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/transaksi/pendapatan/tambah', [TransaksiController::class, 'tambahPendapatan'])->middleware(['auth', 'admin']);
Route::put('/update_transaksi/{id}',  [TransaksiController::class, 'update_with_json'])->middleware(['auth', 'admin']);
Route::put('/update_trf/{id}',  [TransaksiController::class, 'update_trf_with_json'])->middleware(['auth', 'admin']);


// Fasilitas Homestayd
Route::get('/datafasilitas', [FasilitasController::class, 'index'])->middleware(['auth', 'admin'])->name('fasilitas.index');
Route::get('/tambahfasilitas', [FasilitasController::class, 'tambahFasilitas'])->middleware(['auth', 'admin']);
Route::post('/fasilitas', [FasilitasController::class, 'store'])->middleware(['auth', 'admin'])->name('fasilitas.store');

// Fasilitas Homestay
Route::get('/datapaketwisata', [PaketWisataController::class, 'index'])->name('pakets.index')->middleware(['auth', 'admin']);
Route::post('/pakets', [PaketWisataController::class, 'store'])->name('pakets.store');
Route::get('/tambahpaketwisata', [PaketWisataController::class, 'tambahWisata'])->middleware(['auth', 'admin']);
Route::get('/editpaketwisata', [PaketWisataController::class, 'editWisata'])->middleware(['auth', 'admin']);



// Fasilitas Homestay
Route::get('/dataartikel', [ArtikelController::class, 'index'])->name('artikels.index')->middleware(['auth', 'admin']);
Route::post('/artikels', [ArtikelController::class, 'store'])->name('artikels.store');
Route::get('/tambahartikel', [ArtikelController::class, 'tambahArtikel'])->middleware(['auth', 'admin']);
Route::get('/editartikel', [ArtikelController::class, 'editArtikel'])->middleware(['auth', 'admin']);


// Layanan Tambahan Homestay
Route::get('/datalayanan', [LayananController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/tambahlayanan', [LayananController::class, 'tambahLayanan'])->middleware(['auth', 'admin']);
Route::get('/editlayanan', [LayananController::class, 'editLayanan'])->middleware(['auth', 'admin']);

Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluarans.index')->middleware(['auth', 'admin']);
Route::post('/pengeluaran', [PengeluaranController::class, 'store'])->name('pengeluarans.store')->middleware(['auth', 'admin']);
Route::get('/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit'])->name('pengeluarans.edit')->middleware(['auth', 'admin']);
Route::put('/pengeluaran/update/{id}', [PengeluaranController::class, 'update'])->name('pengeluarans.update')->middleware(['auth', 'admin']);
Route::delete('/pengeluaran/delete/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluarans.delete')->middleware(['auth', 'admin']);


Route::get('/service', [ServiceTambahanController::class, 'index'])->name('service.index')->middleware(['auth', 'admin']);
Route::post('/service', [ServiceTambahanController::class, 'store'])->name('service.store')->middleware(['auth', 'admin']);
Route::get('/service/edit/{id}', [ServiceTambahanController::class, 'edit'])->name('service.edit')->middleware(['auth', 'admin']);
Route::put('/service/update/{id}', [ServiceTambahanController::class, 'update'])->name('service.update')->middleware(['auth', 'admin']);
Route::delete('/service/delete/{id}', [ServiceTambahanController::class, 'destroy'])->name('service.delete')->middleware(['auth', 'admin']);


// pemilik-homestay middleware

Route::get('/pemilik-homestay', [PemilikHomestayDashboardController::class, 'index'])->middleware(['auth', 'pemilik_homestay'])->name('pemilik_homestay.dashboard');
Route::get('/pemilik-homestay/datahomestay', [PemilikHomestayDashboardController::class, 'datahomestay'])->name('pemilik_homestay.datahomestay')->middleware(['auth', 'pemilik_homestay']);
Route::get('/pemilik-homestay/tambahhomestay', [PemilikHomestayDashboardController::class, 'tambahhomestay'])->name('pemilik_homestay.tambahhomestay')->middleware(['auth', 'pemilik_homestay']);
Route::post('/pemilik-homestay/tambahhomestay', [PemilikHomestayDashboardController::class, 'storehomestay'])->name('pemilik_homestay.storehomestay')->middleware(['auth', 'pemilik_homestay']);
Route::get('/pemilik-homestay/edithomestay/{homestay_id}', [PemilikHomestayDashboardController::class, 'showHomestay'])->name('pemilik_homestay.showHomestay')->middleware(['auth', 'pemilik_homestay']);
Route::put('/pemilik-homestay/edithomestay/{homestay_id}', [PemilikHomestayDashboardController::class, 'updateHomestay'])->name('pemilik_homestay.updateHomestay')->middleware(['auth', 'pemilik_homestay']);



require __DIR__.'/auth.php';
