<?php

namespace App\Transformers;

use App\Models\Progress;
use League\Fractal\TransformerAbstract;

class ProgressTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Progress $progress)
    {
        return [
            //
        ];
    }
}
