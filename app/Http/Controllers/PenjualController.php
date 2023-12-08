<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualModels;
use Illuminate\Support\Facades\DB;

class PenjualController extends Controller
{
    
    public function create(){
        return view ('penjual.add');
    }
    public function store(Request $request)
{
    $request->validate([
        'nama_penjual' => 'required',
        'kota_penjual' => 'required',
    ]);

    PenjualModels::create([
        'nama_penjual' => $request->nama_penjual,
        'kota_penjual' => $request->kota_penjual,
    ]);

    return redirect()->route('penjual.home')->with('success', 'Data berhasil disimpan');
}


        
    
    // public function edit($id_barang)
    // {
    //     $data = DB::table('barang')->where('id_barang', $id_barang)->first();
       

    //     return view('barang.edit')->with('data', $data);
    // }

    // public function update($id_barang, Request $request)
    // {
    //     $request->validate(
    //         [
    //             // 'id_barang' => 'required',
    //             'nama_barang' => 'required',
    //             'jenis_barang' => 'required',
    //             'harga_barang' => 'required',
    //             // 'id_penjual' => 'required',
    //         ]
    //     );

    //     DB::update(
    //         'UPDATE barang SET nama_barang = :nama_barang, jenis_barang = :jenis_barang, harga_barang= :harga_barang,  WHERE id_barang = :id_barang',
    //         [
    //             'id_barang' => $id_barang,
    //             'nama_barang' => $request->nama_barang,
    //             'jenis_barang' => $request->jenis_barang,
    //             'harga_barang' => $request->harga_barang, 
    //             // 'id_penjual' => $request->penjual,
    //         ]
    //     );

    //     return redirect()->route('home')->with('success', 'Success! A barang has been updated');
    // }
    public function delete($id)
    {
        DB::delete('DELETE FROM barang WHERE id_barang = :id_barang', ['id_barang' => $id]);

        return redirect()->route('penjual.home')->with('success', 'Success! A barang has been deleted');
    }
    public function index()
    {
        $penjualData = PenjualModels::all();
        return view('penjual.index', compact('penjualData'));
    }
}
