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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/Pegawai', 'PegawaiController@index');
Route::get('/TambahPegawai', 'PegawaiController@create')->name('pegawai.create');
Route::post('/SimpanPegawai', 'PegawaiController@store');
Route::get('/HapusPegawai/{id}', 'PegawaiController@delete');
Route::get('/EditPegawai/{id}', 'PegawaiController@edit');
Route::post('/SimpanEditPegawai/{id}', 'PegawaiController@update');




Route::get('/Cuti', 'CutiController@index');
Route::get('/TambahCuti', 'CutiController@create')->name('cuti.create');
Route::post('/SimpanCuti', 'CutiController@store');
Route::get('/HapusCuti/{id}', 'CutiController@delete');
Route::get('/EditCuti/{id}', 'CutiController@edit');
Route::post('/SimpanEditCuti/{id}', 'CutiController@update');

// Route::get('/frontend', 'HomeController@frontend');