<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        
        $datas = DB::select('select * from barang');
        // 
        
    
            return view('apps.index')->with('datas', $datas);
            // 
        }
    
    public function indexpenjual()
    {
        $datas = DB::select('select * from barang');
        // 
        
    
            return view('apps.indexpenjual')->with('datas', $datas);
            // 
    }
    public function indextransaksi()
    {   
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

        



        return view('apps.indextransaksi')->with('transaksiData', $transaksiData);

    }
}
