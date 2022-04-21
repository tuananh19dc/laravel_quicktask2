<?php

use Illuminate\Support\Facades\Auth;
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
    Route::get('show/{id}', 'TaskController@show')->name('task.show');
    Route::get('create', 'TaskController@create')->name('task.create');
    Route::post('store', 'TaskController@store')->name('task.store');
    Route::put('update/{id}', 'TaskController@update')->name('task.update');
    Route::get('edit/{id}', 'TaskController@edit')->name('task.edit');
    Route::delete('destroy/{id}', 'TaskController@destroy')->name('task.destroy');
    Route::get('index', 'TaskController@index')->name('task.index');
});

Route::resource('users', 'UserController')->middleware('IsAdmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('change-language/{language}', 'LanguageController@language')->name('change-language');
