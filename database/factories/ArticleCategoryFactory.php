<?php

use Faker\Generator as Faker;
use App\Models\ArticleCategory;


$factory->define(ArticleCategory::class, function (Faker $faker) {
    return [
        'article_id' => $faker->numberBetween($min = 1, $max = 30),
        'category_id' => $faker->numberBetween($min = 1, $max = 30),
    ];
});
