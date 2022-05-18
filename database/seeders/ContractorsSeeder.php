<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContractorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contractors')->insert([

            'business_name' => Str::random(7),
            'first_name' => Str::random(5),
            'last_name' => Str::random(5),
            'email' => Str::random(6) . '@gmail.com',
            'landline_no' => Str::random(10),
            'mobile_no' => Str::random(10),
            'house_no' => Str::random(3),
            'street_name' => Str::random(3),
            'town_city' => Str::random(7),
            'postal_code' => Str::random(3),
            'rate_option' => Str::random(2),
            'rate' => Str::random(2),
            'preferred_communication' => Str::random(4),
            'area_of_coverage' => Str::random(6),
            'isMobile' => Str::random(1),
            'approved_by' => Str::random(3),
            'Recommendation' => Str::random(4),
            'notes' => Str::random(6),
         ]);
    }
}
