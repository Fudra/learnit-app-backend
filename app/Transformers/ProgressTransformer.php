<?php

namespace App\Transformers;

use App\Models\Progress;
use League\Fractal\TransformerAbstract;

class ProgressTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'task',
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Progress $progress)
    {
        return [
            'id' => $progress->id,
            'progress' => json_decode($progress->progress),
        ];
    }

    /**
     * Include Task
     *
     * @param Progress $progress
     * @return \League\Fractal\Resource\Item
     */
    public function includeTask(Progress $progress)
    {
        return $this->item($progress->task()->first(), new TaskTransformer());
    }
}
