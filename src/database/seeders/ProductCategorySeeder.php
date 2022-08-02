<?php

namespace Database\Seeders;

use App\Models\productCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Hairproducts*/
        DB::table('product_categories')->insert([
            'product_id' => '1',
            'category_subcategory_id' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('product_categories')->insert([
            'product_id' => '2',
            'category_subcategory_id' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '3',
            'category_subcategory_id' => 3,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*Skincare*/
        DB::table('product_categories')->insert([
            'product_id' => '4',
            'category_subcategory_id' => 4,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('product_categories')->insert([
            'product_id' => '5',
            'category_subcategory_id' => 5,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*Make-up*/
        DB::table('product_categories')->insert([
            'product_id' => '6',
            'category_subcategory_id' => 6,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('product_categories')->insert([
            'product_id' => '7',
            'category_subcategory_id' => 7,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('product_categories')->insert([
            'product_id' => '8',
            'category_subcategory_id' => 8,
            'created_at' => date('Y-m-d H:i:s')
        ]);




        /*
                $data = [];
                for ($i = 1; $i < 9; $i++) {
                    $data[] = [
                        'category_subcategory_id' => $i,
                        'product_id' => $i,
                        'created_at' => date('Y-m-d H:i:s')
                    ];
                }
                foreach ($data as $productCategory){
                    DB::table('product_categories')->insert($productCategory);
                }*/

    }
}
