<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //Konfigurasi Table

    protected $table        = 'tbl_data_pendaftaran';
    protected $primaryKey   = 'id_pendaftaran';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;

    public function peserta(){
       return $this->hasMany('App\Models\Peserta', 'id_peserta', 'id_peserta');
    }

    public function ayah(){
       return $this->hasMany('App\Models\Ayah', 'id_ayah', 'id_ayah');
    }

    public function ibu(){
       return $this->hasMany('App\Models\Ibu', 'id_ibu', 'id_ibu');
    }

    public function wali(){
       return $this->hasMany('App\Models\Wali', 'id_wali', 'id_wali');
    }
}
