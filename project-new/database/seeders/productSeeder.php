<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('product')->insert([
                'title' => $faker->word(3, true),
                'discription' => $faker->paragraph(2, false),
                'procut_price' => $faker->randomDigit(100, 10000),
                'product_quntity' => $faker->randomDigit(1, 100),
                'product_img' => $faker->word(1, false),

            ]);
        }
    }
}
