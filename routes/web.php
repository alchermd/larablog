<?php

Route::get('/', 'PagesController@home')->name('home');

Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::get('/posts/new', 'PostController@create');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
