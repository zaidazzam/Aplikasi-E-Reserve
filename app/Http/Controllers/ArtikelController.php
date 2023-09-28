<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function Index() {
        $artikels = Artikel::all();
        return view ('admin.artikel.data-artikel', compact('artikels'));
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'image|mimes:svg,jpeg,png,jpg,gif|max:2048', // Example validation rule for image uploads
        ]);
        $rekomendasi = new Artikel([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('homestay_images', 'public');
            $rekomendasi->image = $imagePath;
        }
        $rekomendasi->save();
        return redirect()->route('artikels.index')->with('success', 'Paket created successfully.');
    }
    public function tambahArtikel() {

        return view ('admin.artikel.tambah-artikel');
    }
    public function editArtikel() {

        return view ('admin.artikel.edit-artikel');
    }
}
