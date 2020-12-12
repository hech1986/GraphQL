<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
