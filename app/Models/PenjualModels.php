<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class PenjualModels extends Model
{
    // use SoftDeletes;

    protected $table = 'penjual';
    protected $primaryKey = 'id_penjual';
    // protected $dates = ['deleted_at'];

    protected $fillable = [
        'nama_penjual',
        'kota_penjual'
    ];

    // Disable the automatic management of the updated_at timestamp
    public $timestamps = false;
}