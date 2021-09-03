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

Route::get('/', 'TopController@index')->name('welcome');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('sidebar','')->name('commons.sidebar');


//ユーザー情報に関するルーティング
Route::get('users/{id}', 'UsersController@show');
Route::get('show','UsersController@show')->name('users.show');
Route::get('search', 'SearchUsersController@index')->name('users.search');

//投稿に関するルーティング
Route::get('posts', 'PostsController@index')->name('posts');
Route::get('/create','PostsController@create')->name('create');
Route::post('/store','PostsController@store')->name('posts.store');
Route::get('/edit','PostsController@edit')->name('posts.edit');
Route::put('/update','PostsController@update')->name('posts.update');
Route::delete('/destroy','PostsController@destroy')->name('posts.destroy');

//いいね機能に関するルーティング
Route::post('favorites','FavoriteController@store')->name('favorites');
Route::post('unfavorites','FavoriteController@destroy')->name('unfavorites');

//メッセージに関するルーティング
Route::get('/message','MessagesController@index')->name('message');