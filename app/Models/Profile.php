<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_profile';
    protected $primaryKey   = 'id_profile';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];
}
