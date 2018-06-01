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
            'name' => 'deleniti',
        ])->categories()->attach( App\Category::where('name', 'ipsa')->get() );

		factory('App\Product', 100)->create()->each(function ($p) {
        	$categories = App\Category::inRandomOrder()->take(3)->pluck('id')->toArray();
        	$i = rand(0, 2);
        	while ($i < 3) {
	        	$p->categories()->attach(
	        		App\Category::find($categories[$i])
	        	);
	        	$i++;
        	}
    	});
    }
}
