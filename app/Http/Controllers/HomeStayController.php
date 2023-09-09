<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function Index() {

        return view ('admin.homestay.data-homestay');

    }

    public function create() {

        return view ('admin.homestay.tambah-homestay');

    }
    public function tambahFasilitas() {

        return view ('admin.homestay.tambah-fasilitas-homestay');

    }
    public function tambahGambar() {

        return view ('admin.homestay.tambah-gambar-homestay');

    }
    public function editHomestay() {

        return view ('admin.homestay.edit-homestay');

    }
}
