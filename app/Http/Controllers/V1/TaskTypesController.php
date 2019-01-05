<?php

namespace App\Http\Controllers\V1;

use App\Models\TaskType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskTypeRequest;
use App\Transformers\TaskTypeTransformer;

class TaskTypesController extends Controller
{
    /**
     * Show all resources in storage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taskTypes = TaskType::all();

        return fractal()
            ->collection($taskTypes)
            ->transformWith(new TaskTypeTransformer())
            ->toArray();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskTypeRequest $request)
    {
        $taskType = TaskType::create(['name' => $request->get('name')]);

        return fractal()
            ->item($taskType)
            ->transformWith(new TaskTypeTransformer())
            ->toArray();
    }
}
