<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Categories::create([
            'title' => 'Homme',
            'slug' => 'homme'
        ]);

        App\Categories::create([
            'title' => 'Femme',
            'slug' => 'femme'
        ]);
    }
}
