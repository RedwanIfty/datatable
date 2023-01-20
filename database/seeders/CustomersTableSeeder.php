<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 50; $i++) {
            DB::table('customers')->insert([
                'start' => '2023-01-01',
                'end' => '2023-01-02',
                'bill_no' => $i + 10000,
                'water' => random_int(10, 50),
                'vat' => 0.1,
                'charge' => random_int(20, 100),
                'total' => 0,
                'miscellaneous' => 0,
            ]);
        }
    }
}
