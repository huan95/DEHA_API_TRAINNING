<?php

use App\Model\Articles;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Articles::truncate();
//
//        $faker = \Faker\Factory::create();
//
//        for ($i = 0; $i < 50; $i++) {
//            Articles::create([
//                'title' => $faker->sentence,
//                'body' => $faker->paragraph,
//            ]);
//        }


        $article = new Articles();
        $article->id   = 1;
        $article->name = "customer 1";
        $article->dob  = "2018-09-26";
        $article->email  = "customer1@DEHA.vn";
        $article->save();

        $article = new Articles();
        $article->id   = 2;
        $article->name = "customer 2";
        $article->dob  = "2018-09-26";
        $article->email  = "customer2@DEHA.vn";
        $article->save();

        $article = new Articles();
        $article->id   = 3;
        $article->name = "customer 3";
        $article->dob  = "2018-09-26";
        $article->email  = "customer3@DEHA.vn";
        $article->save();
    }
}
