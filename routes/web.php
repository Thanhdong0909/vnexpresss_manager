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

Route::get('/', function () {
    return view('admin.category.dashboard');
})->name('dashboard');

// route login
Route::get('login', function(){
	return view('getLogin');})->name('get.login');
Route::get('middleware', function(){ 
	return view('checkLogin');
})->name('checkMiddleware');

Route::post('postLogin', 'LoginController@postLogin')->name('login.postLogin');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('categories', 'CategoryController@index')->middleware('check.login')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->middleware('check.login')->name('categories.create');
Route::post('categories/store', 'CategoryController@store')->name('categories.store');
Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.delete');
Route::get('categories/{category}/edit','CategoryController@edit')->name('categories.edit');
Route::put('categories/{category}/update','CategoryController@update')->name('categories.update');

Route::get('kinds', 'KindController@index')->middleware('check.login')->name('kinds.index');
Route::get('kinds/create', 'KindController@create')->middleware('check.login')->name('kinds.create');
Route::post('kinds/store', 'KindController@store')->name('kinds.store');
Route::delete('kinds/{kind}', 'KindController@destroy')->name('kinds.delete');
Route::get('kinds/{kind}/edit','KindController@edit')->name('kinds.edit');
Route::put('kinds/{kind}/update','KindController@update')->name('kinds.update');

Route::get('articles', 'ArticleController@index')->middleware('check.login')->name('article.index');
Route::get('articles/create', 'ArticleController@create')->middleware('check.login')->name('article.create');
Route::post('articles/store', 'ArticleController@store')->name('article.store');
Route::delete('articles/{article}', 'ArticleController@destroy')->name('article.delete');
Route::get('articles/{article}/edit','ArticleController@edit')->name('article.edit');
Route::put('articles/{article}/update','ArticleController@update')->name('article.update');
Route::get('logout', 'LoginController@logout')->name('logout');
