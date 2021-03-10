<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_data_ayah';
    protected $primaryKey   = 'id_ayah';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];
    public $timestamps      = false;
}
