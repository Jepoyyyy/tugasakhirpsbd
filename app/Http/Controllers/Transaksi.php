<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualModels;
use App\Models\BarangModels;
use App\Models\User;

use App\Models\TransaksiModels;
use Illuminate\Support\Facades\DB;

class Transaksi extends Controller
{
    


// ...

public function create()
{
    $penjualData = PenjualModels::all();
    $barangData = BarangModels::all();
    $userData = User::all();
    // $barangData = BarangModels::select('select id_barang, nama_barang');
    // $userData = User::select('select id,name');
    
    // , 'barangData', 'userData'
    return view('transaksi.add', compact('penjualData','barangData','userData'));
}

public function store(Request $request)
{   
    $request->validate([
    // 'id_penjual' => 'required',
    // 'id_barang' => 'required',
    // 'id_user' => 'required',
    'jumlah_transaksi' => 'required',
    // Validasi input jika diperlukan
    ]);
    TransaksiModels::create([
        'id_penjual' => $request->id_penjual,
        'id_barang' => $request->id_barang,
        'id_user' => $request->id_user,
        'jumlah_transaksi' => $request->jumlah_transaksi
        // Tambahkan atribut lain sesuai kebutuhan
    ]);

    return redirect()->route('transaksi.home');

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
    //         'UPDATE barang SET nama_barang = :nama_barang, jenis_barang = :jenis_barang, harga+barang= :harga_barang,  WHERE id_barang = :id_barang',
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
        DB::delete('DELETE FROM transaksi WHERE id_transaksi = :id_transaksi', ['id_transaksi' => $id]);

        return redirect()->route('transaksi.home')->with('success', 'Success! A barang has been deleted');
    }

    public function search(Request $request)
    {
        //request search
        $search = $request->search;

        $transaksiData = DB::table('transaksi')
        ->join('barang', 'transaksi.id_barang', '=', 'barang.id_barang')
        ->join('users', 'transaksi.id_user', '=', 'users.id')
        ->join('penjual', 'transaksi.id_penjual', '=', 'penjual.id_penjual')
        ->select('transaksi.id_transaksi',
        'barang.nama_barang',
        'penjual.nama_penjual',
        'users.name',
        'transaksi.jumlah_transaksi')
        ->get();
        

        return view('apps.indextransaksi',compact('transaksiData'));
    }
//     public function softDeleteData($id)
// {
//     $data = TransaksiModels::find($id);
//     if ($data) {
//         $data->delete();
//         $data = DB::table('transaksi')->whereNotNull('deleted_at')->get();
//         return redirect()->route('transaksi.home')->with('success', 'Data berhasil dihapus secara lembut');
//     } else {
//         return redirect()->route('transaksi.home')->with('error', 'Data tidak ditemukan');
//     }


    
// }
}


