<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = null;

        if ($request->has('email')) {
            $user = User::where('email', $request->email)->first();
        } elseif ($request->has('username')) {
            $user = User::where('username', $request->username)->first();
        }

        if ($user) {
            $valid = Hash::check($request->password, $user->password);
            if ($valid) {
                return response()->json('Valid');
            }
        }

        return response()->json('Invalid');
    }

    public function register(RegisterRequest $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);

        $user = User::create($request->all());
        $user->addMediaFromRequest('photo')->toMediaCollection(User::$photoCollection);

        return response()->json($user);
    }
}
