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

// root
// kalau misalkan ada yang aksess halaman get maka tampilkan file welcome

// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/about', function () {
//     $nama = 'Unggar Madi';
//     return view('about', ['nama' => $nama]);
// });


// // Data
// Route::get('/data', 'DataController@index');

// // Arsip

// Route::get('/arsip', 'ArsipController@index');

// Route::get('/arsip/create', 'ArsipController@create');

// Route::get('/arsip/{arsip}', 'ArsipController@show');

// Route::post('/arsip', 'ArsipController@store');
// Route::delete('/arsip/{arsip}', 'ArsipController@destroy');
// Route::get('/arsip/{arsip}/edit', 'ArsipController@edit');
// Route::patch('/arsip/{arsip}', 'ArsipController@update');
Route::resource('arsip', 'ArsipController');
Route::resource('data', 'DataController');
Route::resource('views', 'PagesController');

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
