<?php

namespace App\Transformers;

use App\Models\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
     * @param Category $category
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'quizzes' => $category->quizzes()->count(),
        ];
    }
}
