<?php

namespace App\Http\Controllers\V1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        if(!$user = auth()->user()) {
            throw new UnauthorizedHttpException('', 'User is not logged in or no token provided.');
        }

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer())
            ->toArray();
    }
}
