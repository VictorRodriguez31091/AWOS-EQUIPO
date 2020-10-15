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
//Rutas de hpp
Route::resource('/PrimerVista', 'hpp\controllerusers');
//Rutas de hpp array
Route::get('/ArrayconJson', 'hpp\controllerusers@getadministradores')->name('administradores');