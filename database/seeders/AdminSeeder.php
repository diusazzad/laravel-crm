<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


     User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('password'),

        ])->assignRole('writer','admin');
    }
}
