<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'country' => 'België',
            'city' => 'Gent',
            'postal_code' => '9000',
            'street' => "Parklaan",
            'street_number' => 9,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('addresses')->insert([
            'country' => 'België',
            'city' => 'Brugge',
            'postal_code' => '8000',
            'street' => "Rijselstraat",
            'street_number' => 5,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('addresses')->insert([
            'country' => 'België',
            'city' => 'De Haan',
            'postal_code' => '8420',
            'street' => "Karellaan",
            'street_number' => 15,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('addresses')->insert([
            'country' => 'België',
            'city' => 'De Haan',
            'postal_code' => '8420',
            'street' => "Karellaan",
            'street_number' => 15,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
