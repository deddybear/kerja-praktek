<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile as Profile;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid as Generate;

$factory->define(Profile::class, function (Faker $faker) {

    return [
        'id_profile'           => Generate::uuid4(),
        'id_prestasi'          => Generate::uuid4(),
        'id_fasilitas'         => Generate::uuid4(),
        'isi_profile'          => $faker->paragraph(),
        'visi_misi'            => $faker->paragraph(),
        'slug'                 => Str::slug($faker->name()),
        'created_at'           => now(),
        'updated_at'           => now()
    ];
});
