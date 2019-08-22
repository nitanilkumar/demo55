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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@index')->name('home');
Route::get('/tables', 'HomeController@index')->name('home');
Route::get('/typography', 'HomeController@index')->name('home');
Route::get('/icons', 'HomeController@index')->name('home');
Route::get('/maps', 'HomeController@index')->name('home');
Route::get('/maps', 'HomeController@index')->name('home');
Route::get('/maps', 'HomeController@index')->name('home');

