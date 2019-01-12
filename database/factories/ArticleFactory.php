<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->texxt(50),
        'body'  => $faker->text(200)
    ];
});
