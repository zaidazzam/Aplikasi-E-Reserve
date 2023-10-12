<?php

namespace App\Http\Controllers\PemilikHomestay;

use App\Http\Controllers\Controller;
use App\Models\Homestay;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::join('homestays as hm', 'transaksis.homestay_id', '=', 'hm.id')
            ->where('hm.users_id', Auth::user()->id)
            ->where('status_payment', 'success')
            ->get();
        return view('pemilik-homestay.dashboard', compact('transaksis'));
    }

    public function datahomestay()
    {
        $homestay = Homestay::where('users_id', Auth::user()->id)
            ->simplePaginate(10);

        return view('pemilik-homestay.data-homestay', compact('homestay'));
    }

    public function tambahhomestay()
    {
        return view('pemilik-homestay.tambah-homestay');
    }

    public function storehomestay(Request $request)
    {
        // Validation
        $request->validate([
            'harga' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'deskripsi' => 'required|string',
            'kebijakan' => 'required|string',
            'jumlah_kamar' => 'required|integer',
            'kapasitas_kamar' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5000', // Example validation rule for image uploads
        ]);
        $user = Auth::user();
        $rekomendasi = new Homestay([
            'users_id' => $user->id,
            'harga' => $request->harga,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi' => $request->deskripsi,
            'kebijakan' => $request->kebijakan,
            'jumlah_kamar' => $request->jumlah_kamar,
            'kapasitas_kamar' => $request->kapasitas_kamar,
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('homestay_images', 'public');
            $rekomendasi->image = $imagePath;
        }
        $rekomendasi->save();
        return redirect()->route('pemilik_homestay.datahomestay')->with('success', 'Homestay created successfully.');
    }

    public function showHomestay($id)
    {
        $rekomendasi = Homestay::findOrFail($id);
        return view('pemilik-homestay.edit-homestay', compact('rekomendasi'));
    }

    public function updateHomestay(Request $request, $id)
    {

        // Validation
        $request->validate([
            'harga' => 'required|integer',
            'image' => 'nullable|file',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'deskripsi' => 'required|string',
            'kebijakan' => 'required|string',
            'jumlah_kamar' => 'required|integer',
            'kapasitas_kamar' => 'required|string',
        ]);

        $rekomendasi = Homestay::findOrFail($id);

        $data = $request->all();

        if($request->hasFile('image')){
            Storage::delete('public/' . $rekomendasi->image);
            $imagePath = $request->file('image')->store('homestay_images', 'public');
            $data['image'] = $imagePath;
        }else {
            unset($data['image']);
        }

        $rekomendasi->update($data);

        return redirect()->route('pemilik_homestay.datahomestay')->with('success', 'Homestay updated successfully.');
    }
}
