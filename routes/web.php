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
Route::get('/', 'PostsController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'PostsController@index');

Route::get('users/edit', 'UsersController@edit');

Route::get('/users/{user_id}', 'UsersController@show');

Route::get('/posts/new', 'PostsController@new')->name('new');

Route::get('/posts/{post_id}', 'PostsController@show');

Route::post('users/update', 'UsersController@update');

Route::post('/posts', 'PostsController@store');

Route::get('postsdelete/{post_id}', 'PostsController@destroy');

Route::get('/posts/{post_id}/likes', 'LikesController@store');

Route::get('/likes/{like_id}', 'LikesController@destroy');

Route::post('/posts/{comment_id}/comments', 'CommentsController@store');

Route::get('/comments/{comment_id}', 'CommentsController@destroy');

Route::get('/materials/new', 'MaterialsController@new');

Route::post('/materials', 'MaterialsController@store');

Route::post('/search/index', 'SearchController@index')->name('search');
