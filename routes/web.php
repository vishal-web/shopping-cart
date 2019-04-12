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


Route::get('/', 'HomeController@index');

Route::get('/aboutus', 'HomeController@aboutus');

Route::group(['namespace' => 'ShopAdmin','prefix' => 'shopadmin'], function() {

	Route::get('/dashboard', 'DashboardController@index');

	Route::get('/category', 'CategoryController@index');
	Route::get('/category/create', 'CategoryController@add');
	Route::get('/category/{update_id}/update', 'CategoryController@add');
	Route::get('/category/{update_id}/delete', 'CategoryController@delete');
	Route::post('/category/create', 'CategoryController@add');
	
	Route::get('/product', 'ProductController@index');
	Route::get('/product/create', 'ProductController@add');
	Route::get('/product/{update_id}/update', 'ProductController@add');
	Route::get('/product/{update_id}/delete', 'ProductController@delete');
	Route::post('/product/create', 'ProductController@add');
	
 
	Route::get('/customer', 'CustomerController@index');
	Route::get('/order', 'OrderController@index');
});


Route::get('/{slug}', 'HomeController@category');
Route::get('/{slug}/{slug2}', 'HomeController@category');
Route::get('/{slug}/{slug2}/{book}', 'HomeController@item');