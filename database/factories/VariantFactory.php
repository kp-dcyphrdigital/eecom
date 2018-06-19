<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Variant::class, function (Faker $faker) {
    return [
        'product_id' => 1,
        'sku' => $faker->unique()->numberBetween(10001, 99999),
    ];
});
