<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        // we create 10 users per time

        DB::table('users')->insert([
            'name' => 'ngkaizhe testing',
            'email' => 'kaizhe1998@hotmail.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = 'UTC'),
            'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = 'UTC'),
        ]);
        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password123'),
                'email_verified_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = 'UTC'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = 'UTC'),
            ]);
        }
    }
}
