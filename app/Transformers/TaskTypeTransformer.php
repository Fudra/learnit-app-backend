<?php

namespace App\Transformers;

use App\Models\TaskType;
use League\Fractal\TransformerAbstract;

class TaskTypeTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param TaskType $type
     * @return array
     */
    public function transform(TaskType $type)
    {
        return [
            'id' =>  $type->id,
            'name' => $type->name,
        ];
    }
}
