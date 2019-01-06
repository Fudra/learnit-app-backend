<?php

namespace App\Http\Controllers\V1\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::create($request->only('email', 'name', 'password'));

        if (!$token = auth()->attempt($request->only('email', 'password'))) {
            return abort(401);
        }

        return fractal()
            ->item(auth()->user())
            ->transformWith(new UserTransformer())
            ->addMeta(['token' => $token])
            ->toArray();
    }
}
