<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
              'name'     => 'Administrator',
              'password' => Hash::make('supersecret'),
              'is_admin' => true,
              'email_verified_at' => now(),
              'remember_token'    => Str::random(10),
            ]
          );
    }
}
