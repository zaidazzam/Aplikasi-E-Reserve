<?php

namespace App\Http\Controllers;
use App\Models\Homestay;
use App\Models\Paket;
use App\Models\Artikel;
use Carbon\Carbon;
use App\Models\Transaksi;
use App\Models\image_homestay;
use App\Models\paket_transaksi;
use App\Models\service_tambahan;
use App\Models\service_transaksi;

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
        $homestay = Homestay::all();

        return view ('guest.categori-homestay', compact('homestay'));
     }
    public function homestayDetail($id){
        $homestay = Homestay::find($id);
        //show aa list image home stay by homestay id @param $id
        $list_image_homestay = image_homestay::where('homestay_id',$id)->get();
        return view ('guest.detail-homestay',compact('homestay','list_image_homestay'));
    }
    public function checkoutHomestay($idhomestay,$checkin,$checkout){
        $checkin_new = Carbon::parse($checkin); // Replace with your check-in date
        $checkout_new = Carbon::parse($checkout);
        $numberOfDays = $checkout_new->diffInDays($checkin_new);
        $pakets = Paket::all();
        $service_tambahan = service_tambahan::all();
        $homestay = Homestay::find($idhomestay);
        return view ('guest.checkout-homestay',compact('homestay','checkin','checkout','numberOfDays','pakets','service_tambahan'));
        return view ('guest.checkout-homestay');
    }
    public function blog(){
        $artikel = Artikel::all();

        return view ('guest.blog', compact('artikel'));
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
        $pakets = Paket::all();
        return view ('guest.paket-homestay',compact('pakets',));
        }
    public function detailPaket($id){
            $item = Paket::find($id);
            if (!$item) {
                abort(404);
            }
            return view ('guest.paket-detail',compact('item'));
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
        $total_harga = 0;
        $total_harga_service = 0;
        $detail_transaksi = Transaksi::find($id);
        //show list paket transaksi where transaksi id = $id
        $list_paket_transaksi = paket_transaksi::where('transaksi_id',$id)->get();
        $list_service_transaksi = service_transaksi::where('transaksi_id',$id)->get();
        //sum harga in pake where in paket transaksi paket id = paket id
        foreach ($list_paket_transaksi as $paket) {
            $total_harga += paket::where('id',$paket->paket_id)->sum('harga');
        }

        foreach ($list_service_transaksi as $paket) {
            $total_harga_service += service_tambahan::where('id',$paket->service_tambahan_id)->sum('harga');
        }

        return view ('guest.konfirmasi-pembayaran',compact('detail_transaksi','list_paket_transaksi','total_harga','list_service_transaksi','total_harga_service'));
    }
}
