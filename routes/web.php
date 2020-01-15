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

Route::get('/', 'pagesController@home');

Route::get('/add', 'pagesController@add');
Route::post('/add', 'pagesController@insert');

Route::get('/show', 'pagesController@show');

Route::get('/delete', 'pagesController@delete');
Route::post('/delete', 'pagesController@remove');

Route::get('/update', 'pagesController@update');
Route::post('/update', 'pagesController@updateby');

Route::post('/github', 'pagesController@welcome');
