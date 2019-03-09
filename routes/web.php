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

// categories
Route::group(['prefix'=>'categories', 'middleware' => ['check.login']], function(){
	Route::get('/', 'CategoryController@index')->name('categories.index');
	Route::get('create', 'CategoryController@create')->name('categories.create');
	Route::post('store', 'CategoryController@store')->name('categories.store');
	Route::delete('{category}', 'CategoryController@destroy')->name('categories.delete');
	Route::get('{category}/edit','CategoryController@edit')->name('categories.edit');
	Route::put('{category}/update','CategoryController@update')->name('categories.update');

});
// kind
Route::group(['prefix'=>'kinds','middleware' => ['check.login']], function(){
	Route::get('/', 'KindController@index')->name('kinds.index');
	Route::get('create', 'KindController@create')->name('kinds.create');
	Route::post('store', 'KindController@store')->name('kinds.store');
	Route::delete('{kind}', 'KindController@destroy')->name('kinds.delete');
	Route::get('{kind}/edit','KindController@edit')->name('kinds.edit');
	Route::put('{kind}/update','KindController@update')->name('kinds.update');

});

// article
Route::group(['prefix'=>'articles','middleware' => ['check.login']], function(){
	Route::get('/', 'ArticleController@index')->name('article.index');
	Route::get('create', 'ArticleController@create')->name('article.create');
	Route::post('store', 'ArticleController@store')->name('article.store');
	Route::delete('{article}', 'ArticleController@destroy')->name('article.delete');
	Route::get('{article}/edit','ArticleController@edit')->name('article.edit');
	Route::put('{article}/update','ArticleController@update')->name('article.update');
});

// route ajax
Route::get('ajax/category/{categoryid}' ,'AjaxController@getAjax');
