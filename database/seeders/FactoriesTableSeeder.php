<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Factory;
class FactoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Factory::truncate();
		
		$faker = \Faker\Factory::create();
		
		for($i = 0; $i <50; $i++){
			Factory::create([
				'company' => $faker->sentence,
				'city' => $faker->sentence,
				'adress' => $faker->sentence,
				'workerCount' => $faker->randomDigit,
				'status' => $faker->sentence
				]);
		}
    }
}
