<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $email = 'kindalemtazeb@gmail.com';
        $password = env('ADMIN_PASSWORD', 'KiTa@2375');

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Kindalem Tazeb',
                'password' => Hash::make($password),
                'email_verified_at' => now(),
            ]
        );
    }
}