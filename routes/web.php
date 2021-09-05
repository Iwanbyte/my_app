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

Route::get('/artikels', 'ArtikelController@index')->name('artikel-page');
Route::post('/artikels/create', 'ArtikelController@store')->name('artikel-create');
Route::get('/artikels/edit/{id}', 'ArtikelController@edit')->name('artikel-edit');
Route::put('/artikels/update/{id}', 'ArtikelController@update')->name('artikel-update');
Route::delete('/artikels/delete/{id}', 'ArtikelController@delete')->name('artikel-delete');

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
