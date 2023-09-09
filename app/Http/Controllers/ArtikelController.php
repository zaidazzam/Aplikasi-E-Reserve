<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function Index() {

        return view ('admin.artikel.data-artikel');

    }
    public function tambahArtikel() {

        return view ('admin.artikel.tambah-artikel');
    }
    public function editArtikel() {

        return view ('admin.artikel.edit-artikel');

    }
}
