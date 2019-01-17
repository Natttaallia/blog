<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;


class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(ArticleCategory::class, 30)->create();
    //     return [
    //     'article_id' => $faker->numberBetween($min = 1, $max = 30),
    //     'category_id' => $faker->numberBetween($min = 1, $max = 30),
    // ];
        $faker = \Faker\Factory::create();

        $data = [];
        for ($i = 0; $i < 10000; $i++) {
            $data[] = [
                'article_id' => $faker->numberBetween(1, Article::count()),
                'category_id' => $faker->numberBetween(1, Category::count()),
            ];
        }

        DB::table('article_category')->insert($data);
    }
}
