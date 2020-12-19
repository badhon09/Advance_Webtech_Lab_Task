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
Route::Auth();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/addemployee', 'AdminController@addemployee')->name('admin.addemployee');
Route::post('/admin/addemployee', 'AdminController@store');
Route::get('/admin/deleteemployee/{id}', 'AdminController@delete')->name('admin.deleteemployee');


});


Route::group(['middleware' => 'employee'], function () {
    


Route::get('/employee', 'EmployeeController@index')->name('employee');
Route::get('/employee/addproduct', 'EmployeeController@addproduct')->name('employee.addproduct');
Route::post('/employee/addproduct', 'EmployeeController@store');
Route::get('/employee/deleteproduct/{id}', 'EmployeeController@delete')->name('employee.deleteemployee');

});