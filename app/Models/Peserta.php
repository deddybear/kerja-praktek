<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table        = 'tbl_data_peserta';
    protected $primaryKey   = 'id_peserta';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;


    public function rincianPeserta(){
        return $this->hasOne('App\Models\RincianPeserta', 'id_rincian_peserta', 'id_rincian_peserta');
    }

    public function beasiswa(){
        return $this->hasMany('App\Models\BeasiswaPeserta', 'id_beasiswa', 'id_beasiswa');
    }

    public function prestasi(){
        return $this->hasMany('App\Models\PrestasiPeserta', 'id_prestasi', 'id_prestasi');
    }
}
