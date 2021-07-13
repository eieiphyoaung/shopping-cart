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


Route::get('/', 'ProductController@index');
Route::get('cart', 'ProductController@cart')->name('cart');
Route::get('add-to-cart/{id}', 'ProductController@addToCart')->name('add.to.cart');
Route::get('update-cart', 'ProductController@update')->name('update.cart');
Route::get('remove-from-cart', 'ProductController@remove')->name('remove.from.cart');

Route::get('/login', 'CustomerController@login');
Route::post('customer-login', 'CustomerController@customerLogin')->name('customer.login'); 
Route::get('/register', 'CustomerController@register');
Route::post('customer-registration', 'CustomerController@customerRegister')->name('customer.register'); 
Route::get('/logout','CustomerController@logout');

//Checkout
Route::get('/checkout','CheckoutController@index');
//Checkout Save Order
Route::post('/checkout/save-order', 'CheckoutController@saveOrder')->name('checkout.save-order');

Route::get('/checkout/thank-you', 'CheckoutController@thankYou');

Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/adminLogin','Admin\LoginController@adminLogin');
Route::get('/admin/logout','Admin\LoginController@logout');

Route::get('/admin','Admin\AdminController@index');

Route::get('/admin/customers','Admin\CustomerController@index');
Route::get('/admin/customers/{id}','Admin\CustomerController@show');

Route::get('/admin/products','Admin\ProductController@index');
Route::get('/admin/products/add','Admin\ProductController@add');
Route::post('/admin/products/create','Admin\ProductController@create');
Route::get('/admin/products/edit/{id}','Admin\ProductController@edit');
Route::post('/admin/products/update/{id}','Admin\ProductController@update');
Route::get('/admin/products/delete/{id}','Admin\ProductController@delete');

Route::get('/admin/transactions','Admin\TransactionController@index');
Route::get('/admin/transactions/{id}','Admin\TransactionController@show');





