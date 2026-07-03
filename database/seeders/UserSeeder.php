<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::firstOrCreate(
        ['email' => 'admin@mail.com'],
        [
            'name' => 'Admin',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]
    );

    User::firstOrCreate(
        ['email' => 'desainer@email.com'],
        [
            'name' => 'Desainer',
            'password' => Hash::make('255061'),
            'role' => 'desainer',
        ]
    );

    User::firstOrCreate(
        ['email' => 'akuntan@email.com'],
        [
            'name'     => 'Akuntan',
            'password' => Hash::make('112262'),
            'role'     => 'akuntan',
        ]
    );

    User::firstOrCreate(
        ['email' => 'superadmin@email.com'],
        [
            'name'     => 'Super Admin',
            'password' => Hash::make('super123'),
            'role'     => 'superadmin',
        ]
    );
    }
}
