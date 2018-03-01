<?php

Route::get('/', 'PagesController@home');

Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');
