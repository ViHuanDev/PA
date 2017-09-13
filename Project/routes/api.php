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
 * Document Tuan Anh-12/9
 */
Route::resource('documents', 'Document\DocumentController',['except' => ['create','edit']]);
/**
 * Document Tuan Anh-12/9
 */
Route::resource('documentitems', 'DocumentItem\DocumentItemController',['except' => ['create','edit']]);
/**
 * Users Duy-11/9
 */
Route::resource('users','User\UserController',['except' => ['create','edit']]);

/**
 * Organization Duy-11/9
 */
Route::resource('organizations','Organization\OrganizationController',['except' => ['create','edit']]);

/**
 * Organization Duy-11/9
 */
Route::resource('languages','Language\LanguageController',['except' => ['create','edit']]);

/**
 * Language Switcher Duy-11/9
 */
Route::resource('language.switcher','Language\LanguageSwitcherController',['only' => ['index','edit']]);