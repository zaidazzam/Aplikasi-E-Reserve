<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing() {

        return view ('guest.landing-page');

    }
    public function categori()
    {
        return view ('guest.categori-homestay');
    }
    public function homestayDetail(){
        return view ('guest.detail-homestay');
    }
    public function checkoutHomestay(){
        return view ('guest.checkout-homestay');
    }
    public function blog(){
        return view ('guest.blog');
    }
    public function blogDetail(){
        return view ('guest.blog-detail');
    }
    public function pakeHomestay(){
        return view ('guest.paket-homestay');
    }
    public function tentang(){
        return view ('guest.tentang');
    }
    public function mitraHomestay(){
        return view ('guest.mitra-homestay');
    }
    public function pilihMetode(){
        return view ('guest.metode-pembayaran');
    }
    public function konfirmasiPembayaran(){
        return view ('guest.konfirmasi-pembayaran');
    }
}
