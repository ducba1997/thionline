<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {

    return [
        'id_exam' => $faker->word,
        'id_level_question' => $faker->word,
        'content' => $faker->text,
        'correct_answer' => $faker->word,
        'answer_1' => $faker->word,
        'answer_2' => $faker->word,
        'answer_3' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
