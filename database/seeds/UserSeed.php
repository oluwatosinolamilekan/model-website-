<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('users')->insert([
                'first_name'=> $faker->firstName,
                'last_name'=> $faker->numberBetween(0,50),
                'last_name'=>$faker->lastName,
                'slug'=> str_slug($faker->firstName."".$faker->lastName),
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->unique()->safeEmail,
                'password'=>bcrypt('password'),
                'address'=>$faker->streetAddress,
                'gender'=>'male',
                'state'=>$faker->state,
                'city'=>$faker->city,
                'profile_image'=>'39016.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
