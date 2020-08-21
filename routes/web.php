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
	Route::get('/drive/trash/{id}', 'DriveController@trashFile');

	Route::get('/starred', 'StarController@index');

	Route::get('/trash', 'TrashController@index');
	Route::get('/trash/restore/{id}', 'TrashController@restoreFile');
	Route::get('/trash/delete/{id}', 'TrashController@deleteFile');

	Route::post('/user/edit', 'UserController@editProfile');
});