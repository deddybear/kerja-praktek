<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_prestasi', function (Blueprint $table){
            $table->uuid('id_prestasi')->primary();
            $table->uuid('id_profile')->index();
            $table->string('peringkat', 11);
            $table->string('nama_lomba', 100);
            $table->string('penyelenggara', 100);
            $table->string('diperoleh', 100);
            $table->date('waktu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_prestasi');
    }
}
