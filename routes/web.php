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

/** Route: Shop */
Route::get('/', 'ShopController@index')->name('home');
Route::get('/weFashion/products/{slug}', 'ShopController@show')->name('weFashion.show');
Route::get('/solde', 'ShopController@solde')->name('solde');

/** Route:  Auth*/
Auth::routes();

/** Route: Admin */
Route::get('/admin', 'AdminController@index')->name('admin');

/** Route:  Admin Categories*/
Route::get('/admin/categories', 'CategoriesController@index')->name('categories');
Route::get('/admin/categories/create', 'CategoriesController@create')->name('categories_create');
Route::post('admin/categories/create', 'CategoriesController@store');

Route::get('admin/categories/edit/{id}', 'CategoriesController@edit');
Route::post('admin/categories/edit/{id}', 'CategoriesController@update');

Route::delete('admin/categories/delete/{id}', 'CategoriesController@destroy');

/** Route:  Admin Products*/
Route::get('/admin/products', 'ProductsController@index')->name('admin_products');
Route::get('/admin/products/create', 'ProductsController@create')->name('admin_products_create');
Route::post('admin/products/create', 'ProductsController@store');

Route::get('admin/products/edit/{id}', 'ProductsController@edit');
Route::post('admin/products/edit/{id}', 'ProductsController@update');

Route::delete('admin/products/delete/{id}', 'ProductsController@destroy');



