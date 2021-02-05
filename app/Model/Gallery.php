<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //* Konfigurasi Database
    protected $table      = 'tbl_gallery';
    protected $primaryKey = 'id_gallery';
    protected $keyType    = 'string';
    public $incrementing  = false;
}
