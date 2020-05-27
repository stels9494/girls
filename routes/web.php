<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');
Route::view('/show', 'show');
Route::view('/filter', 'includes.girl-card', ['count' => 15]);
Route::view('/show-more', 'includes.girl-card', ['count' => 10]);
Route::view('/feedbacks', 'includes.feedback', ['count' => 5]);
Route::view('/order', 'order');
Route::post('/reservation', function () {
	return redirect('/order-information');
});
Route::view('/order-information', 'order-information');