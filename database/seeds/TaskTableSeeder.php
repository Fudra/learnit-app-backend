<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes = \App\Models\Quiz::all();
        $types = \App\Models\TaskType::all();
        $tasks = factory(\App\Models\Task::class, 80)->create();

        foreach ($tasks as $task) {
            $quiz = $quizzes->random(1)->first();
            $type = $types->random(1)->first();
            $task->update(['order' => $task->id, 'quiz_id' => $quiz->id, 'task_type_id' => $type->id]);
        }
    }
}
