<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Quiz::class, function (Faker $faker) {
    $categories = \App\Models\Category::get();
    $random = $categories->random(random_int(1, $categories->count()));

    return [
        'name' => $faker->name,
        'description' => $faker->sentence(),
        'thumbnail' => 'https://via.placeholder.com/150x150',
        'categories' => $random->pluck('id'),
    ];
});
