<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Tipo_usuario;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Tipo_usuario::class, function (Faker $faker) {
    return [
        //
		'nombre_tipo_u' => $faker->text($maxNbChars = 50)
    ];
});
