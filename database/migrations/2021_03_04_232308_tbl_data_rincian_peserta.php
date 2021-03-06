<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataRincianPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_rincian_peserta', function (Blueprint $table){
            $table->uuid('id_rincian_peserta')->primary();
            $table->uuid('id_bantuan')->index();
            $table->string('kewarganegaraan', 30);
            $table->string('tinggi_badan', 4);
            $table->string('berat_badan', 4);
            $table->string('jarak_sekolah', 7);
            $table->string('waktu_tempuh', 10);
            $table->string('jml_saudara', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_rincian_peserta');
    }
}
