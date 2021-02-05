<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    //* Konfigurasi Database 
    protected $table        = 'tbl_ppdb';
    protected $primaryKey   = 'id_ppdb';
    protected $keyType      = 'string';
    public $incrementing    = false;
}
