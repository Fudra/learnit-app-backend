<?php

namespace App\Transformers;

use App\Models\Quiz;
use App\Models\Category;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection as LeagueCollection;
use League\Fractal\Resource\Item as ItemCollection;

class QuizTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'categories',
        'tasks',
        'progress'
    ];


    /**
     * A Fractal transformer.
     *
     * @param Quiz $quiz
     * @return array
     */
    public function transform(Quiz $quiz)
    {
        return [
            'id' => $quiz->id,
            'name' => $quiz->name,
            'description' => $quiz->description,
            'thumbnail' => $quiz->thumbnail,
        ];
    }


    /**
     * Include Category
     *
     * @param Quiz $quiz
     * @return \League\Fractal\Resource\Collection
     */
    public function includeCategories(Quiz $quiz)
    {
        return $this->collection($quiz->categories()->get(), new CategoryTransformer());
    }

    /**
     * Include Tasks
     *
     * @param Quiz $quiz
     * @return \League\Fractal\Resource\Collection
     */
    public function includeTasks(Quiz $quiz)
    {
        return $this->collection($quiz->tasks()->get(), new TaskTransformer());
    }

    /**
     * @param Quiz $quiz
     * @return array|\League\Fractal\Resource\Item
     */
    public function includeProgress(Quiz $quiz)
    {
        return $this->item($quiz, new QuizProgressTransformer());
    }
}
