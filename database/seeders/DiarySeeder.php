<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        //
        // we create 50 diaries per time
        for ($i = 0; $i < 50; $i++) {
            DB::table('diaries')->insert([
                'user_id' => $faker->numberBetween($min = 1, $max = User::count()),
                'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
                'content' => $faker->realText($maxNbChars = 500, $indexSize = 2),
                'diary_date' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = 'UTC'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = 'UTC'),
            ]);
        }

    }
}
