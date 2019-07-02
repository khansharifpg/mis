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

Route::get('/','studentcontroller@index')->name('home');
Route::get('create','studentcontroller@create')->name('create');
Route::post('create','studentcontroller@store')->name('store');
Route::get('edit/{id}','studentcontroller@edit')->name('edit');
Route::post('update/{id}','studentcontroller@update')->name('update');
Route::delete('delete/{id}','studentcontroller@delete')->name('delete');
