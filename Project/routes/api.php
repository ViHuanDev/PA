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
 * DocumentItem Tuan Anh-12/9
 */
Route::resource('documentitems', 'DocumentItem\DocumentItemController',['except' => ['create','edit']]);

/**
 * Faq Tuan Anh-12/9
 */
Route::resource('faqs', 'Faq\FaqController',['except' => ['create','edit']]);\
/**
 * GroupFaq Tuan Anh-12/9
 */
Route::resource('groupfaqs', 'GroupFaq\GroupFaqController',['except' => ['create','edit']]);
/**
 * CheckList Tuan Anh-12/9
 */
Route::resource('checklists', 'CheckList\CheckListController',['except' => ['create','edit']]);
/**
 * Comment Tuan Anh-12/9
 */
Route::resource('comments', 'Comment\CommentController',['except' => ['create','edit']]);
/**
 * Comment Tuan Anh-12/9
 */
//Route::resource('statuses', 'Status\StatusController',['except' => ['create','edit']]);
/**
 * Users Duy-11/9
 */
Route::resource('users','User\UserController',['except' => ['create','edit']]);

Route::post('users/signin','User\UserController@signIn');
Route::get('getuser','User\UserController@getAuthUser');
/**
 * Organization Duy-12/9
 */
Route::resource('organizations','Organization\OrganizationController',['except' => ['create','edit']]);

/**
 * language Duy-12/9
 */
Route::resource('languages','Language\LanguageController',['except' => ['create','edit']]);

/**
 * Language Switcher Duy-13/9
 */
Route::resource('language/switcher','Language\LanguageSwitcherController',['only' => ['store','index']]);

/**
 * Language Switcher Duy-13/9
 */
Route::resource('menu/group','Menu_Group\Menu_GroupController',['only' => ['store','index']]);
Route::get('menu/group/{user}','Menu_Group\Menu_GroupController@create');
