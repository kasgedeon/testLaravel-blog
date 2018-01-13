<?php

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
/*
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});
*/


Route::get('/', 'PagesController@index'); //Welcome - Home
Route::get('/about', 'PagesController@about'); //About
Route::get('/services', 'PagesController@services'); //Services

Route::resource('posts', 'PostsController');
