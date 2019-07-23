<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {
    return [
        'FirstName' => $faker->Name,
        'LastName' => $faker->Name,
        'email' => $faker->unique()->safeEmail,
        'PhoneNo' => '53135',
        'Comment' => $faker->paragraph,
    ];
});
