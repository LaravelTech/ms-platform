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

Route::prefix('sample')
  ->group(base_path('routes/sample.php'));

Route::prefix('auth')
  ->namespace('HR')
  ->name('hr.')
  ->group(base_path('routes/auth.php'));

Route::prefix('hr')
  ->namespace('HR')
  ->name('hr.')
  ->middleware(['auth:web'])
  ->group(base_path('routes/hr.php'));