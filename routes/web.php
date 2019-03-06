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
});
Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::post('categories/store', 'CategoryController@store')->name('categories.store');
Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.delete');
Route::get('categories/{category}/edit','CategoryController@edit')->name('categories.edit');
Route::put('categories/{category}/update','CategoryController@update')->name('categories.update');

Route::get('kinds', 'KindController@index')->name('kinds.index');
Route::get('kinds/create', 'KindController@create')->name('kinds.create');
Route::post('kinds/store', 'KindController@store')->name('kinds.store');
Route::delete('kinds/{kind}', 'KindController@destroy')->name('kinds.delete');
Route::get('kinds/{kind}/edit','KindController@edit')->name('kinds.edit');
Route::put('kinds/{kind}/update','KindController@update')->name('kinds.update');

Route::get('articles', 'ArticleController@index')->name('article.index');
Route::get('articles/create', 'ArticleController@create')->name('article.create');
Route::post('articles/store', 'ArticleController@store')->name('article.store');