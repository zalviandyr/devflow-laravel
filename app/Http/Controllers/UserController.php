<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginView()
    {
        return view('Auth.login');
    }

    public function registerView()
    {

        return view('Auth.register');
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->usernameEmail)
            ->orWhere('username', $request->usernameEmail)
            ->first();

        if ($user) {
            $valid = Hash::check($request->password, $user->password);
            if ($valid) {
                Auth::login($user);

                return response()->json('Valid');
            }
        }

        return redirect()->back()
            ->withErrors('Username/Email atau Password Salah')
            ->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->withSuccess('Bye Byee');
    }

    public function register(RegisterRequest $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);

        $user = User::create($request->all());
        $path = public_path('images/avatar.svg');
        $user->copyMedia($path)->toMediaCollection(User::$photoCollection);

        return redirect()->route('login')->withSuccess('Berhasil Registrasi');
    }
}
