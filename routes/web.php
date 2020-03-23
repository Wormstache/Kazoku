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

Route::resource('icon', 'IconController');

Route::resource('category', 'CategoryController');

Route::resource('member', 'MemberController');

Route::resource('budget', 'BudgetController');

Route::resource('expense', 'ExpenseController');

Route::resource('user', 'UserController');
