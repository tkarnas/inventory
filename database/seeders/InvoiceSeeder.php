<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'invoice_date_at' => today(),
            'company_id' => '2',
            'product_id' => '1',
            'quantity' => '5',
        ]);
    }
}
