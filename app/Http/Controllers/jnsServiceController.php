<?php

namespace App\Http\Controllers;

use App\Models\jnsService;
use Illuminate\Http\Request;

class jnsServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $data = jnsService::get(); // Mengambil semua data dari tabel jnsService
        return view('jnsservice.index', compact('data')); // Mengirim data ke view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('jnsService.tambahJnsServce');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new jnsService();
        $data->nm_jns_kendaraan = $request->jns_kendaraans;
        $post = $data->save();
        return redirect('jnsService');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jnsService::where('id_jns_service', '=', $id)->get();
        return view('jnsServic.updateJnsService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=jnsService::where('id_jns_service', '=', $id);
        $data->update([
            'nm_jns_service' => $request->jns_services,
        ]);
        return redirect('jnsservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=jnsService::where('id_jns_service', '=', $id);
        $data->delete();
        return redirect('jnsservice');
    }
}
