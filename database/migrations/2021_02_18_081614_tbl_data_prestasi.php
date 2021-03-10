<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataPrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('tbl_data_prestasi_peserta', function (Blueprint $table){
            $table->uuid('id_prestasi')->index();
            $table->string('jenis_prestasi', 8);
            $table->string('tingkat_prestasi', 13);
            $table->string('nama_prestasi', 100);
            $table->string('penyelenggara', 100);
            $table->year('tahun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_prestasi');
    }
}
