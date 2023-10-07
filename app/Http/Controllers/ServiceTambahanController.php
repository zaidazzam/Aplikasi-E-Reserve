<?php

namespace App\Http\Controllers;

use App\Models\service_tambahan;
use Illuminate\Http\Request;

class ServiceTambahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_tambahan = service_tambahan::all();
        return view('admin.service.data-service', compact('service_tambahan'));
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
            'nama_service_tambahan' => 'required',
            'harga' => 'required',
        ]);
        $service_tambahan = new service_tambahan([
            'nama_service_tambahan' => $request->get('nama_service_tambahan'),
            'harga' => $request->get('harga'),
        ]);
        $service_tambahan->save();
        return response()->json(['message' => 'add successfully']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service_tambahan  $service_tambahan
     * @return \Illuminate\Http\Response
     */
    public function show(service_tambahan $service_tambahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service_tambahan  $service_tambahan
     * @return \Illuminate\Http\Response
     */
    public function edit(service_tambahan $service_tambahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service_tambahan  $service_tambahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service_tambahan $service_tambahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service_tambahan  $service_tambahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(service_tambahan $service_tambahan)
    {
        //
    }
}
