<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function Index() {

        return view ('admin.layanan.data-layanan');

    }
    public function tambahLayanan() {

        return view ('admin.layanan.tambah-layanan');
    }
    public function editLayanan() {

        return view ('admin.layanan.edit-layanan');

    }
}
