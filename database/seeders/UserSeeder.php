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
        User::updateOrCreate([
            'name' => 'admin',
        ], [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 'ADMIN',
        ]);
    }
}
