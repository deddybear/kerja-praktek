<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    //* Konfigurasi Database
    protected $table        = 'tbl_aku';
    protected $primaryKey   = 'id_akun';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $guarded      = [];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
