<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\QuizValidationRequest;
use App\Models\Answer;
use App\Models\Progress;
use App\Models\Quiz;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class QuizValidationController extends Controller
{
    public function __invoke(Request $request)
    {
        $answers = $request->get('answers');

        $correct = [];

        foreach ($answers as $answer) {
            array_push($correct, $this->validate($answer));
        }

        $this->saveProgress($correct);
        return $correct;
    }

    private function saveProgress($answers)
    {
        if ($user = auth()->user()) {
//            $correct = [
//                    'text' => $answer->correct_text,
//                    'choice' => $answer->correct_choice,
//            ];
//            array_push($answerValidation, $correct);

            // todo: check if progress for quiz and user exists
            //


            $progress = new Progress;
            $progress->progress = json_encode($answers);
            $progress->user_id = $user->id;
            $progress->quiz_id = \request()->get('quiz_id');
            $progress->task_id = \request()->get('task_id');
            $progress->save();
        }
    }

    private function validate($item)
    {
        $answer = Answer::find($item['id']);

        $answerValidation = [
            'answer_id' => $item['id'],

            'is_correct' => [
                'text' => $this->validateLine($answer->correct_text, $item['answer_text']),
                'choice' => $this->validateLine($answer->correct_choice, $item['answer_choice'])
            ]
        ];

        return $answerValidation;
    }

    private function validateLine($item1, $item2)
    {
        if (is_null($item1) && is_null($item2)) {
            return null;
        }

        if (is_bool($item1)) {
            return ($item1 || (bool)$item2) ? $item1 === (bool)$item2 : null;
        }

        return Str::lower($item1) === Str::lower($item2);
    }
}
