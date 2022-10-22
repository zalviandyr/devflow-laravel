<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
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

        return response()->json($user);
    }
}
