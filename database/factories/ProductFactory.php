<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
		'name' => $faker->word,
		'description' => $faker->sentence,
		'image' => $faker->imageUrl(320, 240),
    ];
});
