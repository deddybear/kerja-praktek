<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataIbu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_ibu', function(Blueprint $table){
            $table->uuid('id_data_ibu')->primary();
            $table->string('nama_ibu', 100);
            $table->year('tahun_lahir_ibu');
            $table->string('pendidikan_ibu', 20);
            $table->string('pekerjaan_ibu', 20);
            $table->string('penghasilan_bulanan_ibu', 30);
            $table->string('kebutuhan_khusus_ibu', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_ibu');
    }
}
