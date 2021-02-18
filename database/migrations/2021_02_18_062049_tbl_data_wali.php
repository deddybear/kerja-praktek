<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataWali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_wali', function(Blueprint $table){
            $table->uuid('id_data_wali')->primary();
            $table->string('nama_wali', 100);
            $table->year('tahun_lahir_wali');
            $table->string('pendidikan_wali', 20);
            $table->string('pekerjaan_wali', 20);
            $table->string('penghasilan_bulanan_wali', 30);
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
        Schema::dropIfExists('tbl_data_wali');
    }
}
