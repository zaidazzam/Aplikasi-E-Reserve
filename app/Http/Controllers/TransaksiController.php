<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\paket_transaksi;
use App\Models\service_transaksi;
use Illuminate\Support\Facades\DB;
use App\Models\service_tambahan;

use App\Models\Paket;
use Carbon\Carbon;

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
        $sum_biaya_admin = Transaksi::where('status_payment', 'pending')->sum('biaya_admin');
        return view('admin.transaksi.data-transaksi', compact('transaksi', 'totalHargaSeluruhTransaksi', 'jumlahSeluruhTransaksi','sum_biaya_admin'));
    }

    public function history(Request $request)
    {
        if($request->filter_by == 'tahun'){
            $filter_date = Carbon::create($request->date, 1, 1, 0, 0, 0);
            $endOfDate = Carbon::create($request->date, 12, 31, 23, 59, 59);
        }else if($request->filter_by == 'bulan'){
            $filter_date = Carbon::createFromFormat('Y-m', $request->date)->day(1)->startOfDay();
            $endOfDate = Carbon::createFromFormat('Y-m', $request->date)->endOfMonth();
        }else if($request->filter_by == 'tanggal'){
            $filter_date = Carbon::createFromFormat('Y-m-d', $request->date)->startOfDay();
            $endOfDate = Carbon::createFromFormat('Y-m-d', $request->date)->endOfDay();
        }

        $transaksi = Transaksi::where('status_payment', 'success')->with('homestay');

        if(isset($filter_date)){
            $transaksi = $transaksi->where('created_at', '>=', $filter_date)
                ->where('created_at', '<=', $endOfDate);
        }
        
        $transaksi = $transaksi->latest()->simplePaginate(5);
        $totalHargaSeluruhTransaksi = 0;
        $jumlahSeluruhTransaksi = $transaksi->count();
        foreach ($transaksi as $trx) {
            $totalHargaSeluruhTransaksi += $trx->total_harga;
        }
        $sum_biaya_admin = Transaksi::where('status_payment', 'success');

        // sum where  status_transfer_pemilik belum and status_payment success
        $sum_biaya_admin_belum = Transaksi::where('status_transfer_pemilik', 'belum')->where('status_payment', 'success');

        // sum where  status_transfer_pemilik sudah and status_payment success
        $sum_biaya_admin_sudah = Transaksi::where('status_transfer_pemilik', 'sudah')->where('status_payment', 'success');

        if(isset($filter_date)){
            $sum_biaya_admin = $sum_biaya_admin->where('created_at', '>=', $filter_date)
                ->where('created_at', '<=', $endOfDate);
            $sum_biaya_admin_belum = $sum_biaya_admin->where('created_at', '>=', $filter_date)
                ->where('created_at', '<=', $endOfDate);
            $sum_biaya_admin_sudah = $sum_biaya_admin->where('created_at', '>=', $filter_date)
                ->where('created_at', '<=', $endOfDate);
        }

        $sum_biaya_admin = $sum_biaya_admin->sum('biaya_admin');
        $sum_biaya_admin_belum = $sum_biaya_admin_belum->sum('total_harga');
        $sum_biaya_admin_sudah = $sum_biaya_admin_sudah->sum('total_harga');

        // $sum_biaya_admin_belum = Transaksi::where('status_transfer_pemilik', 'belum')->sum('total_harga');
        // $sum_biaya_admin_sudah = Transaksi::where('status_transfer_pemilik', 'sudah')->sum('total_harga');

        return view('admin.transaksi.data-history-transaksi', compact('transaksi', 'totalHargaSeluruhTransaksi', 'jumlahSeluruhTransaksi','sum_biaya_admin','sum_biaya_admin_belum','sum_biaya_admin_sudah'));
    }


    public function refund()
    {
        $transaksi = Transaksi::where('status_payment', 'failed')->with('homestay')->latest()->simplePaginate(5);
        $totalHargaSeluruhTransaksi = 0;
        $jumlahSeluruhTransaksi = $transaksi->count();
        foreach ($transaksi as $trx) {
            $totalHargaSeluruhTransaksi += $trx->total_harga;
        }
        $sum_biaya_admin = Transaksi::where('status_payment', 'failed')->sum('biaya_admin');

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

    public function update_trf_with_json(Request $request, $id) {
        // Validate and update the transaksi data
        // Example:
        $transaksi = Transaksi::find($id);
        $transaksi->status_transfer_pemilik = $request->input('status_transfer_pemilik');
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
        $generate_number_random = rand(100000,999999);

        $idhomestay = $request->homestay_id;
        // check data tanggal yang tidak tersedia
        $checkin = Carbon::createFromFormat('Y-m-d H:i:s', $request->check_in . ' 00:00:00');
        $checkout = Carbon::createFromFormat('Y-m-d H:i:s', $request->check_out. ' 00:00:00');
        $date_disable = Transaksi::where('homestay_id', $idhomestay)
            ->where(function ($query) {
                $query->where('status_payment', '=', 'pending')
                    ->orWhere('status_payment', '=', 'success');
            })
            ->where(function ($query) use ($checkin, $checkout) {
                $query->where('check_in', '<=', $checkin)
                    ->where('check_out', '>=', $checkout);
            })
            ->count();

        if($date_disable >= 1){
            return redirect()->route('homestay.detail', $idhomestay);
        }

        // --------

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
            'status_transfer_pemilik' => 'belum',
            'peserta' => $request->peserta
        ]);
        if ($request->hasFile('bukti_transaksi')) {
            $imagePath = $request->file('bukti_transaksi')->store('buktitrf_images', 'public');
            $transaksi->bukti_transaksi = $imagePath;
        }
        $transaksi->save();
        $selectedItems = (array) $request->input('dropdown-group');

        $selectedItemsService = (array) $request->input('dropdown-group-service');


        // Iterate through the selected items and insert them into the database
        $itemsToInsert = [];
        $itemsToInsertService = [];
        foreach ($selectedItems as $selectedItem) {
            $paketId = str_replace('checkbox-custom_', '', $selectedItem);
            $itemsToInsert[] = [
                'paket_id' => $paketId,
                'transaksi_id' => $transaksi->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        foreach ($selectedItemsService as $selectedItem) {
            $serviceId = str_replace('checkbox-custom_', '', $selectedItem);
            $itemsToInsertService[] = [
                'service_tambahan_id' => $serviceId,
                'transaksi_id' => $transaksi->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        // Bulk insert the selected items into the database
        paket_transaksi::insert($itemsToInsert);
        service_transaksi::insert($itemsToInsertService);
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
        //show list paket_transaksi wheren transaksi status = pending
        $paket_transaksi = paket_transaksi::all();
        // show list paket transaksi where transaksi stasu = pending
        return view('admin.transaksi.wisata-transaksi', compact('paket_transaksi'));
    }
    public function layananTransaksi()
    {

        $total_harga = 0;


        //show list paket_transaksi wheren transaksi status = pending

        $paket_transaksi = paket_transaksi::whereHas('transaksi', function ($query) {
            $query->where('status_payment', 'success');
        })->get();

        foreach ($paket_transaksi as $paket) {
            $total_harga += Paket::where('id', $paket->paket_id)->sum('harga');
        }
        $total_paket = $total_harga;
        return view('admin.transaksi.layanan-transaksi', compact('paket_transaksi','total_paket'));
    }

    public function serviceTransaksi()
    {

        $total_harga = 0;

        //show list paket_transaksi wheren transaksi status = pending

        $paket_transaksi = service_transaksi::whereHas('transaksi', function ($query) {
            $query->where('status_payment', 'success');
        })->get();

        foreach ($paket_transaksi as $paket) {
            $total_harga += service_tambahan::where('id', $paket->service_tambahan_id)->sum('harga');
        }
        $total_paket = $total_harga;
        return view('admin.transaksi.service-transaksi', compact('paket_transaksi','total_paket'));
    }
}
