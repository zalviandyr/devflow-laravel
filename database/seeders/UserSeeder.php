<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => fake()->name,
            'username' => fake()->userName,
            'email' => fake()->email,
            'password' => Hash::make('12345678'),
            'address' => fake()->address,
            'is_Admin' => true
        ]);
        User::create([
            'name' => fake()->name,
            'username' => fake()->userName,
            'email' => fake()->email,
            'password' => Hash::make('12345678'),
            'address' => fake()->address,
        ]);
    }
}
