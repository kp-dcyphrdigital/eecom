<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
		'slug' => 	$faker->randomLetter . 
					$faker->randomLetter . 
					$faker->randomLetter. 
					$faker->randomLetter,
		'name' => $faker->words(3, true),
		'description' => $faker->sentence,
		'image' => '/bad.jpg',
		'rrp' => $rrp = rand(70, 300) * 100,
		'price' => rand(50, ($rrp/100) - 10) * 100,
		'stock' => rand(0, 10),
    ];
});
