<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([
            'name' => 'visitor',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([
            'name' => 'customer',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
