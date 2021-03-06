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
            $table->uuid('id_wali')->primary();
            $table->string('nama_wali', 100);
            $table->string('ttl', 50);
            $table->string('pendidikan', 20);
            $table->string('pekerjaan', 20);
            $table->string('penghasilan', 30);
            $table->string('nmr_hp', 13);
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
