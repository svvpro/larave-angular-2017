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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'SiteController@index');

Route::get('api/suppliers/{id?}', 'SupplierController@index');
Route::post('api/suppliers', 'SupplierController@store');
Route::post('api/suppliers/{id}', 'SupplierController@update');
Route::delete('api/suppliers/{id}', 'SupplierController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
