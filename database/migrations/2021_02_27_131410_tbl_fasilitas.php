<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblFasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_fasilitas', function (Blueprint $table){
            $table->uuid('id_fasilitas')->primary();
            $table->uuid('id_profile')->index();
            $table->string('jenis', 50);
            $table->string('nama', 100);
            $table->string('jumlah', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('tbl_fasilitas');
    }
}
