<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderlines')->insert([
            'order_id' => 1,
            'product_id' => 1,
            'quantity'=> 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orderlines')->insert([
            'order_id' => 1,
            'product_id' => 2,
            'quantity'=> 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
