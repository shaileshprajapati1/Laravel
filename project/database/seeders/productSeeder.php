<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

use Faker\Generator as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    { 
          
           for ($i=0; $i < 10; $i++) { 
            # code...
            DB::table('product')->insert([
                'title' =>$faker->word(3, true),
                'discription' => $faker->realText(rand(100,200)),
                'price' => $faker->randomNumber(1,99),
                'product_image' => $faker->word(3, true),
            ]);
           }
            
        
        // for ($i=0; $i <= 10; $i++) { 
        //     # code...
        //     DB::table('product')->insert([
        //         'title' => Str::random(10),
        //         'discription' => Str::random(100),
        //         'price' => rand(1, 25),
        //         'product_image' => Str::random(10),
        //     ]);
        // }
    }
}
