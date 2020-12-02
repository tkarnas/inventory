<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['brand_name' => 'Samsung'],
            ['brand_name' => 'Apple'],
            ['brand_name' => 'Lenovo'],
            ['brand_name' => 'Garmin'],
            ['brand_name' => 'LG']
        ]);
    }
}
