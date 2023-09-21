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
        return view('admin.transaksi.data-pendapatan');
    }
    public function pengeluaran()
    {
        return view('admin.transaksi.data-pengeluaran');
    }
}
