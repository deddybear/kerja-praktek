<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile as Profile;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Profile::class, function (Faker $faker) {
    $isi = $faker->title;
    return [
        'id_profile' => Str::random(24),
        'isi_artikel' => $isi,
        'slug'        => Str::slug($isi),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
