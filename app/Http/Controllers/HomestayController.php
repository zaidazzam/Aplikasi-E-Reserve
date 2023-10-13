<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FasilitasHomestay;
use Illuminate\Http\Request;
use App\Models\Homestay;
use App\Models\image_homestay;
use Illuminate\Support\Facades\Auth;

class HomestayController extends Controller
{
    public function index()
    {
        $homestay = Homestay::simplePaginate(10);
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
            // 'harga' => 'required|integer',
            // 'nama' => 'required|string',
            // 'alamat' => 'required|string',
            // 'latitude' => 'required|numeric',
            // 'longitude' => 'required|numeric',
            // 'deskripsi' => 'required|string',
            // 'kebijakan' => 'required|string',
            // 'jumlah_kamar' => 'required|integer',
            // 'kapasitas_kamar' => 'required|string',
            'status' => 'required|in:pending,accept,reject'
        ]);

        $rekomendasi = Homestay::findOrFail($id);
        $rekomendasi->update($request->all());

        return redirect()->route('homestays')->with('success', 'Rekomendasi updated successfully.');
    }

    public function destroy($id)
    {
        $rekomendasi = Homestay::findOrFail($id);
        $rekomendasi->delete();

        return redirect()->route('rekomendasis.index')->with('success', 'Rekomendasi deleted successfully.');
    }

    public function tambahFasilitas($homestay_id)
    {
        $fasilitas_punya = FasilitasHomestay::with('fasilitas')
            ->where('homestay_id', $homestay_id)
            ->get()
            ->pluck('fasilitas');

        $fasilitas_punya_id = $fasilitas_punya->pluck('id');

        $fasilitas_tidak_punya = Fasilitas::whereNotIn('id', $fasilitas_punya_id)
            ->get();

        return view('admin.homestay.tambah-fasilitas-homestay', compact('fasilitas_punya', 'fasilitas_tidak_punya', 'homestay_id'));
    }
    public function tambahGambar($homestay)
    {
        // show all gambar where homestay_id = homestay
        $image_homestay = image_homestay::where('homestay_id', $homestay)->get();
        $homestay = Homestay::findOrFail($homestay);
        return view('admin.homestay.tambah-gambar-homestay', compact('image_homestay', 'homestay'));

    }

    public function tambahFasilitasStore($homestay_id, $fasilitas_id)
    {
        FasilitasHomestay::create([
            'homestay_id' => $homestay_id,
            'fasilitas_id' => $fasilitas_id
        ]);

        return redirect()->route('homestays.tambahfasilitas', $homestay_id)->with('success', 'add fasilitas successfully.');
    }

    public function deleteFasilitas($homestay_id, $fasilitas_id)
    {
        FasilitasHomestay::where('homestay_id', $homestay_id)
            ->where('fasilitas_id', $fasilitas_id)
            ->delete();

        return redirect()->route('homestays.tambahfasilitas', $homestay_id)->with('success', 'fasilitas Deleted successfully.');
    }
}
