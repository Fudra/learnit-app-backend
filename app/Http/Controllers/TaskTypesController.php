<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskTypeRequest;
use App\Models\TaskType;
use App\Transformers\TaskTypeTransformer;
use Illuminate\Http\Request;

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
