<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
                'name' => 'User R',
                'username' => 'user_r',
                'email' => 'user@gmail.com',
                'password' => Hash::make(123456),
                'photo' => 'user.jpg',
                'roles_id' => 2
            ],
            [
                'name' => 'Admin r',
                'username' => 'admin_r',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(123456),
                'photo' => 'admin.jpg',
                'roles_id' => 1
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}