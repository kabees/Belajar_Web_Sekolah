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
	
    return view('index');

    // return view('welcome');
});

Auth::routes();
Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::post('/siswa/{id}/tampilan','SiswaController@create');
Route::post('/');

Route::get('/music','MusicController@index');
Route::post('/music/create','MusicController@create');
Route::get('/music/{id}/edit','MusicController@edit');
Route::post('/music/{id}/update','MusicController@update');
Route::get('/music/{id}/delete','MusicController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
