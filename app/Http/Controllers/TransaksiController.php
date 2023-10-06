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
        $transaksi = Transaksi::where('status_payment', 'pending')->with('homestay')->latest()->simplePaginate(5);
        $totalHargaSeluruhTransaksi = 0;
        $jumlahSeluruhTransaksi = $transaksi->count();
        foreach ($transaksi as $trx) {
            $totalHargaSeluruhTransaksi += $trx->total_harga;
        }
        //sum biaya_admin in transaksi
        $sum_biaya_admin = Transaksi::sum('biaya_admin');
        return view('admin.transaksi.data-transaksi', compact('transaksi', 'totalHargaSeluruhTransaksi', 'jumlahSeluruhTransaksi','sum_biaya_admin'));
    }

    public function history()
    { 
        $transaksi = Transaksi::where('status_payment', 'success')->with('homestay')->latest()->simplePaginate(5);
        $totalHargaSeluruhTransaksi = 0;
        $jumlahSeluruhTransaksi = $transaksi->count();
        foreach ($transaksi as $trx) {
            $totalHargaSeluruhTransaksi += $trx->total_harga;
        }
        $sum_biaya_admin = Transaksi::sum('biaya_admin');

        return view('admin.transaksi.data-transaksi', compact('transaksi', 'totalHargaSeluruhTransaksi', 'jumlahSeluruhTransaksi','sum_biaya_admin'));
    }


    public function index_api()
    { 
        //include homestay
        $transaksi = Transaksi::with('homestay')->get();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data transaksi',
            'data' => $transaksi
        ], 200);
    }

    public function update_with_json(Request $request, $id) {
        // Validate and update the transaksi data
        // Example:
        $transaksi = Transaksi::find($id);
        $transaksi->status_payment = $request->input('status_payment');
        $transaksi->save();
        return response()->json(['message' => 'Transaksi updated successfully']);
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



    public function tambahPendapatan()
    {
        return view('admin.transaksi.data-pendapatan');
    }
    public function tambahPengeluaran()
    {
        return view('admin.transaksi.tambah-pengeluaran');
    }
    public function wisataTransaksi()
    {
        return view('admin.transaksi.wisata-transaksi');
    }
    public function layananTransaksi()
    {
        return view('admin.transaksi.layanan-transaksi');
    }

}
