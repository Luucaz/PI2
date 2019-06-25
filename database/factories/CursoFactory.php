<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'coordc_id' => factory(Coordc::class)->create()
    ];
});
