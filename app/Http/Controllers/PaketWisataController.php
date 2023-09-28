<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketWisataController extends Controller
{
    public function Index() {
        $pakets = Paket::all();
        return view ('admin.paket.data-paket-wisata', compact('pakets') );
    }
    public function tambahWisata() {
        return view ('admin.paket.tambah-paket-wisata');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'harga' => 'required|integer',
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rule for image uploads
        ]);
        $rekomendasi = new Paket([
            'harga' => $request->harga,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('homestay_images', 'public');
            $rekomendasi->image = $imagePath;
        }
        $rekomendasi->save();
        return redirect()->route('pakets.index')->with('success', 'Paket created successfully.');
    }
    public function editWisata() {

        return view ('admin.paket.edit-paket-wisata');

    }
}
