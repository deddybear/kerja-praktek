<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ketentuan extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_ketentuan';
    protected $primaryKey   = 'id_ketentuan';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];

}
