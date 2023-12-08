<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModels;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        
        $data = DB::select('select * from barang');

        // $recycles = DB::table('barang')->where('recycled', 1)->get();
        
    
            return view('apps.index')->with('data', $data);
            // ->with('recycles', $recycles);
        }
    public function create(){
        return view ('barang.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
            
        ]);

        BarangModels::create([
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'harga_barang' => $request->harga_barang,
            
        ]);

        return redirect()->route('home')->with('success', 'Data Handphone berhasil disimpan');
    }
    public function edit($id_barang)
    {
        $data = DB::table('barang')->where('id_barang', $id_barang)->first();
       

        return view('barang.edit')->with('data', $data);
    }

    public function update($id_barang, Request $request)
    {
        $request->validate(
            [
                // 'id_barang' => 'required',
                'nama_barang' => 'required',
                'jenis_barang' => 'required',
                'harga_barang' => 'required',
                // 'id_penjual' => 'required',
            ]
        );

        DB::update(
            'UPDATE barang SET nama_barang = :nama_barang, jenis_barang = :jenis_barang, harga_barang = :harga_barang WHERE id_barang = :id_barang',
            [
                'id_barang' => $id_barang,
                'nama_barang' => $request->nama_barang,
                'jenis_barang' => $request->jenis_barang,
                'harga_barang' => $request->harga_barang, 
            ]
        );
        

        return redirect()->route('penjual.home')->with('success', 'Success! A barang has been updated');
    }
    public function delete($id)
    {
        DB::delete('DELETE FROM barang WHERE id_barang = :id_barang', ['id_barang' => $id]);

        return redirect()->route('penjual.home')->with('success', 'Success! A barang has been deleted');
    }

public function search(Request $request)
    {
        //request search
        $search = $request->search;

        $datas = DB::select("SELECT * FROM barang WHERE (nama_barang LIKE '%$search%' OR jenis_barang LIKE '%$search%')");
        // $recycles = DB::select("SELECT * FROM doujin WHERE (doujin_title LIKE '%$search%' OR doujin_author LIKE '%$search%') AND recycled = 1");

        return view('apps.index')->with('datas', $datas);
    }
}