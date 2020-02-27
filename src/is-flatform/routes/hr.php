<?php

/*
|--------------------------------------------------------------------------
| HR Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('users', 'UserManagement\UsersController');