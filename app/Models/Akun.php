<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Akun extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    //* Konfigurasi Database
    protected $table        = 'tbl_akun';
    protected $primaryKey   = 'id_akun';
    public $incrementing    = false;
    protected $keyType      = 'string';

    protected $fillable = [
        'id_akun',
        'username',
        'password',
        'nama',
        'email',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
