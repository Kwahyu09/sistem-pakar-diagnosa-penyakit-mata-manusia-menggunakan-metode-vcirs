<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'aprieza putri salsabila',
            'email' => 'apriezaputrisalsabila20@gmail.com',
            'password' => Hash::make('admin1'),
            'role' => 'admin',
        ]);

        // Pengguna biasa
        User::create([
            'name' => 'qhania putri zhafira',
            'email' => 'qhaniaputrizhafira@gmail.com',
            'password' => Hash::make('pengguna1'),
            'role' => 'pengguna',
        ]);
    }
}
