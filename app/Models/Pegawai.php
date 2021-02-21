<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//php artisan make:model Models/Pegawai
class Pegawai extends Model
{
    //*Konfigurasi Models
    protected $table        = 'tbl_pegawai';
    protected $primaryKey   = 'id_pegawai';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];
    
    public function akun(){
        return $this->hasMany('App\Models\Akun', 'id_akun', 'created_by');
    }
}
