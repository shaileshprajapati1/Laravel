<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Faker $faker): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // productSeeder::class,
            StudentSeeder::class,
           
        ]);
    
    }

}
