<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Akun;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Akun::class, function (Faker $faker) {
    return [
        'id_akun'  => Str::random(24),
        'username' => Str::random(15),
        'password' => Str::random(10),
        'nama'     => $faker->name(),
        'email'    => $faker->email,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
