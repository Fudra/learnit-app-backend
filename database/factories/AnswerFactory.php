<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Answer::class, function (Faker $faker) {
    return [
        'text' => $faker->words(random_int(3,8), true),
        'task_id' => 1,
        'order' => 1,
    ];
});
