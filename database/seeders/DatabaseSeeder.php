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
        $email = 'YOUR_NEW_EMAIL@gmail.com';
        $password = env('ADMIN_PASSWORD', 'Kindalem@2026');

        // ቀደም ብለው የነበሩ usersን በሙሉ አጽዳ
        User::query()->delete();

        // አዲሱን ትክክለኛ admin user ብቻ ፍጠር / አዘምን
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