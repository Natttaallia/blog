<?php

use Illuminate\Database\Seeder;
use App\Models\ArticleCategory;


class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleCategory::class, 30)->create();
        
    }
}
