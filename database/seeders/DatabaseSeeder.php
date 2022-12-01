<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(10)->create();




        User::create([
            'name' =>'rondie94',
            'username' =>'rondi',
            'email' =>'rondie94@gmail.com',
            'password' =>bcrypt('1111'),
            
        ]);
        User::create([
            'name' =>'user',
            'username' =>'user',
            'email' =>'user@gmail.com',
            'password' =>bcrypt('1111'),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
