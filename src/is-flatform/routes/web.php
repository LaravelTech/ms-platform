<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.dashboard');
});
Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/register', function () {
    return view('layouts.register');
});
Route::get('/reset-password', function () {
    return view('layouts.reset-password');
});
Route::get('/change-password', function () {
    return view('layouts.change-password');
});
Route::get('/form-advanced', function () {
    return view('layouts.forms.advanced');
});
Route::get('/form-general', function () {
    return view('layouts.forms.general');
});
Route::get('/form-sample', function () {
    return view('layouts.forms.sample');
});
Route::get('/table-simple', function () {
    return view('layouts.tables.simple');
});