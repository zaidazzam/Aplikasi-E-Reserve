<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeStayController extends Controller
{
    public function landing() {

        return view ('homestay.landing-page');

    }
    public function categori()
    {
        return view ('homestay.categori-homestay');
    }
    public function homestayDetail(){
        return view ('homestay.detail-homestay');
    }
    public function checkoutHomestay(){
        return view ('homestay.checkout-homestay');
    }
    public function blog(){
        return view ('homestay.blog');
    }
    public function blogDetail(){
        return view ('homestay.blog-detail');
    }
    public function pakeHomestay(){
        return view ('homestay.paket-homestay');
    }
    public function tentang(){
        return view ('homestay.tentang');
    }
    public function mitraHomestay(){
        return view ('homestay.mitra-homestay');
    }
    public function pilihMetode(){
        return view ('homestay.metode-pembayaran');
    }
    public function konfirmasiPembayaran(){
        return view ('homestay.konfirmasi-pembayaran');
    }
}
