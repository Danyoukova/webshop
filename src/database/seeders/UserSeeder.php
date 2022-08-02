<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*ADMIN*/
        DB::table('users')->insert([
            'role_id' => '1',
            'shipping_address_id' => 3,
            'billing_address_id' => 4,
//            'first_name' => 'nata',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        /*VISITOR*/
        DB::table('users')->insert([
            'role_id' => '2',
            'shipping_address_id' => 1,
            'billing_address_id' => 2,
//            'first_name' => 'Ilse',
//            'last_name' => 'De Smet',
            'name' => 'De Smet',
            'email' => 'desmet@gmail.com',
            'password' => 'test',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /*CUSTOMERS*/


        DB::table('users')->insert([
            'role_id' => '3',
            'shipping_address_id' => 3,
            'billing_address_id' => 4,
//            'first_name' => 'Benny',
//            'last_name' => 'Vandewalle',
            'name' => 'Vandewalle',
            'email' => 'vandewalle@gmail.com',
            'password' => 'test',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
