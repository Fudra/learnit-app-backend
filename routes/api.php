<?php

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


// Api Version
Route::group(['prefix' => 'v1', 'as'=>'account.', 'namespace' => 'V1'], function () {

// Authenticated routes
    Route::get('/me', 'Auth\MeController')->name('auth.me');
    Route::post('/login', 'Auth\LoginController')->name('auth.login');
    Route::post('/logout', 'Auth\LogoutController')->name('auth.logout');
    Route::post('/register', 'Auth\RegisterController')->name('auth.register');
    Route::get('/refresh', 'Auth\RefreshController')->name('auth.refresh');


// Categories
    Route::resource('categories', 'CategoryController')->only(['index', 'store', 'destroy']);
//Route::get('categories', 'CategoryController@index')->name('category.index');
//Route::post('categories', 'CategoryController@store')->name('category.store');
//Route::delete('categories/{id}', 'CategoryController@destroy')->name('category.destroy');

// TaskType
    Route::resource('tasktype', 'TaskTypesController')->only(['index', 'store']);
//Route::get('tasktype', 'TaskTypesController@index')->name('tasktype.index');
//Route::post('tasktype', 'TaskTypesController@store')->name('tasktype.store');

// Quiz
    Route::resource('quizzes', 'QuizController')->except(['edit', 'create']);
//Route::get('quizzes', 'QuizController@index')->name('quiz.index');
//Route::get('quizzes/{id}', 'QuizController@show')->name('quiz.show');
//Route::patch('quizzes/{id}', 'QuizController@update')->name('quiz.update');
//Route::post('quizzes', 'QuizController@store')->name('quiz.store');
//Route::delete('quizzes/{id}', 'QuizController@destroy')->name('quiz.destroy');


// Task
    Route::resource('tasks', 'TaskController')->except(['edit', 'create']);


});


