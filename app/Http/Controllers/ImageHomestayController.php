<?php

namespace App\Http\Controllers;

use App\Models\image_homestay;
use Illuminate\Http\Request;

class ImageHomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //find by homestay id
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',// Adjust the allowed file types and maximum size as needed
            'homestay_id' => 'required|integer', // Assuming 'homestay_id' is required
        ]);

        $rekomendasi = new image_homestay([
            'homestay_id' => $request->homestay_id,
        ]);

        // Store the uploaded images
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('homestay_images', 'public');
            $rekomendasi->image = $imagePath;
        }
      
        $rekomendasi->save();

        return response()->json(['message' => 'Images uploaded successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\image_homestay  $image_homestay
     * @return \Illuminate\Http\Response
     */
    public function show(image_homestay $image_homestay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\image_homestay  $image_homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(image_homestay $image_homestay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\image_homestay  $image_homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image_homestay $image_homestay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\image_homestay  $image_homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = image_homestay::find($id);
        $image->delete();       
        return response()->json(['message' => 'Images delete successfully']);
 
    }
}
