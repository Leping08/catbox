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

Route::get('/', "HomeController@index")->name('home');

Route::get('/posts', "PostsController@index")->name("posts.index");

Route::post('/posts', "PostsController@store")->name("posts.store");

Route::get('/about/', function() {
    return view('about');
})->name("about");

Route::get('/meow/', function() {
    return view('meow');
})->name("meow");

Route::middleware('auth')->group(function () {
    Route::get('/profile', "ProfileController@index")->name("profile.index");
    Route::post('/posts', "PostsController@store")->name("posts.store");
    Route::get('/posts/create', "PostsController@create")->name("posts.create");
    Route::get('/posts/{post}/edit', "PostsController@edit")->name("posts.edit");
    Route::put('/posts/{post}', "PostsController@update")->name("posts.update");
});

Route::get('/posts/{post}', "PostsController@show")->name("posts.show");

Auth::routes();
