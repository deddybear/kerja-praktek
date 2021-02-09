<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Artikel as Artikel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Artikel::class, function (Faker $faker) {
    $isi = $faker->title;
    return [
        'id_artikel' => Str::random(24),
        'id_ketentuan' => Str::random(15),
        'nama_artikel' => $isi,
        'sampul_artikel' => $isi,
        'isi_artikel'   => $faker->paragraph,
        'slug' => Str::slug($isi),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
