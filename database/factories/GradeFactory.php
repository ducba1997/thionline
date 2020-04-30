<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\Grade;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
