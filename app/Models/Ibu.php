<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_data_ibu';
    protected $primaryKey   = 'id_ibu';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];
    public $timestamps      = false;
}
