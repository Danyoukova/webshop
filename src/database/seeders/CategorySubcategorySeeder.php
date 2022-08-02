<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Category: Hairproducts - Subcategory: Hair care*/
        DB::table('category_subcategories')->insert([
            'category_id' => 1,
            'subcategory_id' => 1,
            'created_at' => date('Y-m-d H:i:s')]);

        //Category: Hairproducts - Subcategory: Hair color
        DB::table('category_subcategories')->insert([
            'category_id' => 1,
            'subcategory_id' => 2,
            'created_at' => date('Y-m-d H:i:s')]);

        //Category: Hairproducts - Subcategory: Hair care
        DB::table('category_subcategories')->insert([
            'category_id' => 1,
            'subcategory_id' => 3,
            'created_at' => date('Y-m-d H:i:s')]);



        /*Category: Skincare - Subcategory: Face*/
        DB::table('category_subcategories')->insert([
            'category_id' => 2,
            'subcategory_id' => 4,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /*Category: Skincare - Subcategory: Body*/
        DB::table('category_subcategories')->insert([
            'category_id' => 2,
            'subcategory_id' => 5,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*Category: Make-up - Subcategory: Face make-up*/
        DB::table('category_subcategories')->insert([
            'category_id' => 3,
            'subcategory_id' => 7,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /*Category: Make-up - Subcategory: Eyes make-up*/
        DB::table('category_subcategories')->insert([
            'category_id' => 3,
            'subcategory_id' => 8,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /*Category: Make-up - Subcategory: Lips make-up*/
        DB::table('category_subcategories')->insert([
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => date('Y-m-d H:i:s')
        ]);

    }
}
