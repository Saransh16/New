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


Route::get('/projects','ProjectController@index')->name('projects.index')->middleware('auth');
Route::get('/projects/new','ProjectController@create')->name('projects.new');
Route::post('/projects/create','ProjectController@store')->name('project.create');
Route::get('/projects/{student}/show','ProjectController@show')->name('projects.show');
Route::get('projects/{student}/edit','ProjectController@edit')->name('projects.edit');
Route::patch('projects/{student}','ProjectController@update')->name('projects.update');
Route::get('projects/{student}/remove','ProjectController@remove')->name('projects.remove');
Route::delete('projects/{student}','ProjectController@destroy')->name('projects.delete');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

