<?php

use Illuminate\Database\Seeder;

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


        App\User::truncate();

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
