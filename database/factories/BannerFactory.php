<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Banner::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'desktopUrl' => "home-banner/Vapor_Skate_Matthews_1500x500_TW_BG.jpg",
        'mobileUrl' => "home-banner/mob.png",
        'altText' => "Some Atl Text",
    ];
});
