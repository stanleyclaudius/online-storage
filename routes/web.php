<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login','AuthController@postLogin');
Route::get('/register', 'AuthController@register');
Route::post('/register','AuthController@postRegister');
Route::get('/forget', 'AuthController@forget');
Route::post('/forget', 'AuthController@postForget');
Route::get('/reset', 'AuthController@reset');
Route::post('/reset', 'AuthController@postReset');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/logout', 'AuthController@logout');

	Route::get('/drive', 'DriveController@index');
	Route::post('/drive/upload', 'DriveController@uploadFile');
	Route::get('/drive/star/{id}', 'DriveController@starredDrive');
});