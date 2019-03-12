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
Route::get('/merk', 'MerkController@index');
Route::post('/merk/store', 'MerkController@store');

Route::get('/barang/view', 'BarangController@view');
Route::get('/merk/view', 'MerkController@view');
Route::get('/test', 'oneController@index');

Route::get('/bukutamu/{id}&{nama}', function ($id, $nama) {
    return 'Hello Tamu ke-' . $id . ' Nama mu : ' . $nama;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
