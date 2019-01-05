<?php

namespace App\Http\Controllers\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Transformers\CategoryTransformer;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth')
            ->except(['index']);
    }


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

    /**
     * @param Request $request
     * @param Category $category
     * @return int
     * @throws \Exception
     */
    public function destroy(Request $request, Category $category)
    {
        dd($category->delete());
        $category->delete();
        return 'ok';
    }
}
