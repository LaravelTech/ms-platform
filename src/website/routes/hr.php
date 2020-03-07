<?php

/*
|--------------------------------------------------------------------------
| HR Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::namespace('Administrator')->group(function () {
  Route::resource('users', 'UsersController');
  Route::resource('roles', 'RolesController');
});

Route::namespace('Employees')->group(function () {
  Route::resource('employees', 'EmployeesController');
});