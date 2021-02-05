<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    //* Konfigurasi Database
    protected $table      = 'tbl_info_ayah';
    protected $primaryKey = 'id_info_ayah';
    protected $keyType    = 'string';
    public $incrementing  = false;

}
