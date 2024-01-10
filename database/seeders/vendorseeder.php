<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class vendorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,4) as $value){
            DB::table('vendor_info')->insert(
                [
                    'comp' =>$faker->company,
                    'owner' =>$faker->firstName,
                    'contact' =>$faker->phoneNumber,
                    'type' =>$faker->randomElement(['Jersey', 'Foods', 'Drinks','Stationery']),
                    'product' =>$faker->randomDigit(),
                    'date' =>$faker->date(),
                ]
                );
        }
    }
}
