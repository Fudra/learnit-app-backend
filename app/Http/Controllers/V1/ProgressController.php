<?php

namespace App\Http\Controllers\V1;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\ProgressTransformer;


class ProgressController extends Controller
{
    public function show(Quiz $quiz, Request $request)
    {
        if($user = auth()->user())
        {
            $progressForUser = $quiz->progress()->forUser($user->id)->get()->unique('task_id');

            $meta = [
                'progress' => [
                    'count' => $progressForUser->count(),
                    'quiz' => $quiz->tasks()->count(),
                    'percentage' => round(((float)$progressForUser->count() / (float)$quiz->tasks()->count() ) * 100 )
                ],
            ];

            return fractal()
                ->collection($progressForUser)
                ->transformWith(new ProgressTransformer())
                ->addMeta($meta)
                ->parseIncludes('task.type')
                ->toArray();
        }

        dd('you must be logged in');
    }
}
