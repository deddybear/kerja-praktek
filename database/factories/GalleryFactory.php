<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gallery as Gallery;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Gallery::class, function (Faker $faker) {
    return [
        'id_gallery' => Str::random(24),
        'judul'      => $faker->title,
        'src_gamber' => 'Link',
        'src_video'  => 'Link',
        'created_at' => now(),
        'updated_at' => now()
    ];
});
