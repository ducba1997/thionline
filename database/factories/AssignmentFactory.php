<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'description' => $faker->text,
        'id_grade' => $faker->word,
        'id_subject' => $faker->word,
        'id_chapter' => $faker->word,
        'url' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
