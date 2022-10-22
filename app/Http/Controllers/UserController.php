<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdatePasswordRequest;
use App\Http\Requests\User\UpdateProfileRequest;
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

    public function profileView()
    {
        $auth = Auth::user();

        return view('User.profile', compact('auth'));
    }

    public function changePasswordView()
    {
        return view('User.change-password');
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

                return redirect()->route('home')->withSuccess(__('auth.login.success'));
            }
        }

        return redirect()->back()
            ->withErrors(__('auth.login.failed'))
            ->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->withSuccess(__('auth.logout.success'));
    }

    public function register(RegisterRequest $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);

        $user = User::create($request->all());
        $path = public_path('images/avatar.svg');
        $user->copyMedia($path)->toMediaCollection(User::$photoCollection);

        return redirect()->route('login')->withSuccess(__('auth.register.success'));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->update($request->all());

        if ($request->has('photo')) {
            $user->updateMediaFromRequest('photo', User::$photoCollection);
        }

        return redirect()->back()->withSuccess(__('profile.success'));
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = Auth::user();

        if (!Hash::check($request->passwordLama, $user->password)) {
            return redirect()->back()->withErrors(__('profile.changePassword.failed'))->withInput();
        }

        $user = User::find($user->id);
        $user->update([
            'password' => Hash::make($request->passwordBaru),
        ]);

        return redirect()->back()->withSuccess(__('profile.changePassword.success'));
    }
}
