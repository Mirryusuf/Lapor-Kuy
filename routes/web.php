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

Route::get('/','App\Http\Controllers\aspirasiController@index');
Route::post('/simpan-data','App\Http\Controllers\aspirasiController@store')->name('simpan-data');
Route::get('/pencarian-data','App\Http\Controllers\aspirasiController@pencarian')->name('pencarian-data');
Route::post('/cari-data','App\Http\Controllers\aspirasiController@caridata')->name('cari-data');
Route::get('/admin','App\Http\Controllers\loginController@index');
Route::post('/login','App\Http\Controllers\loginController@login')->name('login');
Route::group(['middleware' => 'cekLoginMiddleware'], function () {
	Route::get('/dashboard','App\Http\Controllers\adminController@index');
	Route::get('/edit-data/{id}','App\Http\Controllers\adminController@edit')->name('edit-data');
	Route::put('/update/{id}','App\Http\Controllers\adminController@update')->name('update');
	Route::post('/destroy/{id}','App\Http\Controllers\adminController@destroy')->name('destroy');
	Route::get('/logout','App\Http\Controllers\loginController@logout')->name('logout');
});
