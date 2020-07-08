<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Area;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Area::class, function (Faker $faker) {
    return [
        'city_id' => 1,
        'name' => $faker->name,
    ];
});
