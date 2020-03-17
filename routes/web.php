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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('index')->middleware('verified');
Auth::routes(['verify' => true]);

Route::get('/redirect/{service}', 'SocialAuthController@redirect');
Route::get('/callback/{service}', 'SocialAuthController@callback');

Route::resource('icon', 'IconController')->names([
    'index' => 'icon.index',
    'store' => 'icon.create'
]);

Route::resource('category', 'CategoryController')->names([
    'index' => 'category.index',
    'store' => 'category.create'
]);
