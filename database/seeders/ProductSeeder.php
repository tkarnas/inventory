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
           [ 'product_name' => 'Galaxy s20 ultra',
            'imei' => '123312312',
            'stock' => '5',
            'price' => '8999',
            'company_id' => '3',
            'category_id' => '2',
            'brand_id' => '1'
            ],
            [ 'product_name' => 'Apple watch S6 Nike',
            'imei' => '321564123',
            'stock' => '2',
            'price' => '3000',
            'company_id' => '1',
            'category_id' => '3',
            'brand_id' => '2'
            ],
        ]);
    }
}
