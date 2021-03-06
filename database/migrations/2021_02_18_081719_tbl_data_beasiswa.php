<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataBeasiswaPesertaDidik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_beasiswa', function (Blueprint $table){
            $table->uuid('id_beasiswa')->index();
            $table->string('jenis_beasiswa', 20);
            $table->string('keterangan', 100);
            $table->year('tahun_mulai');
            $table->year('tahun_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_beasiswa');
    }
}
