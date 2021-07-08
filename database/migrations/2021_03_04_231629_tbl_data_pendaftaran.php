<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_pendaftaran', function (Blueprint $table){
            $table->uuid('id_pendaftaran')->primary();
            $table->uuid('id_peserta')->index();
            $table->uuid('id_ayah')->index();
            $table->uuid('id_ibu')->index();
            $table->uuid('id_wali')->index();
            $table->string('jenis_pendaftaran', 15);
            $table->string('asal_sekolah', 100)->nullable();
            $table->boolean('status_paud');
            $table->boolean('status_tk');
            $table->string('hobi', 50);
            $table->string('cita', 50);
            $table->unsignedInteger('status_pendaftaran');
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
        Schema::dropIfExists('tbl_data_pendaftaran');
    }
}
