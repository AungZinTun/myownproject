<?php

$factory->define(App\Like::class, function (Faker\Generator $faker) {
    return [
        "like" => 0,
        "product_id" => factory('App\Product')->create(),
    ];
});
