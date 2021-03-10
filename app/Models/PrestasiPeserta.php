<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiPeserta extends Model
{
    protected $table        = 'tbl_data_prestasi_peserta';
    protected $primaryKey   = 'id_prestasi';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;
}
