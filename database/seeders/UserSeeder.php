<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@test.com',
            'password' => Hash::make('cl13nt3004@'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@test.com',
            'password' => Hash::make('cl13nt3004@'),
            'role' => 'admin'
        ]);

        for ($i = 1; $i <= 4; $i++) {
            User::create([
                'name' => 'Cliente '.$i,
                'email' => 'cliente'.$i.'@test.com',
                'password' => Hash::make('cl13nt3004@'),
                'role' => 'cliente'
            ]);
        }
    }
}