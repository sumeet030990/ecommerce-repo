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



Route::group(['middleware' => 'auth'], function () {
   /** Backend */
    Route::get('/admin', function () {
        return view('home');
    });
    Route::resource('product', 'ProductManagementController');

    /** Frontend */
    Route::get('/', function () {
        return view('frontend.home.index');
    });
    Route::resource('beer', 'ProductController');
    Route::resource('wine', 'ProductController');
    Route::resource('soft-drink', 'ProductController');
    Route::resource('mocktail', 'ProductController');

    Route::get('cart/add/{productId}', 'CartController@addItemToCart')->name('cart.add');
    Route::get('cart/remove/{productId}', 'CartController@removeItemFromCart')->name('cart.remove');
    Route::get('checkout', 'CartController@checkout')->name('checkout');
    Route::resource('order', 'OrderController');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');