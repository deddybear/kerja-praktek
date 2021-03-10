<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    //Konfigurasi Table

    protected $table        = 'tbl_data_bantuan';
    protected $primaryKey   = 'id_bantuan';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;
}
