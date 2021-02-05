<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_info_ibu';
    protected $primaryKey   = 'id_info_ibu';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];
}
