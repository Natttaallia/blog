<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TagsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(ArticleTagTableSeeder::class);
        $this->call(ArticleCategoryTableSeeder::class);
        
    }
}
