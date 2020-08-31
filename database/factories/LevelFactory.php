<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Level;
use Faker\Generator as Faker;

$factory->define(Level::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'thumbnail' => $faker->word,
        'content' => $faker->text,
        'status' => $faker->word,
        'priority' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
