<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('/products', 'Api.ProductController');

Route::get('/products', 'ProductController@index');
// show a product
Route::get('/products/{product}', 'ProductController@show');
// Delete a product
Route::delete('/products/{product}', 'ProductController@destroy');


