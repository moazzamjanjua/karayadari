<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_register;
use Faker\Factory as Faker;
class user_registerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1 ; $i <= 10; $i++){
            $user= new user_register;
            // Assign the validated data to the model properties
            $user->first_name = $faker->firstName ;
            $user->last_name = $faker->lastName ;
            $user->email = $faker->email;
            $user->country = $faker->country ;
            $user->password = $faker->password;
            $user->save();
        }
        
    }
}
