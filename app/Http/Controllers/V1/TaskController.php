<?php

namespace App\Http\Controllers\V1;

use App\Models\Answer;
use App\Models\Quiz;
use App\Models\Task;
use App\Models\TaskType;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use App\Transformers\TaskTransformer;
use App\Http\Requests\TaskTypeRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return fractal()
            ->collection(Task::all())
            ->transformWith(new TaskTransformer())
            ->parseIncludes('type')
            ->toArray();
    }

    public function tasks(Quiz $quiz, $page = 1)
    {

        $count = $quiz->tasks->count();
        $meta = [
            'pages' => [
                'prev' => $page <= 1 ? null : $page - 1,
                'current' => (int)$page,
                'next' => $page >= $count ? null : $page + 1,
                'first' => 1,
                'last' => $count
            ],
        ];

        return fractal()
            ->collection($quiz->tasks->forPage($page, 1)->all())
            ->transformWith(new TaskTransformer())
            ->parseIncludes(['type', 'answers'])
            ->addMeta($meta)
            ->toArray();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        // create new task
        $task = new Task([
            'text' => $request->get('text'),
            'order' => 1,
        ]);

        $task->quiz_id = $request->get('quiz_id');
        $task->task_type_id = $request->get('type_id');
        $task->save();

        $task->update([
            'order' => $task->id,
        ]);

        $answers = $request->get('answers');

        foreach ($answers as $answer) {
            $answer = new Answer([
                'text' => $answer['text'],
                'correct_choice' => $answer['correct_choice'],
                'correct_text' => $answer['correct_text'],
                'order' => 1,
            ]);

            $task->answers()->save($answer);

            $answer->update([
                'order' => $answer->id,
            ]);
        }

        return response('',201);
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return fractal()
            ->item($task)
            ->transformWith(new TaskTransformer())
            ->parseIncludes('type')
            ->toArray();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Task $task, Request $request)
    {
        dd($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response('', 200);
    }
}
