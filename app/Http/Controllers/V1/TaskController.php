<?php

namespace App\Http\Controllers\V1;

use App\Models\Quiz;
use App\Models\Task;
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
        // todo; add new Task
        dd($request->toArray());

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
