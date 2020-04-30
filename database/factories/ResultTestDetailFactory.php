<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\ResultTestDetail;
use Faker\Generator as Faker;

$factory->define(ResultTestDetail::class, function (Faker $faker) {

    return [
        'id_result_test' => $faker->word,
        'id_question' => $faker->word,
        'answer' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
