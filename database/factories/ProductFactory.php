<?php

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "description" => $faker->name,
        "link" => $faker->name,
        "download_size" => $faker->randomNumber(2),
    ];
});
