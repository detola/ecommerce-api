<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'description'=>$faker->paragraph,
        'price'=>$faker->numberBetween(100, 10000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(2,30)
    ];
});
