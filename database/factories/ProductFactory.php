<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        'Product_Name'=>$faker->Name,
        'Product_Detail'=>$faker->paragraph,
        'Price'=>'20',
        'Quantity'=>'50',
        'Product_Image'=>$faker->image,
    ];
});
