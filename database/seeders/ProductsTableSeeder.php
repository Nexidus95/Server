<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
		
		$faker = \Faker\Factory::create();
		
		for($i = 0; $i <50; $i++){
			Product::create([
				'name' => $faker->sentence,
				'lenght' => $faker->randomDigit,
				'height' => $faker->randomDigit,
				'width' => $faker->randomDigit,
				'type' => $faker->sentence,
				'status' => $faker->sentence,
				'ordersPerDay' => $faker->randomDigit
				]);
		}
    }
}
