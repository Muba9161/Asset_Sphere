<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create an Admin user
        User::updateOrCreate(
            [
                'email' => 'admin@gmail.com',
                'user_role' => '1', // '1' represents the Admin role
                'name' => 'Admin',
                'password' => Hash::make('admin'),
                'status' => 'active',
            ]
        );

        // Create an Editor user
        User::updateOrCreate(
            [
                'email' => 'manager@gmail.com',
                'user_role' => '2', // '2' represents the Manager role
                'name' => 'Manager',
                'password' => Hash::make('manager'),
                'status' => 'active',
            ]
        );

        // Create a Viewer user
        User::updateOrCreate(
            [
                'email' => 'member@gmail.com',
                'user_role' => '3', // '3' represents the Member role
                'name' => 'Member',
                'password' => Hash::make('member'),
                'status' => 'active',
            ]
        );
    }
}
