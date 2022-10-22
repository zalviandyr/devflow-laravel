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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'PostController@show')->name('post.detail');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'UserController@loginView')->name('login.view');
    Route::post('/login', 'UserController@login')->name('login');

    Route::get('/register', 'UserController@registerView')->name('register.view');
    Route::post('/register', 'UserController@register')->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', 'UserController@profileView')->name('profile');;
        Route::post('/', 'UserController@updateProfile')->name('profile.update');
    });

    Route::post('/post', 'PostController@create')->name('post');
});
