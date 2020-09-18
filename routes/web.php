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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', array('as'=> 'front.home', 'uses' => 'ItemController@view'));
Route::post('/update-items', array('as'=> 'update.items', 'uses' => 'ItemController@update'));
Route::post('/create-items', array('as'=> 'create.items', 'uses' => 'ItemController@store'));
