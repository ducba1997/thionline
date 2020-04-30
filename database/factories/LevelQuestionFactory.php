<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\LevelQuestion;
use Faker\Generator as Faker;

$factory->define(LevelQuestion::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
