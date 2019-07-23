<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\newsletter;
use Faker\Generator as Faker;

$factory->define(newsletter::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
    ];
});
