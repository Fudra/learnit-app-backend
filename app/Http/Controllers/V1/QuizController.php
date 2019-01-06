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
     * @param Quiz $quiz
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz, Request $request)
    {
        return fractal()
            ->item($quiz)
            ->transformWith(new QuizTransformer())
            ->parseIncludes(['categories', 'tasks']) // tasks.type
            ->toArray();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Quiz $quiz
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Quiz $quiz, Request $request)
    {
        $quiz->update($request->only(['name', 'description']));
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
     * @param Quiz $quiz
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Quiz $quiz, Request $request)
    {
        $quiz->delete();

        return response();
    }
}
