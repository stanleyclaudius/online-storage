<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/login', 'AuthController@login');

Route::get('/register', 'AuthController@register');

Route::get('/forget', 'AuthController@forget');