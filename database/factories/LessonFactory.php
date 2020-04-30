<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'id_grade' => $faker->word,
        'id_subject' => $faker->word,
        'id_chapter' => $faker->word,
        'image' => $faker->word,
        'content' => $faker->text,
        'assignment' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
