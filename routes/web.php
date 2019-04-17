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

//view app

Route::group(['middleware' => 'auth'], function(){
  Route::view('/', 'dashboard.index')->name('dashboard');

	Route::group(['prefix' => 'rekanan', 'as' => 'rekanan'], function(){
		Route::get('data', 'RekananController@index');
		Route::get('cetak', 'RekananController@generatePDF')->name('Cetak');
		Route::get('tambah', 'RekananController@create')->name('Create');
		Route::post('tambah', 'RekananController@store')->name('Store');
		Route::get('{id}', 'RekananController@edit')->name('Edit');
		Route::put('{id}', 'RekananController@update')->name('Update');
		Route::delete('{id}', 'RekananController@delete')->name('Delete');
	});

  Route::group(['prefix' => 'rekanan', 'as' => 'rekanan'], function(){
    Route::get('', 'RekananController@index');
    Route::get('cetak', 'RekananController@generatePDF')->name('Cetak');
    Route::get('tambah', 'RekananController@create')->name('Create');
    Route::post('tambah', 'RekananController@store')->name('Store');
    Route::get('{id}', 'RekananController@edit')->name('Edit');
    Route::put('{id}', 'RekananController@update')->name('Update');
    Route::delete('{id}', 'RekananController@delete')->name('Delete');
  });

  Route::group(['prefix' => 'barang', 'as' => 'barang'], function(){
    Route::get('', 'BarangController@index');
    Route::post('cetak', 'BarangController@generatePDF')->name('Cetak');
    Route::get('tambah', 'BarangController@create')->name('Create');
    Route::post('tambah', 'BarangController@store')->name('Store');
    Route::get('{id}', 'BarangController@edit')->name('Edit');
    Route::put('{id}', 'BarangController@update')->name('Update');
    Route::delete('{id}', 'BarangController@delete')->name('Delete');
  });

  Route::group(['prefix' => 'terkirim', 'as' => 'terkirim'], function(){
		Route::get('', 'TerkirimController@index');
		Route::post('cetak', 'TerkirimController@generatePDF')->name('Cetak');
  });

  Route::group(['prefix' => 'monitoring', 'as' => 'monitoring'], function(){
		Route::get('', 'MonitoringController@index');
    Route::post('cetak', 'MonitoringController@generatePDF')->name('Cetak');
    Route::put('{id}', 'MonitoringController@update')->name('Update');
  });
});


Route::group(['namespace' => 'Auth'], function () {
  Route::get('login', 'LoginController@showLoginForm');
  Route::post('login', 'LoginController@login')->name('login');
  Route::get('logout', 'LoginController@logout')->name('logout');
});
