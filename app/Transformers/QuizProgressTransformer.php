<?php

namespace App\Transformers;

use App\Models\Quiz;
use League\Fractal\TransformerAbstract;

class QuizProgressTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Quiz $quiz
     * @return array
     */
    public function transform(Quiz $quiz)
    {
        if ($user = auth()->user()) {
            $progressForUser = $quiz->progress()->forUser($user->id)->get()->unique('task_id');

            return [
                'count' => $progressForUser->count(),
                'quiz' => $quiz->tasks()->count(),
                'percentage' => round(((float)$progressForUser->count() / (float)$quiz->tasks()->count()) * 100)
            ];
        }

        return [];
    }
}
