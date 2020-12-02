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
                'company_name' => Str::random(10),
                'vat_number' => rand(10, 100)
            ],
            [
                'company_name' => Str::random(10),
                'vat_number' => rand(10, 100)
            ],
            [
                'company_name' => Str::random(10),
                'vat_number' => rand(10, 100)
            ]
        ]);
    }
}
