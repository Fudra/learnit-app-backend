<?php

namespace App\Transformers;

use App\Models\Task;
use League\Fractal\TransformerAbstract;

class TaskTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'type',
        'answers'
    ];

    /**
     * A Fractal transformer.
     *
     * @param Task $task
     * @return array
     */
    public function transform(Task $task)
    {
        return [
            'id' => $task->id,
            'text' => $task->text,
            'order' => $task->order,
        ];
    }

    /**
     * Include Task
     *
     * @param Task $task
     * @return \League\Fractal\Resource\Item
     */
    public function includeType(Task $task)
    {
        return $this->item($task->type()->first(), new TaskTypeTransformer());
    }

    public function includeAnswers(Task $task)
    {
        return $this->collection($task->answers, new AnswerTransformer());
    }
}
