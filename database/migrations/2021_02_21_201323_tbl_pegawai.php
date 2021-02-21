<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPegawai extends Migration
{
    /**
     * Run the migrations.
     * @php artisan migrate --path=/database/migrations/2021_02_21_201323_tbl_pegawai.php
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pegawai', function (Blueprint $table){
            $table->uuid('id_pegawai')->primary();
            $table->uuid('created_by')->index();
            $table->string('nip', 30);
            $table->string('nama_pegawai', 100);
            $table->string('alamat_pegawai', 100);
            $table->string('pendidikan_terakhir', 7);
            $table->string('jabatan', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pegawai');
    }
}
