<?php

/*
|--------------------------------------------------------------------------
| HR Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::namespace('Administrator')->group(function () {
  Route::resource('authenticate', 'AuthenticateController');
  Route::resource('users', 'UsersController');
  Route::resource('roles', 'RolesController');
});