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
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            DB::table('user')->insert([
                'id' => $i,
                'full_name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('dayung231'),
                'photo' => 'https://robohash.org/' . Str::random(5),
                'phone' => $faker->phoneNumber,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'nik' => $faker->nik(),
                'gender'=> $faker->numberBetween(0,1),
                'email_verified_at' => $faker->dateTime($max = 'now', $timezone = null),
                'status' => 1,
            ]);
            DB::table('place')->insert([
                'id' => $i,
                'name' => $faker->name,
                'location' => $faker->address,
                'description' => $faker->text($maxNbChars = 40),
            ]);
            for ($j = 1; $j <= 2; $j++) {
                DB::table('trip')->insert([
                    'user_id' => $i,
                    'place_id' => $i,
                    'depart_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'return_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'gather_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                    'gather_point' => $faker->address,
                    'description' => $faker->text($maxNbChars = 20),
                    'req_member' => $faker->numberBetween(1,30),
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                ]);
            }
        }
    }
}
