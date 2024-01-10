<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;


class inventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,5) as $value){
            DB::table('inventory') -> insert([
                'PCode' => $faker->firstName,
                'PName' => $faker->lastName,
                'Description' => $faker->address,
                'qty' => $faker->randomDigit(),
                'price' => $faker->randomNumber(),
            ]);
        }
    }
}
