<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/{any}', 'RouterController@index')->where('any', '.*');
