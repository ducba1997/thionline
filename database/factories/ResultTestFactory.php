<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\ResultTest;
use Faker\Generator as Faker;

$factory->define(ResultTest::class, function (Faker $faker) {

    return [
        'id_exam' => $faker->word,
        'id_user' => $faker->word,
        'time_start' => $faker->date('Y-m-d H:i:s'),
        'time_to_do' => $faker->randomDigitNotNull,
        'time_remaining' => $faker->randomDigitNotNull,
        'point' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
