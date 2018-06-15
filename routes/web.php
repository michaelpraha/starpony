<?php

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

// list of questions
Route::get('/questions', 'QuestionController@index');

Route::get('/questions/create', 'QuestionController@create');

// detail of one question
Route::get('/questions/{id}', 'QuestionController@show');

// list of categories
Route::get('/categories', 'CategoryController@index');

// edit a quesion
Route::get('/questions/{id}', 'CategoryController@edit');

// store a question (submit the form)
Route::post('/questions', 'QuestionController@store');

Route::get('actors/new', 'ActorController@create');

Route::post('actors/new', 'ActorController@store');

Route::get('actors/edit/{id}', 'ActorController@edit');

Route::post('actors/edit/{id}', 'ActorController@store');

// movies workout
Route::get('/movies', 'MovieController@index');

