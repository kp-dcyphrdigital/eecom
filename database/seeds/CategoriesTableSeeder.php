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
		for ($i=0; $i < 3; $i++) {
			factory('App\Category')->create([
				'parent_id' => 2,
				'depth' => 3,
				'image' => 'products/skate' . rand(1,2) . '.jpg',
			]);
		}
		factory('App\Category')->create([
	        'name' => 'Hockey Sticks',
	        'slug' => 'hockey-sticks',
	        'depth' => 1,
	        'image' => 'products/stick1.jpg',
		]);
		factory('App\Category')->create([
			'parent_id' => 6,
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
			'parent_id' => 8,
	        'name' => 'Hockey Gloves',
	        'slug' => 'hockey-gloves',
	        'depth' => 2,
	        'image' => 'products/glove2.jpg',
		]);
		factory('App\Category', 5)->create([
	        'depth' => 1,
		]);
		factory('App\Category')->create([
	        'name' => 'Clearance',
	        'slug' => 'Clearance',
	        'depth' => 1,
	        'image' => 'products/glove1.jpg',
		]);
		for ($i=0; $i < 6; $i++) {
			factory('App\Category')->create([
				'parent_id' => 1,
				'depth' => 2,
				'image' => 'products/skate' . rand(1,2) . '.jpg',
			]);
			factory('App\Category')->create([
				'parent_id' => 6,
				'depth' => 2,
				'image' => 'products/stick' . rand(1,4) . '.jpg',
			]);
			factory('App\Category')->create([
				'parent_id' => 8,
				'depth' => 2,
				'image' => 'products/glove' . rand(1,2) . '.jpg',
			]);
		}
    }
}
