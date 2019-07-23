<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tattoo;
use Faker\Generator as Faker;

$factory->define(Tattoo::class, function (Faker $faker) {
    return [
            'Tattoo_Name'=>$faker->Name,
            'Tattoo_Detail'=>$faker->paragraph,
            'Price'=>'50',
            'Quantity'=>'20',
            'Tattoo_Image'=>$faker->image,
    ];
});
