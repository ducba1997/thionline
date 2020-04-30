<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\Exam;
use Faker\Generator as Faker;

$factory->define(Exam::class, function (Faker $faker) {

    return [
        'id_grade' => $faker->word,
        'id_subject' => $faker->word,
        'id_chapter' => $faker->word,
        'id_users' => $faker->word,
        'name' => $faker->word,
        'slug' => $faker->word,
        'description' => $faker->word,
        'password' => $faker->word,
        'time_to_do' => $faker->randomDigitNotNull,
        'allow_review_answer' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
