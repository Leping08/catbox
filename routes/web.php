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

Route::get('/', "HomeController@index");

Route::get('/posts', "PostsController@index");

Route::get('/profile', "ProfileController@index")->name("profile.index");

Route::post('/posts', "PostsController@store");

Route::get('/posts/create', "PostsController@create");

Route::get('/posts/{post}', "PostsController@show");

Route::get('/posts/{post}/edit', "PostsController@edit");

Route::put('/posts/{post}', "PostsController@update");

Route::get('/about/', function() {
    return view('about');
});

Route::get('/meow/', function() {
    return view('meow');
});



Auth::routes();
