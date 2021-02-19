<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Artikel as Artikel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Artikel::class, function (Faker $faker) {
    $nama = $faker->name();
    return [
        'id_artikel' => Str::random(24),
        'id_ketentuan' => Str::random(15),
        'nama_artikel' => $nama,
        'sampul_artikel' => $nama,
        'isi_artikel'   => $faker->paragraph,
        'slug' => Str::slug($nama),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
