<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/

Route::get('login', 'AuthenticateController@login')->name('auth.login');
Route::post('login', 'AuthenticateController@postLogin')->name('auth.post-login');
Route::get('logout', 'AuthenticateController@logout')->name('auth.logout');