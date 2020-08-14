<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/login', 'AuthController@login');
Route::post('/login','AuthController@postLogin');
Route::get('/register', 'AuthController@register');
Route::post('/register','AuthController@postRegister');
Route::get('/forget', 'AuthController@forget');
Route::post('/forget', 'AuthController@postForget');
Route::get('/reset', 'AuthController@reset');
Route::post('/reset', 'AuthController@postReset');