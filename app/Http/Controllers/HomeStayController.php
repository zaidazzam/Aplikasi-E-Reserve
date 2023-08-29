<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function Index() {

        return view ('admin.homestay.data-homestay');

    }

    public function create() {

        return view ('admin.homestay.create-homestay');

    }
}
