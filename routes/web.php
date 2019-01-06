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

/*Route::get('/', function () {
    return view('welcome');
});*/
 
//frontend
Route::get('/','FrontEndHomeController@index')->name('home');
Route::get('/product/{slug}','FrontEndHomeController@show')->name('product.show');
Route::get('/category/{id}','FrontEndHomeController@product')->name('products.product');
Route::get('/search','FrontEndHomeController@search')->name('search');
Route::post('/charge', 'FrontEndHomeController@charge')->name('charge');


Route::get('/contact','FrontEndHomeController@contact')->name('contact');
//backend
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/edit/{products}','AdminController@edit')->name('admin.edit');
Route::put('/admin/update/{id}','AdminController@update')->name('admin.update');
Route::get('/admin/create','AdminController@create')->name('admin.create');
Route::post('/admin/store','AdminController@store')->name('admin.store');
Route::get('/admin/delete/{id}','AdminController@destroy')->name('admin.delete');
//Route::get('/admin/show/{id}','AdminController@show')->name('admin.show');




//category
Route::get('/admin/category/create','CategoryController@create')->name('category.create');
Route::get('/admin/category','CategoryController@index')->name('category.index');
Route::post('/admin/category/store','CategoryController@store')->name('category.post');
Route::get('/admin/category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::post('/admin/category/update/{id}','CategoryController@update')->name('category.update');
Route::get('/admin/category/delete/{id}','CategoryController@delete')->name('category.delete');
Route::get('/admin/category/show/{id}','CategoryController@show')->name('category.show');

//Route::resource('/admin/category','CategoryController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Cart routes

Route::get('item', [
    'as' => 'item',
    'uses' => 'CartController@item'
]);

Route::post('cart', [
    'as' => 'cart',
    'uses' => 'CartController@add'
]);

Route::get('remove-cart/{rowid}', [
    'as' => 'remove-cart',
    'uses' => 'CartController@RemoveCart'
]);


Route::get('checkout', [
    'as' => 'checkout',
    'uses' => 'CartController@checkout'
]);

Route::post('cart/update/{cart}', [
    'as' => 'cart.update',
    'uses' => 'CartController@update'
]);

Route::get('/stripe','AdminController@getStripe')->name('stripe.get');
Route::post('/stripe','AdminController@payStripe')->name('stripe.pay');



