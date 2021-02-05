<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_user';
    protected $primaryKey   = 'id_user';
    protected $keyType      = 'string';
    public $incrementing    = false;
}
