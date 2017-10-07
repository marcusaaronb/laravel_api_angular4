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


Route::get('/EmployeeList','EmployeeCtrl@index');
Route::delete('/Employeeremove/{id}','EmployeeCtrl@destroy');
Route::post('/EmployeeAdd', 'EmployeeCtrl@add');
Route::get('/EmployeeSingleFetch/{id}', 'EmployeeCtrl@single_fetch');
Route::post('/EmployeeUpdate', 'EmployeeCtrl@update');
