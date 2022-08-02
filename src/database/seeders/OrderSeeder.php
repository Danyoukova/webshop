<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'customer_id' => 1,
            'billing_address_id' => 3,
            'shipping_address_id' => 4,
            'total_amount' => 100,
            'vat_amount' => 100 * 0.21,
            'date_time' => date('Y-m-d H:i:s'),

            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
