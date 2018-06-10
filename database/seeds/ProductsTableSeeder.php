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

        factory('App\Product')->create([
            'name' => 'Baur Supreme 1S Ice Hockey Skate',
            'image' => 'products/skate1.jpg',
            'rating' => 4,
            'featured' => 1,
        ])->categories()->attach([2]);

        factory('App\Product')->create([
            'name' => 'Bauer Nexus 1N Griptac Hockey Stick 17',
            'image' => 'products/stick1.jpg',
            'rating' => 3,
            'featured' => 1,
        ])->categories()->attach([7]);

        factory('App\Product')->create([
            'name' => 'Bauer S17 Supreme S170 Glove New',
            'image' => 'products/glove1.jpg',
            'rrp' => 12900,
            'price' => 6000,
            'rating' => 5,
            'featured' => 1,
        ])->categories()->attach([9,15]);

		for ($i=0; $i < 10; $i++) { 
            factory('App\Product')->create([
                'image' => 'products/skate' . rand(1,2) . '.jpg',
                'badge' => rand(1, 10) < 3 ? 'New' : null,
                'rrp' => $rrp = rand(70, 300) * 100,
                'price' => rand(1, 10) < 3 ? $rrp - 1000 : $rrp,
                'rating' => rand(0, 5),
                'featured' => $i < 6 ? 1 : 0,    
            ])->categories()->attach([2]);

            factory('App\Product')->create([
                'image' => 'products/stick' . rand(1,4) . '.jpg',
                'badge' => rand(1, 10) < 3 ? 'New' : null,
                'rrp' => $rrp = rand(70, 300) * 100,
                'price' => rand(1, 10) < 3 ? $rrp - 1000 : $rrp,
                'rating' => rand(0, 5),  
                'featured' => $i < 6 ? 1 : 0,    
            ])->categories()->attach([7]);

            factory('App\Product')->create([
                'image' => 'products/glove' . rand(1,2) . '.jpg',
                'badge' => rand(1, 10) < 3 ? 'New' : null,
                'rrp' => $rrp = rand(70, 300) * 100,
                'price' => rand(1, 10) < 3 ? $rrp - 1000 : $rrp,
                'rating' => rand(0, 5),
                'featured' => $i < 6 ? 1 : 0,
            ])->categories()->attach([9]);
         }
    }
}
