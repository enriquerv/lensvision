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

// Route::get('/', function () { return view('welcome'); });

Route::get('/', array('as' => 'index', 'uses' => 'FrontEndController@index'));
Route::get('us', array('as' => 'us', 'uses' => 'FrontEndController@us'));
Route::get('services', array('as' => 'services', 'uses' => 'FrontEndController@services'));
Route::get('contact', array('as' => 'contact', 'uses' => 'FrontEndController@contact'));