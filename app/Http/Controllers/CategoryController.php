<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Transformers\CategoryTransformer;

class CategoryController extends Controller
{

    /**
     * Show all resources in storage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return fractal()
            ->collection($categories)
            ->transformWith(new CategoryTransformer())
            ->toArray();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $category = Category::create(['name' => $request->get('name')]);

        return fractal()
            ->item($category)
            ->transformWith(new CategoryTransformer())
            ->toArray();
    }
}
