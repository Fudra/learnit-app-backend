<?php

use App\Models\TaskType;
use Illuminate\Database\Seeder;

class TaskTypeTableSeeder extends Seeder
{

    protected $types = [
        'single-choice',
        'multiple-choice',
        'text',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->types as $type)
        {
            TaskType::create(['name' => $type]);
        }
    }
}
