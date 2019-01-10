<?php

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        "description" => $faker->name,
        "product_id" => factory('App\Product')->create(),
    ];
});
