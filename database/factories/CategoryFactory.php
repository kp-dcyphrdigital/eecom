<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
		'slug' => 	$faker->randomLetter . 
					$faker->randomLetter .
					$faker->randomLetter,
        'depth' => 1,
		'image' => '/bad.jpg',
    ];
});
