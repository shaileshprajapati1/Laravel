<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
        foreach (range(1, 200) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'username' => $faker->username,
                'phone' => $faker->phoneNumber,
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
