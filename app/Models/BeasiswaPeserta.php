<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeasiswaPeserta extends Model
{
    //Konfigurasi Table

    protected $table        = 'tbl_data_beasiswa_perserta';
    protected $primaryKey   = 'id_beasiswa';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;
}
