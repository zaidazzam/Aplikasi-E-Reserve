<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepengeluaranRequest;
use App\Http\Requests\UpdatepengeluaranRequest;
use App\Models\pengeluaran;
use App\Models\Transaksi;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = pengeluaran::sum('harga');
        // find all pengeluaran
        $pengeluaran_transaksi = pengeluaran::latest()->simplePaginate(5);
        $transaksi = Transaksi::where('status_payment', 'success')->with('homestay')->latest()->simplePaginate(5);
        $totalHargaSeluruhTransaksi = 0;
        $jumlahSeluruhTransaksi = $transaksi->count();
        foreach ($transaksi as $trx) {
            $totalHargaSeluruhTransaksi += $trx->total_harga;
        }
        $sum_biaya_admin = Transaksi::where('status_payment', 'success')->sum('biaya_admin');
        return view('admin.pengeluaran.data-pengeluaran', compact('transaksi', 'totalHargaSeluruhTransaksi', 'jumlahSeluruhTransaksi','sum_biaya_admin','pengeluaran','pengeluaran_transaksi'));  
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view ('pengeluaran.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepengeluaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepengeluaranRequest $request)
    {
        $rekomendasi = new pengeluaran([
            'nama_pengeluaran' => $request->get('nama_pengeluaran'),
            'harga' => $request->get('harga'),
            'keterangan' => $request->get('keterangan'),
        ]);

        // Store the uploaded images
        if ($request->hasFile('nota')) {
            $imagePath = $request->file('nota')->store('homestay_images', 'public');
            $rekomendasi->nota = $imagePath;
        }
        $rekomendasi->save();

        return response()->json(['message' => 'Images uploaded successfully']);
        // $pengeluaran = pengeluaran::create($request->validated());
        // return response()->json(['message' => 'Images uploaded successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(pengeluaran $pengeluaran)
    {
        $pengeluaran = pengeluaran::find($pengeluaran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pengeluaran $pengeluaran)
    {
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepengeluaranRequest  $request
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepengeluaranRequest $request, pengeluaran $pengeluaran)
    {
        $pengeluaran->update($request->validated());
        return redirect()->route('pengeluaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran = pengeluaran::find($id);
        $pengeluaran->delete();
        return response()->json(['message' => 'Images deleted successfully']);
    }
}
