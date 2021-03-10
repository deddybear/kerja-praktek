<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RincianPeserta extends Model
{
    protected $table        = 'tbl_data_rincian_peserta';
    protected $primaryKey   = 'id_rincian_peserta';
    protected $keyType      = 'string';
    protected $guarded      = [];
    public $incrementing    = false;
    public $timestamps      = false;

    public function bantuan(){
        return $this->hasOne('App\Models\Bantuan', 'id_bantuan', 'id_bantuan');
    }
}
