<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(CategorySubcategorySeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderlineSeeder::class);
    }
}
