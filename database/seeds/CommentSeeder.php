<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
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
        App\Comment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i=0;$i<20;$i++){

            $randTilte = rand(1, 3);
            $randContent = rand(4,10);

            App\Comment::create(array(
                'id_article' => $faker -> numberBetween(1, 20),
                'id_user' => $faker -> numberBetween(1, 10),
                'title' => $faker -> sentence($randTilte), 
                'content' => $faker -> paragraph($randContent)
            ));

        }
    }
}
