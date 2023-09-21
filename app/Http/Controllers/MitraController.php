<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        return view('mitra.dashboard-mitra');
    }

    public function data()
    {
        return view('mitra.data-mitra');
    }
    public function tambah()
    {
        return view('mitra.tambah-homestay-mitra');
    }
    public function edit()
    {
        return view('mitra.edit-homestay-mitra');
    }
}
