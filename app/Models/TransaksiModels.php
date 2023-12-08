<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class TransaksiModels extends Model
{
    use SoftDeletes;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'tgl_transaksi',
        'id_barang',
        'jumlah_transaksi',
        'id_user',
        'id_penjual',
        'created_at',
        'deleted_at',

        // Kolom lainnya sesuaikan dengan kebutuhan
    ];

    // Disable the automatic management of the updated_at timestamp
    public $timestamps = false;

    // Buat metode untuk mengambil data transaksi dengan join
    public static function getTransaksiData()
    {
        $transaksiData = TransaksiModels::getTransaksiData();
    }
}
    