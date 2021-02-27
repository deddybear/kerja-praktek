<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$artikel = factory(\App\Models\Artikel::class, 5)->create();
        // factory(\App\Models\Galeri::class, 5)->create();
       // factory(\App\Models\Pegawai::class, 5)->create();
        //factory(\App\Models\Akun::class, 1)->create();
        factory(\App\Models\Profile::class, 1)->create();
    }
}
