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
Route::group(['prefix' => 'admin'], function() {
	Route::get('/', function () {
		return view('admin.home.index');
	});
	Route::get('/login', function () {
		return view('admin.content.login');
	});
});


