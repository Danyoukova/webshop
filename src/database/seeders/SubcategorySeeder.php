<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Hairproducts subcategories*/
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Hair care',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Hair color',
            'created_at' => date('Y-m-d H:i:s')]);
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Hair styling',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*Skincare subcategories*/
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Face skincare',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Body skincare',
            'created_at' => date('Y-m-d H:i:s')]);

        /*Make-up subcategories*/
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Face make-up',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Eyes make-up',
            'created_at' => date('Y-m-d H:i:s')]);
        DB::table('subcategories')->insert([
            'subcategory_name' => 'Lips make-up',
            'created_at' => date('Y-m-d H:i:s')
        ]);

    }
}
