<?php

use Illuminate\Http\Request;

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



// Categories
Route::get('category', 'CategoryController@index')->name('category.index');
Route::post('category', 'CategoryController@store')->name('category.store');

// TaskType
Route::get('tasktype', 'TaskTypeController@index')->name('tasktype.index');
Route::post('tasktype', 'TaskTypeController@store')->name('tasktype.store');
