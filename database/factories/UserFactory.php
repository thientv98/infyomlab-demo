<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'username' => $faker->word,
        'password' => $faker->word,
        'birthday' => $faker->word,
        'image' => $faker->word,
        'phone' => $faker->word,
        'province_id' => $faker->word,
        'address' => $faker->word,
        'text' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
