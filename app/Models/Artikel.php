<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {
    //* Konfigurasi Database
    protected $table      = 'tbl_artikel';
    protected $primaryKey = 'id_artikel';
    protected $keyType    = 'string';
    public $incrementing  = false;
    protected $guarded = [];

    //* Relasi
    public function Ketentuan(){
        return $this->hasMany('App\Models\Ketentuan', 'id_ketentuan', 'id_ketentuan');
    }
}
