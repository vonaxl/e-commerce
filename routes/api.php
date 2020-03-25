<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Show all products
Route::get('/products', 'ProductController@index');
// Search product
Route::get('/search/{value}', 'ProductController@searchProducts');
// Show a product
Route::get('/show/{product}', 'ProductController@show');
// Delete a product
Route::delete('/delete/{product}', 'ProductController@destroy');


