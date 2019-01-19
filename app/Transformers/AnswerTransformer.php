<?php

namespace App\Transformers;

use App\Models\Answer;
use League\Fractal\TransformerAbstract;

class AnswerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Answer $answer
     * @return array
     */
    public function transform(Answer $answer)
    {
        return [
            'id' => $answer->id,
            'order' => $answer->order,
            'text' => $answer->text,
//            'correct_choice' => $answer->correct_choice,
//            'correct_text' => $answer->correct_text,
        ];
    }
}
