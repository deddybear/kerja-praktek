<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAkun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_akun', function (Blueprint $table){
            $table->uuid('id_akun')->primary();
            $table->string('username', 15)->unique();
            $table->string('password', 17);
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->rememberToken();
            $table->boolean('status_users');
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
