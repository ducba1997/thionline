<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\ExamDetail;
use Faker\Generator as Faker;

$factory->define(ExamDetail::class, function (Faker $faker) {

    return [
        'id_exam' => $faker->word,
        'id_level_question' => $faker->word,
        'count' => $faker->randomDigitNotNull,
        'percent' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
