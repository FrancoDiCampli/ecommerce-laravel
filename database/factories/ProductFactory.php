<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'slug' => $faker->slug,
        'details' => $faker->sentence(8),
        'price' => $faker->randomFloat(2,2,9999),
        'description' => $faker->text(),
        'image' => 'images/product.png',

    ];
});
