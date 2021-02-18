<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataAyah extends Migration
{
    /**
     * Run th{{ e mi }}grations.
     *{{  }}
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_ayah', function(Blueprint $table){
            $table->uuid('id_data_ayah')->primary();
            $table->string('nama_ayah', 100);
            $table->year('tahun_lahir_ayah');
            $table->string('pendidikan_ayah', 20);
            $table->string('pekerjaan_ayah', 20);
            $table->string('penghasilan_bulanan_ayah', 30);
            $table->string('kebutuhan_khusus_ayah', 20);
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
        Schema::dropIfExists('tbl_data_ayah');
    }
}
