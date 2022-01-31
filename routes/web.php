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

Route::get('/', 'HomeController@home') -> name('home');

Route::get('/movie/{id}', 'HomeController@show') -> name('show');

Route::get('/movie/create', 'HomeController@create') -> name('create');
Route::post('/movie/store', 'HomeController@store') -> name('store');

Route::get('/movie/edit/{id}', 'HomeController@edit') -> name('edit');
Route::post('/movie/update/{id}', 'HomeController@update') -> name('update');

Route::get('/movie/delete/{id}', 'HomeController@delete') -> name('delete');
