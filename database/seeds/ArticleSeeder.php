<?php

use Illuminate\Database\Seeder;

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


        App\Article::truncate();

        for($i=0;$i<20;$i++){

            $randTilte = rand(1, 5);
            $randContent = rand(4,14);

            App\Article::create(array(
                'id_user' => $faker -> numberBetween(1, 10),
                'title' => $faker -> sentence($randTilte), 
                'content' => $faker -> paragraph($randContent),
                'image' => $faker -> imageUrl(640, 480)
            ));

        }
    }
}
