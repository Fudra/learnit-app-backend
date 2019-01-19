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

// TaskType
    Route::resource('tasktype', 'TaskTypesController')->only(['index', 'store']);

// Quiz
    Route::resource('quizzes', 'QuizController')->except(['edit', 'create']);
//    Route::get('/quizzes', 'QuizController@index')->name('quiz.index');
//    Route::post('/quizzes', 'QuizController@store')->name('quiz.store');
//    Route::get('/quizzes/{quiz}', 'QuizController@show')->name('quiz.show');
    Route::get('/quizzes/{quiz}/tasks/{page?}', 'TaskController@tasks')->name('quiz.task.index');

    // Task
    Route::get('tasks', 'TaskController@index')->name('task.index');
    Route::post('tasks', 'TaskController@store')->name('task.store');


});


