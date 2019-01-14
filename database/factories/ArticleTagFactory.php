<?php

use Faker\Generator as Faker;
use App\Models\ArticleTag;


$factory->define(ArticleTag::class, function (Faker $faker) {
    return [
        'article_id' => $faker->numberBetween($min = 1, $max = 30),
        'tag_id' => $faker->numberBetween($min = 1, $max = 30),
    ];
});
