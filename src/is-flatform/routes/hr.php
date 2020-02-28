<?php

/*
|--------------------------------------------------------------------------
| HR Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('users', 'UserManagement\UsersController');
Route::resource('roles', 'UserManagement\RolesController');