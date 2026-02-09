<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'username' => 'admin123',
    //         'email' => 'test@example.com',
    //         'password' => Hash::make('password123'),
    //     ]);
    // }
    public function run(): void
    {
        // Generates 100 users using the factory above 
        \App\Models\User::factory(100)->create();

        // Create one specific user so you definitely know the login [cite: 28, 61]
        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'username' => 'admin123',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
