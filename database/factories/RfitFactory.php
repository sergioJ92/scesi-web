<?php

use Faker\Generator as Faker;

$factory->define(\App\Rfit::class, function (Faker $faker) {
    return [
        'codigo_rfit' => $faker->unique()->sentence(1, false)
    ];
});
