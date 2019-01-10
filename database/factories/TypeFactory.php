<?php

$factory->define(App\Type::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
