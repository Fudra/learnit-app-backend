<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker){
    return [
        'text' => $faker->text(random_int(30, 100)),
        'order' => 1,
        'quiz_id' => 1,
        'task_type_id' => 1
    ];
});
