<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_profile';
    protected $primaryKey   = 'id_profile';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];

    public function prestasi(){
        return $this->hasMany('App\Models\Prestasi', 'id_profile', 'id_profile');
    }

    public function fasilitas(){
        return $this->hasMany('App\Models\Fasilitas', 'id_profile', 'id_profile');
    }
}
