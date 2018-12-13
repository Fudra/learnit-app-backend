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
Route::get('categories', 'CategoryController@index')->name('category.index');
Route::post('categories', 'CategoryController@store')->name('category.store');
Route::delete('categories/{id}', 'CategoryController@destroy')->name('category.destroy');

// TaskType
Route::get('tasktype', 'TaskTypeController@index')->name('tasktype.index');
Route::post('tasktype', 'TaskTypeController@store')->name('tasktype.store');

// Quiz
Route::get('quizzes', 'QuizController@index')->name('quiz.index');
Route::get('quizzes/{id}', 'QuizController@show')->name('quiz.show');
Route::post('quizzes', 'QuizController@store')->name('quiz.store');
