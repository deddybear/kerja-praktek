<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_gallery';
    protected $primaryKey   = 'id_gallery';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];
}
