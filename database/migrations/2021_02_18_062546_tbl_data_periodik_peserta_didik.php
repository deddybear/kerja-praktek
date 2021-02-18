<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataRincianPesertaDidikk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_periodik_peserta_didik', function(Blueprint $table){
            $table->uuid('id_periodik')->primary();
            $table->string('tinggi_badan', 7);
            $table->string('berat_badan', 7);
            $table->string('jarak_tempat_tinggal', 10);
            $table->string('waktu_tempuh', 15);
            $table->string('jumlah_saudara', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_periodik_peserta_didik');
    }
}
    