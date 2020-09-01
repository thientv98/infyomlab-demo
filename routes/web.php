<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->middleware('verified');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('levels', 'LevelController');

Route::resource('roles', 'RoleController');

Route::resource('staticContents', 'StaticContentController');

Route::resource('questions', 'QuestionController');

Route::resource('answers', 'AnswerController');

Route::resource('levelRoleConfigs', 'LevelRoleConfigController');

Route::resource('quizzes', 'QuizController');