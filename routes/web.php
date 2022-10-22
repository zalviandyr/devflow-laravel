<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Auth
Route::get('/logout', 'UserController@logout')->name('logout');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'UserController@loginView')->name('login.view');
    Route::post('/login', 'UserController@login')->name('login');

    Route::get('/register', 'UserController@registerView')->name('register.view');
    Route::post('/register', 'UserController@register')->name('register');
});

Route::get('/profile', 'UserController@profileView')->name('profile');
Route::post('/profile', 'UserController@updateProfile')->name('profile.update');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/post/create', function () {
    return view('Post.create');
})->name('createPost');
Route::get('/post/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->first();
    return view('Post.index', compact('post'));
})->name('showPost');





Route::post('/post', '\App\Http\Controllers\PostController@create')->name('post');
