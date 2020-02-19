<?php

/*
|--------------------------------------------------------------------------
| Sample Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard', function () {
  return view('sample.dashboard');
});
Route::get('/login', function () {
  return view('sample.login');
});
Route::get('/register', function () {
  return view('sample.register');
});
Route::get('/reset-password', function () {
  return view('sample.reset-password');
});
Route::get('/change-password', function () {
  return view('sample.change-password');
});
Route::get('/form-advanced', function () {
  return view('sample.forms.advanced');
});
Route::get('/form-general', function () {
  return view('sample.forms.general');
});
Route::get('/form-sample', function () {
  return view('sample.forms.sample');
});
Route::get('/table-simple', function () {
  return view('sample.tables.simple');
});
