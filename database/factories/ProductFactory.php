<?php

use App\Models\Category;
use App\Models\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $faker->text(100),
        'description' => $faker->realText(),
        'price' => random_int(100, 1000),



    ];
});
