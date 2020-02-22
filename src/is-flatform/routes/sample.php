<?php

/*
|--------------------------------------------------------------------------
| Sample Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard', function () {
  return view('sample.dashboard');
})->name('sample.dashboard');

Route::get('/login', function () {
  return view('sample.login');
})->name('sample.login');

Route::get('/register', function () {
  return view('sample.register');
})->name('sample.register');

Route::get('/reset-password', function () {
  return view('sample.reset-password');
})->name('sample.reset-password');

Route::get('/change-password', function () {
  return view('sample.change-password');
})->name('sample.change-password');

Route::get('/form-advanced', function () {
  return view('sample.forms.advanced');
})->name('sample.form-advanced');

Route::get('/form-general', function () {
  return view('sample.forms.general');
})->name('sample.form-general');

Route::get('/form-sample', function () {
  return view('sample.forms.sample');
})->name('sample.form-sample');

Route::get('/table-simple', function () {
  return view('sample.tables.simple');
})->name('sample.table-simple');

Route::get('/table-sample', function () {
  return view('sample.tables.sample');
})->name('sample.table-sample');


Route::get('/debug-sentry', function () {
  throw new Exception('My first Sentry error!');
});

