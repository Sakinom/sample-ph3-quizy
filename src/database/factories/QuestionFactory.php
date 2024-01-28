<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'big_question_id' => $faker->randomDigit,
        'image' => $faker->imageUrl(),
    ];
});
