<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Coordc;
use Faker\Generator as Faker;

$factory->define(Coordc::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'cpf'  => $faker->phoneNumber,
    ];
});
