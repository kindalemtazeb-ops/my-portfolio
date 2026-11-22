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
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'kindalemtazeb@gmail.com'],
            [
                'name' => 'Kindalem Tazeb',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'Kindalem@2026')),
                'email_verified_at' => now(),
            ]
        );
    }
}