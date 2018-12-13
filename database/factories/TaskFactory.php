<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Task::class, function (Faker $faker){
    return [
        'text' => $faker->text(random_int(30, 100)),
        'order' => 1,
        'quiz_id' => 1,
        'task_type_id' => 1
    ];
});
