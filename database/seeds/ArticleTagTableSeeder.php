<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Article;


class ArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(ArticleTag::class, 30)->create();
         $faker = \Faker\Factory::create();

        $data = [];
        for ($i = 0; $i < 10000; $i++) {
            $data[] = [
                'article_id' => $faker->numberBetween(1, Article::count()),
                'tag_id' => $faker->numberBetween(1, Tag::count()),
            ];
        }

        DB::table('article_tag')->insert($data);

    //     return [
    //     'article_id' => $faker->numberBetween(1, Article::count()),
    //     'tag_id' => $faker->numberBetween(1, Tag::count()),
    // ];
        
    }
}
