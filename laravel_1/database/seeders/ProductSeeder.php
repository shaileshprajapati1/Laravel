<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10 ; $i++) { 
            
            DB::table('products')->insert([
                'title' => Str::random(10),
                'discription' => Str::random(50),
                'quantity' => rand(1,99),
                'price' => rand(100,10000),
                
            ]);
        }
    }
}
