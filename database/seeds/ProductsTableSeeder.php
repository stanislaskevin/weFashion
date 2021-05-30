<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i =0; $i < 80; $i++)
        {
            App\Product::create([
                'title' => $faker->sentence(5),
                'description' => $faker->text(),
                'price' => $faker->numberBetween(35,7000),
                'reference' => $faker->numberBetween(12345, 999999999),
                'image' => 'https://via.placeholder.com/250',
                'size' => $faker->randomElement(['XS','S','L','M','XL']),
                'solde' => $faker->randomElement(['solde', 'standard']),
                'public' => 'public',
            ])->categories()->attach([rand(1,2)]);
        }
    }
}
