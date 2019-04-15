<?php

Route::group(['middleware' => 'auth'], function(){
  Route::get('/', function () {
    return view('template.dashboard');
  });
  // ======== template pages =========
  // dashboard
  Route::view('template/dashboard', 'template.dashboard');
  // auth pages
  Route::view('template/login', 'template.authLogin');
  Route::view('template/register', 'template.authRegister');
  Route::view('template/forget', 'template.authForgetPassword');
  // component
  Route::view('template/button', 'template.button');
  Route::view('template/card', 'template.card');
  Route::view('template/form1', 'template.formTopLabel');
  Route::view('template/form2', 'template.formHorizontal');
  // utility
  Route::view('template/color', 'template.utilityColor');
  Route::view('template/border', 'template.utilityBorder');
  Route::view('template/animation', 'template.utilityAnimation');
  Route::view('template/other', 'template.utilityOther');
  // pages
  Route::view('template/blank', 'template.blank');
  // dataTable
  Route::view('template/data', 'template.dataTable');
  // chart.js
  Route::view('template/chart', 'template.chart');

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
    Route::view('tambah', 'barang.create')->name('Create');
  });
});


Route::group(['namespace' => 'Auth'], function () {
  Route::get('login', 'LoginController@showLoginForm');
  Route::post('login', 'LoginController@login')->name('login');
  Route::get('logout', 'LoginController@logout')->name('logout');
});
