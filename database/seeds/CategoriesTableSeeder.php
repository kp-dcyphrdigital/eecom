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
	        'name' => 'Hockey Skates',
	        'slug' => 'hockey-skates',
	        'depth' => 1,
	        'image' => 'products/skate1.jpg',
		]);
		factory('App\Category')->create([
			'parent_id' => 1,
	        'name' => 'Ice Hockey Skates',
	        'slug' => 'ice-hockey-skates',
	        'depth' => 2,
	        'image' => 'products/skate2.jpg',
		]); 
		factory('App\Category')->create([
	        'name' => 'Hockey Sticks',
	        'slug' => 'hockey-sticks',
	        'depth' => 1,
	        'image' => 'products/stick1.jpg',
		]);
		factory('App\Category')->create([
			'parent_id' => 3,
	        'name' => 'Composite Hockey Sticks',
	        'slug' => 'composite-hockey-sticks',
	        'depth' => 2,
	        'image' => 'products/stick2.jpg',
		]); 
		factory('App\Category')->create([
	        'name' => 'Protective',
	        'slug' => 'protective',
	        'depth' => 1,
	        'image' => 'products/glove1.jpg',
		]);
		factory('App\Category')->create([
			'parent_id' => 5,
	        'name' => 'Hockey Gloves',
	        'slug' => 'hockey-gloves',
	        'depth' => 2,
	        'image' => 'products/glove2.jpg',
		]);
		for ($i=0; $i < 10; $i++) {
			factory('App\Category')->create([
				'parent_id' => 1,
				'image' => 'products/skate' . rand(1,2) . '.jpg',
			]);
		}
    }
}
