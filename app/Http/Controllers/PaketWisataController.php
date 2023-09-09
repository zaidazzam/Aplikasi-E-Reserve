<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function Index() {

        return view ('admin.paket.data-paket-wisata');

    }
    public function tambahWisata() {

        return view ('admin.paket.tambah-paket-wisata');
    }
    public function editWisata() {

        return view ('admin.paket.edit-paket-wisata');

    }
}
