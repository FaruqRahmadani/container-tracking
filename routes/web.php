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

Route::view('/login', 'depan.auth');
