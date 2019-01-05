<?php

namespace App\Http\Controllers\V1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);


        if (!$token = auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'errors' => [
                    'email' => ['Sorry we couldn\'t sign you in with this details.' ]
                ]
            ], 422);
        }

        return fractal()
            ->item(auth()->user())
            ->transformWith(new UserTransformer())
            ->addMeta(['token' => $token])
            ->toArray();
    }
}
