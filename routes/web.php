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

Route::resource('users', 'UserController');

Route::prefix('tasks')->group(function () { 
    Route::get('show/{id}', 'TaskController@show')->name('Task.show');
    Route::get('create', 'TaskController@create')->name('Task.create');
    Route::post('store', 'TaskController@store')->name('Task.store');
    Route::put('update/{id}', 'TaskController@update')->name('Task.update');
    Route::get('edit/{id}', 'TaskController@edit')->name('Task.edit');
    Route::delete('destroy/{id}', 'TaskController@destroy')->name('Task.destroy');
    Route::get('index', 'TaskController@index')->name('Task.index');
});
    