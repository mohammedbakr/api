<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'stock' => $faker->randomDigit,
        'price' => $faker->numberBetween(100, 1000),
        'discount' => $faker->numberBetween(2, 30),
        'user_id' => function () {
            return User::all()->random();
        }
    ];
});
