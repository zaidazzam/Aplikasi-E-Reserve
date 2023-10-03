<?php

namespace App\Http\Controllers;
use App\Models\Homestay;
use App\Models\Paket;
use App\Models\Artikel;
use Carbon\Carbon;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing() {
        $homestay = Homestay::all();
        $pakets = Paket::all();
        $artikel = Artikel::all();
        return view ('guest.landing-page', compact('homestay','pakets','artikel'));
    }
    
    public function categori()
    {
        return view ('guest.categori-homestay');
    }
    public function homestayDetail($id){
        $homestay = Homestay::find($id);
        return view ('guest.detail-homestay',compact('homestay'));
    }
    public function checkoutHomestay($idhomestay,$checkin,$checkout){
        $checkin_new = Carbon::parse($checkin); // Replace with your check-in date
        $checkout_new = Carbon::parse($checkout); 
        $numberOfDays = $checkout_new->diffInDays($checkin_new);

        $homestay = Homestay::find($idhomestay);
        return view ('guest.checkout-homestay',compact('homestay','checkin','checkout','numberOfDays'));
        return view ('guest.checkout-homestay');
    }
    public function blog(){
        return view ('guest.blog');
    }
    public function blogDetail($id){
        $list_article = Artikel::latest()->take(3)->get();
        $item = Artikel::find($id);
        if (!$item) {
            abort(404);
        }
        return view ('guest.blog-detail',compact('item','list_article'));
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
    public function konfirmasiPembayaran($id){
        $detail_transaksi = Transaksi::find($id);
        return view ('guest.konfirmasi-pembayaran',compact('detail_transaksi'));
    }
}
