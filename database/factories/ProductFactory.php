<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'price'=>$faker->numberBetween(1000,6000),
        'category_id'=> function() {
            return Category::query()->inRandomOrder()->first()->id;
            //obtener random category id
        },
        'created_by'=> function() {
            return Category::query()->inRandomOrder()->first()->id;
            //obtener random category id
        },
    ];
});
