<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
