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

Route::get('/', ['as' => 'calculator.home',  'uses' => 'CalcController@index']);
 
Route::get('/process', ['as' => 'calculator.process',  'uses' => 'CalcController@calculate']);
