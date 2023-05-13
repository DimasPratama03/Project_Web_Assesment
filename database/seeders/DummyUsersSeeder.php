<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin02',
                'email' => 'Admin02@gmail.com',
                'role' => 'admin',
                'password' =>bcrypt('12345678')
            ],
            [
                'name' => 'Admin01',
                'email' => 'Admin01@gmail.com',
                'role' => 'admin',
                'password' =>bcrypt('12345678')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
