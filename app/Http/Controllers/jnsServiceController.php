<?php

namespace App\Http\Controllers;

use App\Models\JnsService;
use Illuminate\Http\Request;

class jnsServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JnsService::get();
        // dd($data);
        return view('jnsService.tampilJnsService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('jnsService.tambahJnsService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new JnsService();
        $data->nm_jns_service = $request->jns_service;
        $post = $data->save();
        return redirect('jnsservice');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = JnsService::where('id_jns_service', '=', $id)->get();
        return view('jnsService.updateJnsService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=JnsService::where('id_jns_service', '=', $id);
        $data->update([
            'nm_jns_kendaraan' => $request->jns_kendaraans,
        ]);
        return redirect('jnsservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=JnsService::where('id_jns_service', '=', $id);
        $data->delete();
        return redirect('jnsservice');
    }
}
