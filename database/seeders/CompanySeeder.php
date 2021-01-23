<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('companies')->insert([
            [
                'company_name' => 'Combis',
                'vat_number' => rand(10, 100)
            ],
            [
                'company_name' => 'HT logistika',
                'vat_number' => rand(10, 100)
            ],
            [
                'company_name' => 'Samsung',
                'vat_number' => rand(10, 100)
            ]
        ]);
    }
}
