<?php

Route::get('/', 'PagesController@home');

Route::get('/register', 'UserController@create');
