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
                'first_name' => 'Tomislav',
                'last_name' => 'Karnas',
                'email' => 'ufctomo@gmail.com',
                'password' => Hash::make('password'),
                'username' => 'tomo',
                'role_id' => '1'
            ],
            [
                'first_name' => 'Nicole',
                'last_name' => 'Galovic',
                'email' => 'niki@gmail.com',
                'password' => Hash::make('password'),
                'username' => 'niki',
                'role_id' => '2'
            ],
        ]);
    }
}
