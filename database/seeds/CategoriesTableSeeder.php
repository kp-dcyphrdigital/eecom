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
		factory('App\Category')->create([
	        'name' => 'est',
	        'depth' => 1,
		]);
		factory('App\Category')->create([
	        'name' => 'ipsa',
	        'depth' => 2,
		]); 
		factory('App\Category', 10)->create();
    }
}
