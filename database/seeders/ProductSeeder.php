<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Galaxy s20 ultra',
            'IMEI' => '1233123123',
            'stock' => '5',
            'price' => '8999',
            'company_id' => '1',
            'category_id' => '1',
            'brand_id' => '1',
        ]);
    }
}
