<?php

$factory->define(App\Download::class, function (Faker\Generator $faker) {
    return [
        "link" => $faker->name,
        "product_id" => factory('App\Product')->create(),
    ];
});
