<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'username' => 'admin',
                'role_id' => '1'
            ],
            [
                'first_name' => 'User',
                'last_name' => 'User',
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'username' => 'user',
                'role_id' => '2'
            ],
        ]);
    }
}
