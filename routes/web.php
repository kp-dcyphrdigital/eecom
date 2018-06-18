<?php

/* Default Laravel Auth routes */
$this->get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomePageController@index');

Route::get('/search', 'SearchController@index');

Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@store');

Route::get('/payment', 'PaymentController@create');
Route::post('/payment', 'PaymentController@store');

Route::post('/subscribers/new', 'SubscriberController@store');

Route::get('/categories', 'CategoryController@index');

Route::get('/{category}', 'ProductController@index');
Route::get('/{category}/{product}', 'ProductController@show')->middleware('productdisplayable');