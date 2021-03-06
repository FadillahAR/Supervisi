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

Route::resource('materis','MateriController');
Route::resource('supervisors','SupervisorController');
Route::resource('gurus','GuruController');
Route::resource('laporans','LaporanController');
Route::resource('jadwals','JadwalController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/supervisor', 'HomeController@supervisor')->name('supervisor');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('title');