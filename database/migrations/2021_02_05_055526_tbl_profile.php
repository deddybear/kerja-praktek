<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class TblProfile extends Migration
{
    /**
     * Run the migrations.
     *  * @php artisan migrate --path=/database/migrations/2021_02_21_201323_tbl_pegawai.php
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile', function (Blueprint $table){
            $table->uuid('id_profile')->primary();
            $table->mediumText('isi_profile');
            $table->mediumText('visi_misi');
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
