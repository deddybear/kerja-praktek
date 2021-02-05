<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//TODO : Buat test kok gak lebih

class Frist extends Model
{
    //* Konfigurasi Database 
    protected $table        = 'tbl_nama_awal';
    protected $primaryKey   = 'id_nama_awal';
    protected $guarded      = [];

    public function last_name(){
        /*

        //* Parameter 1 :  lokasi file atau Taget
        //* Parameter 2 :  nama Column Table Target
        //* Parameter 3 :  nama Column Table lokal
        */

                                                 
        return $this->hasOne('App\Models\Last', 'id_ahkir_nama', 'id_ahkir_nama');
    }              
}
