<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'cantidad_asientos' => $faker->numberBetween($min = 1, $max = 10),
		'estado_reservacion' => $faker->boolean
    ];
});