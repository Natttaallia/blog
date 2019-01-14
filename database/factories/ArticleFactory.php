<?php

use Faker\Generator as Faker;
use App\Models\Article;


$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'content' => $faker->paragraph($nbSentences = 30, $variableNbSentences = true) ,
        'author_id' => $faker->numberBetween($min = 1, $max = 30),
        'views' => $faker->numberBetween($min = 1, $max = 3000),


    ];
});
