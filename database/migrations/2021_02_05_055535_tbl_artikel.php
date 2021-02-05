<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_artikel', function (Blueprint $table){
            $table->uuid('id_artikel')->primary();
            $table->string('id_ketentuan')->index();
            $table->string('nama_artikel', 100);
            $table->string('sampul_artikel', 100);
            $table->mediumText('isi_artikel');
            $table->string('slug');
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
        //
    }
}
