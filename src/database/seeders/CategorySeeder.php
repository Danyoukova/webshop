<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'category_name' => 'Hairproducts',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Skincare',
            'created_at' => date('Y-m-d H:i:s')]);
        DB::table('categories')->insert([
            'category_name' => 'Make-up',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
