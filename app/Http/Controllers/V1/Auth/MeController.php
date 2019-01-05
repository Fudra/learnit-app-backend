<?php

namespace App\Http\Controllers\V1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        return fractal()
            ->item(auth()->user())
            ->transformWith(new UserTransformer())
            ->toArray();
    }
}
