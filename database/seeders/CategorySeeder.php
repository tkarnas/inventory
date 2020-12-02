<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => 'Monitor'],
            ['category_name' => 'Mobitel'],
            ['category_name' => 'Sat'],
            ['category_name' => 'Laptop'],
            ['category_name' => 'Miš'],
            ['category_name' => 'Tipkovnica'],
            ['category_name' => 'TV']
        ]);
    }
}
