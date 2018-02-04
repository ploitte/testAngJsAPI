<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
        App\User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i=0;$i<10;$i++){

            $password = bcrypt($faker->password());

            App\User::create(array(
                'name' => $faker -> userName(),
                'email' => $faker -> email(), 
                'password' => $password
            ));

        }
    }
}
