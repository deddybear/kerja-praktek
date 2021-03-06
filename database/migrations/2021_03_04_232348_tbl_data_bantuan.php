<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataBantuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_bantuan', function (Blueprint $table){
            $table->uuid('id_bantuan')->primary();
            $table->boolean('status_bantuan');
            $table->string('jenis_bantuan', 4)->nullable();
            $table->string('nomer_bantuan', 100)->nullable();
            $table->boolean('status_pip');
            $table->string('alasan_pip', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_bantuan');
    }
}
