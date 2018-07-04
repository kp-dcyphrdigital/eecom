<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
    	'image' => 'products/skate1.jpg',
    	'colour' => 0,
    ];
});
