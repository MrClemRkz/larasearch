<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'image' => $faker->imageUrl(400, 300),
        'price' => $faker->numberBetween(3,100),
        'description' => $faker->paragraph(2)
    ];
});
