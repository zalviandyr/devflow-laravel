<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// auth
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');

// post
Route::get('/post', 'PostController@all');
Route::post('/post', 'PostController@create');

// comment
Route::get('/comment', 'CommentController@all');
Route::post('/comment', 'CommentController@create');

// team
Route::get('/team', 'TeamController@all');
Route::post('/team', 'TeamController@create');
Route::post('/team/{team}', 'TeamController@recruit');
