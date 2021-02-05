<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    //* Konfigurasi Database 
    protected $table        = 'tbl_ppdb';
    protected $primaryKey   = 'id_ppdb';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];

    //* Relasi
    public function Ayah(){
      $this->hasOne('App\Models\Ayah', 'id_info_ayah', 'id_info_ayah');
    }

    public function Ibu(){
        $this->hasOne('App\Models\Ibu', 'id_info_ibu', 'id_info_ibu');
    }
}
