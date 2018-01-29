<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    static $password; 

    return [
        'nombres' => $faker->sentence(2),
        'apellidos' => $faker->sentences(2),
        'email' => $faker->unique()->safeEmail,
        'contrasena' => $password ?: $password = bcrypt('secret'),
    ];
});
