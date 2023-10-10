<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function Index() {
        $fasilitas = Fasilitas::get();
        return view ('admin.fasilitas.data-fasilitas',compact('fasilitas'));

    }
    public function tambahFasilitas() {
        return view ('admin.fasilitas.tambah-fasilitas');

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'icon' => 'required|file'
        ]);

        $file = $request->file('icon');
        $nameFile = date('dmyHis') . '_' . $file->getClientOriginalName();
        Storage::makeDirectory('public/fasilitas');
        $file->storeAs('public/fasilitas', $nameFile);

        Fasilitas::create([
            'nama' => $request->nama,
            'icon' => 'fasilitas/' . $nameFile
        ]);

        return redirect()->route('fasilitas.index')->with('success', 'Paket created successfully.');
    }
}
