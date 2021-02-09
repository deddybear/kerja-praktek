<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ketentuan as Ketentuan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Ketentuan::class, function (Faker $faker) {
    return [
        'id_ketentuan' => Str::random(24),
        'keterangan' => $faker->name
    ];
});
