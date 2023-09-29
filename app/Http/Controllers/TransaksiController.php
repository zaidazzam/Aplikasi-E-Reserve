<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('admin.transaksi.data-transaksi');
    }
    public function pendapatan()
    {
        return view('admin.transaksi.tambah-pendapatan');
    }
    public function tambahPendapatan()
    {
        return view('admin.transaksi.data-pendapatan');
    }
    public function pengeluaran()
    {
        return view('admin.transaksi.data-pengeluaran');
    }
    public function tambahPengeluaran()
    {
        return view('admin.transaksi.tambah-pengeluaran');
    }
    public function wisataTransaksi()
    {
        return view('admin.transaksi.wisata-transaksi');
    }
    public function serviceTransaksi()
    {
        return view('admin.transaksi.layanan-transaksi');
    }
}
