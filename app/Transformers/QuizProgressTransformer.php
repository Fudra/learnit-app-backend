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

            $tasksCount = $quiz->tasks()->count();
            return [
                'count' => $progressForUser->count(),
                'quiz' => $tasksCount,
                'percentage' => $tasksCount == 0 ? 0 : round(((float)$progressForUser->count() / (float)$tasksCount) * 100)
            ];
        }

        return [];
    }
}
