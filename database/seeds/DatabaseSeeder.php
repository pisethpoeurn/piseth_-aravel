<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 1000 ; $i++) { 
            DB::table('student')->insert([
                'firstName' => $faker ->firstName,
                'lastName' => $faker ->lastName,
                'age'=> $faker -> numberBetween($min = 18 , $max = 21)
            ]);
        }
    }
}
