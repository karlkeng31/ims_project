<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'Admin 31',
                'email' => 'admin31@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admi31??'),
                'created_at' => now()
            ],
            [
                'name' => 'Karl Ken. G.',
                'email' => 'karl31@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('karl31??'),
                'created_at' => now()
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin??'),
                'created_at' => now()
            ]
        ]);

        $users->each(function ($user) {
            User::insert($user);
        });
    }
}
