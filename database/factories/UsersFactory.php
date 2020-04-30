<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manage\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'id_gender' => $faker->word,
        'id_permission' => $faker->word,
        'avatar' => $faker->text,
        'birthday' => $faker->word,
        'address' => $faker->text,
        'password' => $faker->word,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
