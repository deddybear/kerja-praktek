<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile', function (Blueprint $table){
            $table->uuid('id_profile')->primary();
            $table->uuid('id_prestasi')->index();
            $table->uuid('id_fasilitas')->index();
            $table->mediumText('isi_profile');
            $table->mediumText('isi_visi_misi');
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
        Schema::dropIfExists('tbl_profile');
    }
}
