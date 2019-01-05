<?php

namespace App\Http\Controllers\V1;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use App\Http\Controllers\Controller;
use App\Transformers\QuizTransformer;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return fractal()
            ->collection(Quiz::all())
            ->transformWith(new QuizTransformer())
            ->parseIncludes('categories')
            ->toArray();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizRequest $request)
    {
        $quiz = Quiz::create($request->only(['name', 'description']));

        $quiz->categories()->attach($request->get('categories'));

        return $quiz;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);

        return fractal()
            ->item($quiz)
            ->transformWith(new QuizTransformer())
            ->parseIncludes(['categories', 'tasks'])
            ->toArray();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->only(['name', 'description']));
//
        $quiz->categories()->sync($request->get('categories'));
        $quiz->save();

        return fractal()
            ->item($quiz)
            ->transformWith(new QuizTransformer())
            ->parseIncludes('categories')
            ->toArray();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quiz::destroy($id);

        return 'ok';
    }
}
