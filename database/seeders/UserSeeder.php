<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@bayt.com',
            'password' => Hash::make('12345678'),
            'age' => 25,
            'location' => 'Jordan',
        ]);

        User::factory(10)->create();
    }
}
