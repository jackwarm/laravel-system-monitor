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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/server/{id}', 'ServerController@show')->name('server.show');
Route::get('/cpu/{id}', 'CpuController@show')->name('cpu.show');
Route::get('/alert/{id}', 'AlertController@show')->name('alert.show');
Route::get('/hosting/{id}', 'HostingController@show')->name('hosting.show');
Route::get('/disk/{id}', 'DiskController@show')->name('disk.show');
Route::get('/memory/{id}', 'MemoryController@show')->name('memory.show');