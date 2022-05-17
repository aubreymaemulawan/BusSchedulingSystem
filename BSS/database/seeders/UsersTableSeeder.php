<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        \DB:: table('users')->truncate();

        \DB:: table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@email.com',
            'password' => bcrypt('admin123'),
            'userType' => 'admin',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Dispatch',
            'email' => 'Dispatch@email.com',
            'password' => bcrypt('dispatch123'),
            'userType' => 'dispatch',
        ]);
        \DB:: table('users')->insert([
            'name' => 'Admin2',
            'email' => 'Admin2@email.com',
            'password' => bcrypt('admin123'),
            'userType' => 'admin',
        ]);
        
    }
}
