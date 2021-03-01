<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    //* Konfigurasi Table 

    protected $table        = 'tbl_fasilitas';
    protected $primaryKey   = 'id_fasilitas';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;
}
