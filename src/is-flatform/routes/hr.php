<?php

/*
|--------------------------------------------------------------------------
| HR Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('authenticate', 'Administrator\AuthenticateController');
Route::resource('users', 'Administrator\UsersController');
Route::resource('roles', 'Administrator\RolesController');