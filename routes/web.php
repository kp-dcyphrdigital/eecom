<?php

Route::get('/', 'ProductController@index');

Route::get('/search', 'ProductController@search');

Route::post('/cart', 'CartController@store');

Route::get('/payment', 'PaymentController@create');
Route::post('/payment', 'PaymentController@store');

Route::get('/categories', 'CategoryController@index');

Route::get('/{category}', 'ProductController@index');
Route::get('/{category}/{product}', 'ProductController@show')->middleware('productdisplayable');