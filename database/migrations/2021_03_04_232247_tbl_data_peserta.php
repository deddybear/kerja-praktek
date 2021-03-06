<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_peserta', function (Blueprint $table){
            $table->uuid('id_peserta')->primary();
            $table->uuid('id_rincian_peserta')->index();
            $table->uuid('id_beasiswa')->index();
            $table->uuid('id_prestasi')->index();
            $table->string('nama', 100);
            $table->char('jenis_kelamin', 1);
            $table->string('nisn', 15)->nullable();
            $table->string('nis', 11)->nullable();
            $table->string('nik', 20);
            $table->string('ttl', 30);
            $table->string('agama', 8);
            $table->string('berkebutuhan_khusus', 19);
            $table->string('alamat_lengkap', 100);
            $table->string('type_tempat_tinggal', 18);
            $table->string('mode_transportasi', 50);
            $table->string('nmr_hp', 20)->nullable();
            $table->string('nmr_tlp', 15)->nullable();
            $table->string('email', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_peserta');
    }
}
