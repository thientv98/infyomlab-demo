<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LevelRoleConfig;
use Faker\Generator as Faker;

$factory->define(LevelRoleConfig::class, function (Faker $faker) {

    return [
        'level_id' => $faker->randomDigitNotNull,
        'role_id' => $faker->randomDigitNotNull,
        'from_point' => $faker->randomDigitNotNull,
        'end_point' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'priority' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
