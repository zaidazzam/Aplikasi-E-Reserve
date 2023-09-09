<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function Index() {

        return view ('admin.fasilitas.data-fasilitas');

    }
    public function tambahFasilitas() {

        return view ('admin.fasilitas.tambah-fasilitas');

    }
}
