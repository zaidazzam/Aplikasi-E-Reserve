<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
       if(Auth::id()){

        $usertype = Auth()->user()->usertype;

        if($usertype == 'user'){
            return view('mitra.dashboard-mitra');
        }
        else if ($usertype == 'admin'){
            return view('dashboard');
        }
        else{
            return redirect()->back();
        }
       }
    }
    public function data()
    {
        return view('mitra.data-homestay-mitra');
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

