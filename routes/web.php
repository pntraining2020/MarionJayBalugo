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

Route::get('/','employeeController@start');

Route::get('/employee/{id}','employeeController@getEmployee');
Route::get('/employee/ClockIn/{id}','employeeController@getEmployee');