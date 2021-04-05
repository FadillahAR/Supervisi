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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/supervisis', 'SupervisiController@index');
Route::get('/supervisis/cetak', 'SupervisiController@cetak');


Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::resource('materis','MateriController');
Route::resource('supervisis','SupervisiController');
Route::resource('jadwals','JadwalController');

Route::group(['middleware' => ['auth', 'role:1,2,3,4']], function (){
    
    Route::get('/halaman', function () {
        return view('halaman.halaman');
    });
});

