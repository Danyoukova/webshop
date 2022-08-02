<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        /*Hairproducts*/
        DB::table('products')->insert([
            'product_name' => 'stylingProduct',
            'price' => 10,
            'image' => 'hair_wax.jpg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'product_name' => 'coloringProduct',
            'price' => 5,
            'image' => 'hair_coloring.jpg',
            'created_at' => date('Y-m-d H:i:s')]);
        DB::table('products')->insert([
            'product_name' => 'HairCareProduct',
            'price' => 20,
            'image' => 'hair_shampoo.jpg',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*Skincare*/
        DB::table('products')->insert([
            'product_name' => 'ScinCare Body',
            'price' => 5,
            'image' => 'skincare_body_butter.jpeg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'product_name' => 'ScinCare Face',
            'price' => 15,
            'image' => 'skincare_creme.jpeg',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*Make-up*/
        DB::table('products')->insert([
            'product_name' => 'Eyes',
            'price' => 10,
            'image' => 'makeup_eye.jpg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'product_name' => 'Lipstick',
            'price' => 25,
            'image' => 'makeup_lipstick.jpg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'product_name' => 'Powder',
            'price' => 30,
            'image' => 'makeup_powder.jpg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
