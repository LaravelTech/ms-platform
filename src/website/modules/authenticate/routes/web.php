<?php

/*
|--------------------------------------------------------------------------
| Authenticate Module Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix(config('authenticate.route.prefix'))
->namespace(config('authenticate.route.namespace'))
->name('authenticate.')->group(function () {
    Route::namespace('Controllers')->group(function () {
        Route::get('/', 'AuthenticateController@login')->name('login');
    });
});