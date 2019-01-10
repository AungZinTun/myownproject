<?php

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        "product_id" => factory('App\Product')->create(),
        "user_id" => factory('App\User')->create(),
        "completed" => 0,
    ];
});
