<?php

use Illuminate\Support\Facades\Route;

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
    //DASHBOARD ROUTES
Route::get('admin/dashboard','Backend\DashboardController@index')->name('dashboard');

   // ------ ALL EMPLOYEE SECTION ROUTES----------
Route::get('admin/employee/all','Backend\EmployeeController@index')->name('allEmployee');
Route::get('admin/employee/create','Backend\EmployeeController@create')->name('createEmployee');
Route::post('admin/employee/store','Backend\EmployeeController@store')->name('storeEmployee');
Route::get('admin/employee/edit','Backend\EmployeeController@edit')->name('editEmployee');
Route::post('admin/employee/update','Backend\EmployeeController@update')->name('updateEmployee');
Route::get('admin/employee/delete','Backend\EmployeeController@delete')->name('deleteEmployee');

