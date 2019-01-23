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
            return fractal()
                ->collection($quiz->progress()->forUser($user->id)->get())
                ->transformWith(new ProgressTransformer())
                ->toArray();
        }

        dd('you must be logged in');
    }
}
