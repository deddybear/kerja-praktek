<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    //* Konfigurasi Table
    protected $table        = 'tbl_prestasi';
    protected $primaryKey   = 'id_prestasi';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;
}
