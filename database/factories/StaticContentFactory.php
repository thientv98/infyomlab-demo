<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StaticContent;
use Faker\Generator as Faker;

$factory->define(StaticContent::class, function (Faker $faker) {

    return [
        'key' => $faker->word,
        'title' => $faker->word,
        'content' => $faker->text,
        'status' => $faker->word,
        'priority' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
