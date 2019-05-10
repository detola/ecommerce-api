<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'description'=>$faker->paragraph,
        'price'=>$faker->numberBetween(100, 10000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(2,30),
        'user_id'=>function(){
        return User::all()->random();
    }
    ];
});
