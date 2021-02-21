<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Galeri;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Galeri::class, function (Faker $faker) {
    return [
        'id_galeri'   => Str::random(24),
        'id_ketentuan' => 'G2',
        'judul'        => $faker->title,
        'source'       => $faker->name(),
        'created_at'   => now(),
        'updated_at'   => now()
    ];
});
