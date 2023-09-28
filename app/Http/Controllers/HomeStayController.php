<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homestay;
use Illuminate\Support\Facades\Auth;

class HomeStayController extends Controller
{
    public function index()
    {
        $homestay = Homestay::all();
        return view('admin.homestay.data-homestay', compact('homestay'));

    }

    public function create()
    {
        return view ('admin.homestay.tambah-homestay');
    }

    public function store(Request $request)
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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rule for image uploads
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
        return redirect()->route('homestays.index')->with('success', 'Homestay created successfully.');
    }

    public function show($id)
    {
        $rekomendasi = Homestay::findOrFail($id);
        return view('rekomendasis.show', compact('rekomendasi'));
    }

    public function edit($id)
    {
        $rekomendasi = Homestay::findOrFail($id);
        return view('admin.homestay.edit-homestay', compact('rekomendasi'));
    }

    public function update(Request $request, $id)
    {
       
        // Validation
        $request->validate([
            'users_id' => 'required|exists:users,id',
            'harga' => 'required|integer',
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
        $rekomendasi->update($request->all());

        return redirect()->route('rekomendasis.index')->with('success', 'Rekomendasi updated successfully.');
    }

    public function destroy($id)
    {
        $rekomendasi = Homestay::findOrFail($id);
        $rekomendasi->delete();

        return redirect()->route('rekomendasis.index')->with('success', 'Rekomendasi deleted successfully.');
    }
}
