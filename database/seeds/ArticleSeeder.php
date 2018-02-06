<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();




        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Article::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i=0;$i<20;$i++){

            $randTilte = rand(1, 5);
            $randContent = rand(4,14);

            App\Article::create(array(
                'user_id' => $faker -> numberBetween(1, 10),
                'title' => $faker -> sentence($randTilte), 
                'content' => $faker -> paragraph($randContent),
                'image' => $faker -> imageUrl(640, 480)
            ));

        }
    }
}
