<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class BarangModels extends Model
{
    // use SoftDeletes;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    // protected $dates = ['deleted_at'];

    protected $fillable = [
        'nama_barang',
        'foto_barang',
        'jenis_barang',
        'harga_barang',
        'created_at',
        'deleted_at',
        
    ];

    // Disable the automatic management of the updated_at timestamp
    public $timestamps = false;
}