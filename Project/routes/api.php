<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * Menus Duy-11/9
 */
Route::resource('menus','Menu\MenuController',['except' => ['create','edit']]);

/**
 * Groups Duy-11/9
 */
Route::resource('groups','Group\GroupController',['except' => ['create','edit']]);

/**
 * Groups Duy-11/9
 */
Route::resource('users','User\UserController',['except' => ['create','edit']]);
