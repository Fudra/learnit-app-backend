<?php

namespace App\Http\Controllers\V1\Auth;

use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RefreshController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return fractal()
            ->item(auth()->user())
            ->transformWith(new UserTransformer())
            ->addMeta(['token' => auth()->refresh()])
            ->toArray();
    }
}
