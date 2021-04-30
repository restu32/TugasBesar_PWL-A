<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $limit = 5;

        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'User',
            ],
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }

        $users = [
            [
                'name' => 'Admin A',
                'username' => 'admin_r',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(123456),
                'photo' => 'admin.jpg',
                'roles_id' => 1
            ],
            [
                'name' => 'User A',
                'username' => 'user_r',
                'email' => 'user@gmail.com',
                'password' => Hash::make(123456),
                'photo' => 'user.jpg',
                'roles_id' => 2
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}