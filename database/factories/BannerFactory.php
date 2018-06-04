<?php

use Faker\Generator as Faker;

$factory->define(App\Banner::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'desktopUrl' => "/images/home-banner/Vapor_Skate_Matthews_1500x500_TW_BG.jpg",
        'mobileUrl' => "/images/home-banner/mob.png",
        'altText' => "Some Atl Text",
    ];
});
