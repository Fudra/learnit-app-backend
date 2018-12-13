<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Quiz::class, function (Faker $faker) {
    return [
        'name' => $faker->words(random_int(3,8), true),
        'description' => $faker->sentence(),
        'thumbnail' => 'https://via.placeholder.com/150x150',
    ];
});
