<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
    	'name' => $name = $faker->unique()->sentence,
    	'slug' => str_slug($name, '-'),
    	'image' => 'products/glove1.jpg',
    ];
});
