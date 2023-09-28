<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $transaksi = Transaksi::all();
       return response()->json($transaksi);
    //    return view ('admin.transaksi.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nomor_invoice' => 'required',
        //     'homestay_id' => 'required',
        //     'check_in' => 'required',
        //     'check_out' => 'required',
        //     'total_harga' => 'required',
        //     'nama_depan' => 'required',
        //     'notelp' => 'required',
        //     'biaya_admin' => 'required',
        //     'email' => 'required',
        //     'bukti_transaksi' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'no_referensi' => 'required',
        //     'total_masa_inap' => 'required',
        // ]);
        $generate_number_random = rand(100000,999999);
      
        $transaksi = new Transaksi([
            'nomor_invoice' => $generate_number_random,
            'homestay_id' => $request->homestay_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_harga' =>  $request->total_harga,
            'nama_depan' => $request->nama_depan,
            'notelp' => $request->notelp,
            'biaya_admin' => $request->biaya_admin,
            'email' => $request->email,
            'bukti_transaksi' => $request->bukti_transaksi,
            'no_referensi' => $request->no_referensi,
            'total_masa_inap' => $request->total_masa_inap,
            'status_payment' => 'pending',
            'status_homestay' => 'open',
            'status_transfer_pemilik' => 'belum'
        ]);
        if ($request->hasFile('bukti_transaksi')) {
            $imagePath = $request->file('bukti_transaksi')->store('buktitrf_images', 'public');
            $transaksi->bukti_transaksi = $imagePath;
        }

       
        
        $transaksi->save();
        // return response()->json(['success' => 'You have successfully upload transaksi.']);
        return redirect()->route('transaksi.detail', ['id' => $transaksi->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
