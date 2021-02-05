<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//TODO : Buat test kok gak lebih

class Last extends Model
{
    ///* Konfigurasi Database 
    protected $table    = 'tbl_ahkir_nama';
    protected $primaryKey = 'id_ahkir_nama';
    protected $guarded  = [];
}
