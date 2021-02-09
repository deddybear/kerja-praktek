<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User as User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'id_user'  => Str::random(10),
        'username' => Str::random(10),
        'password' => 'qwerty555',
        'nama'     => $faker->name,
        'jabatan'  => $faker->name,
        'status_users' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
