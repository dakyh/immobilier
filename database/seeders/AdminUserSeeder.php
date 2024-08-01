<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // Assurez-vous d'importer le modèle User
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
