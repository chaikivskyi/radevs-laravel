<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $admin = User::factory()->create([
             'name' => 'Admin',
             'email' => 'test@example.com',
             'password' => Hash::make('test123')
         ]);

        $managerOne = User::factory()->create([
            'name' => 'Manager 1',
            'email' => 'manager-one@example.com',
            'password' => Hash::make('test123')
        ]);

        $managerTwo = User::factory()->create([
            'name' => 'Manager 2',
            'email' => 'manager-two@example.com',
            'password' => Hash::make('test123')
        ]);

        $admin->assignRole('Admin');
        $managerOne->assignRole('Manager');
        $managerTwo->assignRole('Manager');
    }
}
