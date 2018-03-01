<?php

Route::get('/', 'PagesController@home');

Route::get('/posts', 'PostController@index');

Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');

Route::get('/logout', 'SessionController@destroy');
