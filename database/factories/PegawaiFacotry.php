<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pegawai;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'id_pegawai'          => Str::random(24),
        'created_by'          => Str::random(24),
        'nip'                 => $faker->randomNumber(),
        'nama_pegawai'        => $faker->name(),
        'alamat_pegawai'      => $faker->address(),
        'pendidikan_terakhir' => $faker->title(),
        'jabatan'             => $faker->titleFemale(),
        'created_at'           => now(),
        'updated_at'           => now()
    ];
});
