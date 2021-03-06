<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_data_siswa', function (Blueprint $table){
            $table->uuid('id_siswa')->primary();
            $table->uuid('id_ayah')->index();
            $table->uuid('id_ibu')->index();
            $table->uuid('id_wali')->index();
            $table->string('NISN', 12)->nullable();
            $table->string('NIS', 5)->nullable();
            $table->string('NIK', 17);
            $table->string('NO_AKTE', 35)->nullable();
            $table->string('nama', 100);
            $table->string('kelamin', 15);
            $table->string('hobi', '50')->nullable();
            $table->string('cita','50')->nullable();
            $table->string('ttl', 100);
            $table->string('agama', 20);
            $table->string('program_pengajaran', 1)->nullable();
            $table->string('NPSN', 10)->nullable();
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
        Schema::dropIfExists('tbl_data_siswa');
    }
}
