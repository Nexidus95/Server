<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Assembly;
class AssembliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assembly::truncate();
		
		$faker = \Faker\Factory::create();
		
		for($i = 0; $i <50; $i++){
			Assembly::create([
				'name' => $faker->sentence,
				'type' => $faker->sentence,
				'stage' => $faker->randomDigit,
				'status' => $faker->sentence,
				'comment' => $faker->paragraph
				]);
		}
    }
}
