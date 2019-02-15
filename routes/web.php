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


Route::get('/', 'TodosController@index');
Route::post('/', 'TodosController@store');
Route::get('/todos/new', 'TodosController@create');
Route::get('/todos/{id}', 'TodosController@show');
Route::get('/todos/{id}/edit', 'TodosController@edit');
Route::patch('/todos/{id}', 'TodosController@update');
Route::delete('/todos/{id}', 'TodosController@destroy');

Route::get('/about', function () {
    return view('about');
});

Route::get('/app', function () {
    return view('app');
});

