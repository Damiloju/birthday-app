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

Route::get('/', 'PagesController@home')->name('home');
Route::get('view', 'PagesController@view')->name('view');
Route::get('add', 'PagesController@add')->name('add');

Route::post('add/new', 'RecordsController@store')->name('store');
Route::get('search', 'RecordsController@show')->name('search');
Route::get('search/week', 'RecordsController@week')->name('week');