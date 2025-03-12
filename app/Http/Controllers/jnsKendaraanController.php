<?php

namespace App\Http\Controllers;

use App\Models\jnsKendaraan;
use Illuminate\Http\Request;

class jnsKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jnsKendaraan::get();
        // dd($data);
        return view('jnsKendaraan.tampilJnsKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('jnsKendaraan.tambahJnsKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new jnsKendaraan();
        $data->nm_jns_kendaraan = $request->jns_kendaraans;
        $post = $data->save();
        return redirect('jnskendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jnsKendaraan::where('id_jns_kendaraan', '=', $id)->get();
        return view('jnsKendaraan.updateJnsKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=jnsKendaraan::where('id_jns_kendaraan', '=', $id);
        $data->update([
            'nm_jns_kendaraan' => $request->jns_kendaraans,
        ]);
        return redirect('jnskendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=jnsKendaraan::where('id_jns_kendaraan', '=', $id);
        $data->delete();
        return redirect('jnskendaraan');
    }
}
