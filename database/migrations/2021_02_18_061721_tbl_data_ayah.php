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
            $table->uuid('id_ayah')->primary();
            $table->string('nama_ayah', 100);
            $table->string('ttl', 50);
            $table->string('pendidikan', 20);
            $table->string('pekerjaan', 50);
            $table->string('penghasilan', 30);
            $table->string('kebutuhan_khusus', 20);
            $table->string('nmr_hp', 13)->nullable();
            $table->string('nmr_tlp', 13)->nullable();
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
