<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'zoads', 'username' => 'beta0', 'password' => 'Zoadster42$@!', 'role_id' => 1],
        ];

        foreach($users as $user) {
            User::create([
                'name' => $user['name'],
                'username' => $user['username'],
                'password' => Hash::make($user['password']),
                'role_id' => $user['role_id'],
            ]);
        }
    }
}
