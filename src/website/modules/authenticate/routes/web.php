<?php

/*
|--------------------------------------------------------------------------
| Authenticate Module Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix(config('authenticate.route.prefix'))
->namespace(config('authenticate.route.namespace'))
->middleware(config('authenticate.route.middleware'))
->name('authenticate.')->group(function () {
    Route::namespace('Controllers')->group(function () {
        Route::get('/', 'AuthenticateController@login')->name('login');
        Route::post('login', 'AuthenticateController@postLogin')->name('post-login');
        Route::get('logout', 'AuthenticateController@logout')->name('logout');
    });
});