<?php

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
Route::get('/login', 'UserController@loginView')->name('login.view');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::post('/login', 'UserController@login')->name('login');

Route::get('/register', 'UserController@registerView')->name('register.view');
Route::post('/register', 'UserController@register')->name('register');
Route::get('/', function(){
  return view('index');
});