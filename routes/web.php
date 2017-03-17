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
Route::get('/teste', function () { return 'Laravel'; });
Route::get('/', 'DrillsController@index');
Route::get('/{id}', ['as' => 'productDetails', 'uses' => 'DrillsController@details']);
Route::get('drill/{id}', 'DrillsController@details');
