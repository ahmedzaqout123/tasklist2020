<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/','TaskController@index');

Route::get('task/{id}','TaskController@show');


Route::post('store','Taskcontroller@store');
Route::delete('delete/{id}','Taskcontroller@destroy');
Route::put('edit/{id}','Taskcontroller@edit');
Route::patch('update/{id}','Taskcontroller@update');





